  <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
  <!-- Tailwind CSS CDN -->
  <script src="https://cdn.tailwindcss.com/3.4.17"></script>
  <script>
      tailwind.config = {
          darkMode: 'class',
          theme: {
              extend: {
                  fontFamily: {
                      sans: ['Quicksand', 'ui-sans-serif', 'system-ui', 'sans-serif']
                  },
                  colors: {
                      brand: {
                          50: '#e7f4ee',
                          100: '#cfe9dc',
                          200: '#9fd3b9',
                          300: '#6fbd96',
                          400: '#3fa773',
                          500: '#0f7a4f',
                          600: '#0c6842',
                          700: '#0a5a3a',
                          800: '#08462d',
                          900: '#10261c'
                      },
                      accent: '#f59f1b'
                  }
              }
          }
      };
  </script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.1/dist/chart.umd.min.js"></script>
  <style>
      body {
          font-family: 'Quicksand', sans-serif;
      }

      .sb-scroll {
          scrollbar-width: thin;
          scrollbar-color: rgba(255, 255, 255, .2) transparent;
      }

      .sb-scroll::-webkit-scrollbar {
          width: 5px;
      }

      .sb-scroll::-webkit-scrollbar-thumb {
          background: rgba(255, 255, 255, .2);
          border-radius: 5px;
      }

      .table-scroll {
          overflow-x: auto;
          scrollbar-width: thin;
      }

      .card-hover {
          transition: transform .25s, box-shadow .25s;
      }

      .card-hover:hover {
          transform: translateY(-3px);
          box-shadow: 0 14px 34px rgba(20, 30, 50, .12);
      }

      @media (min-width: 1024px) {
          .collapsed #sidebar {
              width: 5rem;
          }

          .collapsed #mainWrap {
              padding-left: 5rem;
          }

          .collapsed #sidebar .sb-text,
          .collapsed #sidebar .sb-kids {
              display: none;
          }

          .collapsed #sidebar nav a,
          .collapsed #sidebar nav button,
          .collapsed #sidebar .sb-group>button {
              justify-content: center;
          }
      }

      @media print {

          #sidebar,
          header,
          #sbOverlay {
              display: none !important;
          }

          #mainWrap {
              padding: 0 !important;
          }
      }
  </style>
