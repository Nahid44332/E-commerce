    <script>
        const sb = document.getElementById('sidebar'),
            ov = document.getElementById('sbOverlay'),
            body = document.body;

        document.getElementById('sbToggle').onclick = () => {
            if (window.innerWidth >= 1024) {
                body.classList.toggle('collapsed');
                const isCollapsed = body.classList.contains('collapsed');
                localStorage.setItem('admin_sb_collapsed', isCollapsed ? '1' : '0');
            } else {
                sb.classList.remove('-translate-x-full');
                ov.classList.remove('hidden');
            }
        };

        if (localStorage.getItem('admin_sb_collapsed') === '1') {
            body.classList.add('collapsed');
        }

        document.getElementById('sbClose').onclick = () => {
            sb.classList.add('-translate-x-full');
            ov.classList.add('hidden');
        };
        ov.onclick = () => {
            sb.classList.add('-translate-x-full');
            ov.classList.add('hidden');
        };

        document.querySelectorAll('[data-acc]').forEach(btn => {
            btn.onclick = () => {
                const kids = btn.nextElementSibling;
                kids.classList.toggle('hidden');
                btn.querySelector('.fa-chevron-down').classList.toggle('rotate-180', !kids.classList.contains(
                    'hidden'));
            };
        });

        document.getElementById('themeBtn').onclick = () => {
            const isDark = document.documentElement.classList.toggle('dark');
            localStorage.setItem('admin_theme', isDark ? 'dark' : 'light');
            drawCharts();
        };
        if (localStorage.getItem('admin_theme') === 'dark') {
            document.documentElement.classList.add('dark');
        }

        document.querySelectorAll('[data-dd-btn]').forEach(btn => {
            btn.onclick = (e) => {
                e.stopPropagation();
                const panel = btn.nextElementSibling;
                document.querySelectorAll('[data-dd-panel]').forEach(p => {
                    if (p !== panel) p.classList.add('hidden');
                });
                panel.classList.toggle('hidden');
            };
        });
        window.onclick = () => {
            document.querySelectorAll('[data-dd-panel]').forEach(p => p.classList.add('hidden'));
        };

        const DATA = {
            '7d': {
                l: ['Sat', 'Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri'],
                d: [42000, 51000, 38500, 62000, 58000, 71000, 66000]
            },
            '30d': {
                l: ['W1', 'W2', 'W3', 'W4'],
                d: [285000, 342000, 318000, 396000]
            },
            '12m': {
                l: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
                d: [820000, 760000, 910000, 980000, 1050000, 990000, 1120000, 1180000, 1090000, 1250000, 0, 0]
            }
        };
        let cur = '7d',
            salesChart, statusChart;

        function getChartColors() {
            const dark = document.documentElement.classList.contains('dark');
            return {
                grid: dark ? 'rgba(255,255,255,.08)' : 'rgba(0,0,0,.06)',
                text: dark ? '#94a3b8' : '#64748b',
                border: dark ? '#0f172a' : '#fff'
            };
        }

        function drawCharts() {
            const c = getChartColors();
            const ctxSales = document.getElementById('salesChart').getContext('2d');
            const g = ctxSales.createLinearGradient(0, 0, 0, 280);
            g.addColorStop(0, 'rgba(15,122,79,.35)');
            g.addColorStop(1, 'rgba(15,122,79,0)');

            if (salesChart) salesChart.destroy();
            salesChart = new Chart(ctxSales, {
                type: 'line',
                data: {
                    labels: DATA[cur].l,
                    datasets: [{
                        data: DATA[cur].d,
                        borderColor: '#0f7a4f',
                        backgroundColor: g,
                        fill: true,
                        tension: .4,
                        borderWidth: 3,
                        pointRadius: 4,
                        pointBackgroundColor: '#fff',
                        pointBorderColor: '#0f7a4f',
                        pointBorderWidth: 2
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: {
                            display: false
                        }
                    },
                    scales: {
                        x: {
                            grid: {
                                display: false
                            },
                            ticks: {
                                color: c.text
                            }
                        },
                        y: {
                            grid: {
                                color: c.grid
                            },
                            ticks: {
                                color: c.text
                            },
                            beginAtZero: true
                        }
                    }
                }
            });

            const ctxStatus = document.getElementById('statusChart').getContext('2d');
            if (statusChart) statusChart.destroy();
            statusChart = new Chart(ctxStatus, {
                type: 'doughnut',
                data: {
                    labels: ['Delivered', 'Processing', 'Pending', 'Cancelled'],
                    datasets: [{
                        data: [62, 18, 12, 8],
                        backgroundColor: ['#0f7a4f', '#3b82f6', '#f59f1b', '#ef4444'],
                        borderColor: c.border,
                        borderWidth: 4
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    cutout: '70%',
                    plugins: {
                        legend: {
                            display: false
                        }
                    }
                }
            });
        }

        drawCharts();

        document.querySelectorAll('#rangeTabs button').forEach(b => {
            b.onclick = function() {
                cur = b.getAttribute('data-r');
                document.querySelectorAll('#rangeTabs button').forEach(x => {
                    x.className = 'rounded-full px-3 py-1 sm:px-4 sm:py-1.5 ' + (x === b ?
                        'bg-white text-brand-600 shadow dark:bg-slate-700' : 'text-slate-500');
                });
                drawCharts();
            };
        });
    </script>

 <script>
(function() {
    const dot = document.getElementById('cursorDot');
    const ring = document.getElementById('cursorRing');
    const canvas = document.getElementById('magic-canvas');
    const ctx = canvas.getContext('2d');

    let mouse = { x: -100, y: -100 };
    let ringPos = { x: -100, y: -100 };
    let particles = [];

    // থিম ম্যাচিং কালার প্যালেট
    const colors = ['#0f7a4f', '#f59f1b', '#2ecc71', '#ffc107', '#ffffff'];

    function resizeCanvas() {
        canvas.width = window.innerWidth;
        canvas.height = window.innerHeight;
    }
    window.addEventListener('resize', resizeCanvas);
    resizeCanvas();

    // মাউস পজিশন ট্র্যাকিং
    window.addEventListener('mousemove', (e) => {
        mouse.x = e.clientX;
        mouse.y = e.clientY;

        // দ্রুত পয়েন্টার ডট
        dot.style.left = `${mouse.x}px`;
        dot.style.top = `${mouse.y}px`;

        // মাউস নাড়ালে পেছনের স্পার্কল তৈরি
        if (Math.random() < 0.6) {
            createParticle(mouse.x, mouse.y, false);
        }
    });

    // ক্লিকে ম্যাজিক বাস্ট/আতশবাজি ইফেক্ট
    window.addEventListener('click', (e) => {
        for (let i = 0; i < 20; i++) {
            createParticle(e.clientX, e.clientY, true);
        }
    });

    // স্পার্কল কণা তৈরির ফাংশন
    function createParticle(x, y, isBurst) {
        const size = isBurst ? Math.random() * 6 + 3 : Math.random() * 4 + 1.5;
        const speed = isBurst ? Math.random() * 5 + 2 : Math.random() * 1.5 + 0.2;
        const angle = Math.random() * Math.PI * 2;

        particles.push({
            x: x,
            y: y,
            size: size,
            vx: Math.cos(angle) * speed,
            vy: Math.sin(angle) * speed + (isBurst ? 0 : -0.5),
            color: colors[Math.floor(Math.random() * colors.length)],
            alpha: 1,
            decay: isBurst ? Math.random() * 0.03 + 0.015 : Math.random() * 0.02 + 0.01
        });
    }

    // প্রধান অ্যানিমেশন লুপ
    function animate() {
        ctx.clearRect(0, 0, canvas.width, canvas.height);

        // স্মুথ লার্পিং (Smooth Lagging Effect for Ring)
        ringPos.x += (mouse.x - ringPos.x) * 0.18;
        ringPos.y += (mouse.y - ringPos.y) * 0.18;
        ring.style.left = `${ringPos.x}px`;
        ring.style.top = `${ringPos.y}px`;

        // কণা ড্র ও আপডেট করা
        for (let i = particles.length - 1; i >= 0; i--) {
            let p = particles[i];
            p.x += p.vx;
            p.y += p.vy;
            p.alpha -= p.decay;

            if (p.alpha <= 0) {
                particles.splice(i, 1);
                continue;
            }

            ctx.save();
            ctx.globalAlpha = p.alpha;
            ctx.fillStyle = p.color;
            ctx.shadowBlur = 8;
            ctx.shadowColor = p.color;

            ctx.beginPath();
            ctx.arc(p.x, p.y, p.size, 0, Math.PI * 2);
            ctx.fill();
            ctx.restore();
        }

        requestAnimationFrame(animate);
    }
    animate();

    // বাটন/লিঙ্ক হোভার ইফেক্ট
    const interactiveElements = 'a, button, input, select, textarea, [role="button"]';
    document.addEventListener('mouseover', (e) => {
        if (e.target.closest(interactiveElements)) {
            document.body.classList.add('cursor-hover');
        }
    });
    document.addEventListener('mouseout', (e) => {
        if (e.target.closest(interactiveElements)) {
            document.body.classList.remove('cursor-hover');
        }
    });
})();
</script>