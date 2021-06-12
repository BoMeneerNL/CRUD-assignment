module.exports = {
    //mode: 'jit',
    purge: {
        content: ['./scripts/phpstatic/*.php', './scripts/phpstatic/errors/*.php', './*.php', './scripts/phpbg/*.php']
    },
    darkMode: false, // or 'media' or 'class'
    theme: {
        extend: {
            colors: { 'ijp-1': '#00B0F0','ijp-2': '#0070C0','ijp-3': '#FF0000','ijp-4': '#171616','ijp-5': '#FFFFFF' },
            height: {"h-30": '30px', "h-32": '32px'},
            width: {"w-30": '30px', "w-32": '32px'},
            screens: {
                'nHD': "640px",'qHD': "960px",'HD': "1280",'WXGA': "1366", 'HD+': "1600px",'FHD': "1920px",'QHD': "2560px",'QHD+': "3200px",'4KUHD': "3840px",'F4KUHD': "4096px",'5KUHD': "5120px",'8KUHD': "7680px" },
        },
        variants: {
            extend: {},
        },
        plugins: [],
    },
}