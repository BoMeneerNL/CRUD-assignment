module.exports = {
  purge: {
    enabled: true,
    content: ['./scripts/phpstatic/*.php', './scripts/phpstatic/errors/*.php', './scripts/js/*.js', './*.php', './scripts/phpbg/*.php', './scripts/phpbg/sql-pdo/*.php'],
    options: {
      keyframes: true,
    },
  },
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {
      colors: {
        'ijp-1': '#00B0F0', 'ijp-2': '#0070C0', 'ijp-3': '#FF0000', 'ijp-4': '#171616', 'ijp-5': '#FFFFFF',
      },
      height: {
        "h-32": '32px'
      },
    },
    variants: {
      extend: {},
    },
    plugins: [],
  },
}