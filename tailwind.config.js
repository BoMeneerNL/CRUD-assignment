module.exports = {
    mode: 'jit',
    purge: {
        content: ['./scripts/phpstatic/*.php', './scripts/phpstatic/errors/*.php', './*.php', './scripts/phpbg/*.php']
    },
    darkMode: false, // or 'media' or 'class'
    theme: {
        extend: {
            colors: {
                'ijp-1': '#00B0F0',
                'ijp-2': '#0070C0',
                'ijp-3': '#FF0000',
                'ijp-4': '#171616',
                'ijp-5': '#FFFFFF'
            },
            height: {"h-30": '30px', "h-32": '32px'},
            width: {"w-30": '30px', "w-32": '32px'},
        },
        variants: {
            extend: {},
        },
        plugins: [],
    },
}