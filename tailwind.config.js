module.exports = {
  purge: {
    enabled: true,
    content: ['./scripts/phpstatic/*.php','./scripts/phpstatic/errors/*.php', './scripts/js/*.js', './*.php','./scripts/phpbg/*.php','./scripts/phpbg/sql-pdo/*.php'],
  },
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {
      colors: {
        'ijp-lichtblauw': '#00B0F0',
        'ijp-donkerblauw': '#0070C0',
        'ijp-rood': '#FF0000',
        'ijp-zwart': '#171616',
        'ijp-wit': '#FFFFFF',
      },
      height: {
        "h-32": '32px'
      },
      minHeight: {
        '10p': '10%',
        '20p': '20%',
        '30p': '30%',
        '40p': '40%',
        '50p': '50%',
        '60p': '60%',
        '70p': '70%',
        '80p': '80%',
        '90p': '90%',
      },
    },
  variants: {
    extend: {},
  },
  plugins: [],
},
}
