<!DOCTYPE html>
<html lang="ja" class="is-load-before is-splash-before">

<head>
    <style type="text/css">
    @font-face {
        font-family: 'i';
        src: url('https://theshift.tokyo/wp-content/themes/the-shift/assets/fonts/icon/i.woff') format('woff');
        font-weight: normal;
        font-style: normal;
        font-display: block
    }

    @font-face {
        font-family: 'YakuHanJP';
        src: url('https://theshift.tokyo/wp-content/themes/the-shift/assets/fonts/YakuHanJP/YakuHanJP-DemiLight.woff2') format("woff2");
        unicode-range: U+3001-3002, U+3008-3011, U+3014-3015, U+30fb, U+ff01, U+ff08-ff09, U+ff1a-ff1b, U+ff1f, U+ff3b, U+ff3d, U+ff5b, U+ff5d;
        font-style: normal;
        font-weight: 400;
        font-display: swap
    }

    @font-face {
        font-family: 'gallery';
        src: url('https://theshift.tokyo/wp-content/themes/the-shift/assets/fonts/gallery/Regular.woff2') format('woff2');
        font-weight: 400;
        font-style: normal;
        font-display: swap
    }

    @font-face {
        font-family: 'lausanne';
        src: url('https://theshift.tokyo/wp-content/themes/the-shift/assets/fonts/lausanne/150.woff2') format('woff2');
        font-weight: 150;
        font-style: normal;
        font-display: swap
    }

    @font-face {
        font-family: 'everett';
        src: url('https://theshift.tokyo/wp-content/themes/the-shift/assets/fonts/everett/Light.woff2') format('woff2');
        font-weight: 100;
        font-style: normal;
        font-display: swap
    }

    @font-face {
        font-family: 'everett';
        src: url('https://theshift.tokyo/wp-content/themes/the-shift/assets/fonts/everett/Regular.woff2') format('woff2');
        font-weight: 400;
        font-style: normal;
        font-display: swap
    }

    :root {
        --gw: 4.16666667vw;
        --col-font-black: rgba(20, 20, 20, 1);
        --col-black: rgba(20, 20, 20, 1);
        --col-white: rgba(240, 240, 240, 1);
        --col-l-gray: rgba(230, 230, 230, 1);
        --col-d-gray: rgba(50, 50, 50, 1);
        --col-orange: rgba(254, 66, 73, 1)
    }

    [data-theme="light"]:root {
        --col-font-black: rgba(245, 245, 245, 1);
        --col-white: rgba(5, 5, 5, 1);
        --col-black: rgba(245, 245, 245, 1);
        --col-l-gray: rgba(230, 230, 230, 1);
        --col-d-gray: rgba(50, 50, 50, 1)
    }

    @media (min-width:1024px) {
        .is-load-before .site-window {
            opacity: 0
        }

        .fadein {
            visibility: hidden;
            opacity: 0
        }
    }
    </style>
    <script type="text/javascript">
    window.styleMenu = null;
    const UNIQID = "657c52023fb6b";
    const TEMPLATE_URL = 'https://theshift.tokyo/wp-content/themes/the-shift';
    const SITE_URL = '/';
    const CDN_URL = 'https://d17292ff19wl6v.cloudfront.net/v2';
    const SCRIPT_FOR_DESKTOP =
        "https://theshift.tokyo/wp-content/themes/the-shift/assets/js/prod-desktop.js?657c52023fbc3";
    const SCRIPT_FOR_MOBILE =
        "https://theshift.tokyo/wp-content/themes/the-shift/assets/js/prod-mobile.js?657c52023fbe1";
    const THUMB = [{
        title: "Atelier Wen",
        post_id: "2124",
        type: "project",
        media: "image",
        ratio: {
            w: "1800",
            h: "1044",
        },
        video: {
            src: "/wp-content/uploads/2021/07/1280x720.mp4",
        },
        image: {
            d2x: "https://d17292ff19wl6v.cloudfront.net/v2/wp/wp-content/uploads/2023/10/07034252/AW_web_top-1800x1044.jpg",
            d1x: "https://d17292ff19wl6v.cloudfront.net/v2/wp/wp-content/uploads/2023/10/07034252/AW_web_top-1200x696.jpg",
            mob: "https://d17292ff19wl6v.cloudfront.net/v2/wp/wp-content/uploads/2023/10/07034252/AW_web_top-720x417.jpg",
        }
    }, {
        title: "JAL SKY MUSEUM",
        post_id: "580",
        type: "project",
        media: "image",
        ratio: {
            w: "1800",
            h: "1201",
        },
        video: {
            src: "",
        },
        image: {
            d2x: "https://d17292ff19wl6v.cloudfront.net/v2/wp/wp-content/uploads/2021/08/02155405/210521_jal0560s1-1800x1201.jpeg",
            d1x: "https://d17292ff19wl6v.cloudfront.net/v2/wp/wp-content/uploads/2021/08/02155405/210521_jal0560s1-1200x800.jpeg",
            mob: "https://d17292ff19wl6v.cloudfront.net/v2/wp/wp-content/uploads/2021/08/02155405/210521_jal0560s1-720x480.jpeg",
        }
    }, {
        title: "SHIFT LINK",
        post_id: "1626",
        type: "project",
        media: "image",
        ratio: {
            w: "1800",
            h: "1013",
        },
        video: {
            src: "/wp-content/uploads/2021/07/1280x720.mp4",
        },
        image: {
            d2x: "https://d17292ff19wl6v.cloudfront.net/v2/wp/wp-content/uploads/2022/05/03060501/OGP-1-1800x1013.jpg",
            d1x: "https://d17292ff19wl6v.cloudfront.net/v2/wp/wp-content/uploads/2022/05/03060501/OGP-1-1200x675.jpg",
            mob: "https://d17292ff19wl6v.cloudfront.net/v2/wp/wp-content/uploads/2022/05/03060501/OGP-1-720x405.jpg",
        }
    }, {
        title: "JAL STEAM SCHOOL",
        post_id: "193",
        type: "project",
        media: "image",
        ratio: {
            w: "1558",
            h: "862",
        },
        video: {
            src: "",
        },
        image: {
            d2x: "https://d17292ff19wl6v.cloudfront.net/v2/wp/wp-content/uploads/2021/09/02142837/27625121_1689347884454597_2973671497472342676_o.jpg",
            d1x: "https://d17292ff19wl6v.cloudfront.net/v2/wp/wp-content/uploads/2021/09/02142837/27625121_1689347884454597_2973671497472342676_o-1200x664.jpg",
            mob: "https://d17292ff19wl6v.cloudfront.net/v2/wp/wp-content/uploads/2021/09/02142837/27625121_1689347884454597_2973671497472342676_o-720x398.jpg",
        }
    }, {
        title: "Level of Distance",
        post_id: "1851",
        type: "project",
        media: "image",
        ratio: {
            w: "1800",
            h: "1200",
        },
        video: {
            src: "",
        },
        image: {
            d2x: "https://d17292ff19wl6v.cloudfront.net/v2/wp/wp-content/uploads/2023/02/09191431/M094-1-1800x1200.jpg",
            d1x: "https://d17292ff19wl6v.cloudfront.net/v2/wp/wp-content/uploads/2023/02/09191431/M094-1-1200x800.jpg",
            mob: "https://d17292ff19wl6v.cloudfront.net/v2/wp/wp-content/uploads/2023/02/09191431/M094-1-720x480.jpg",
        }
    }, {
        title: "IPSA AQUA PLAY ART",
        post_id: "1781",
        type: "project",
        media: "image",
        ratio: {
            w: "1800",
            h: "1200",
        },
        video: {
            src: "",
        },
        image: {
            d2x: "https://d17292ff19wl6v.cloudfront.net/v2/wp/wp-content/uploads/2022/07/22191831/ipsa_04_v3.jpg",
            d1x: "https://d17292ff19wl6v.cloudfront.net/v2/wp/wp-content/uploads/2022/07/22191831/ipsa_04_v3-1200x800.jpg",
            mob: "https://d17292ff19wl6v.cloudfront.net/v2/wp/wp-content/uploads/2022/07/22191831/ipsa_04_v3-720x480.jpg",
        }
    }, {
        title: "Onerace",
        post_id: "192",
        type: "project",
        media: "image",
        ratio: {
            w: "1800",
            h: "856",
        },
        video: {
            src: "",
        },
        image: {
            d2x: "https://d17292ff19wl6v.cloudfront.net/v2/wp/wp-content/uploads/2019/07/06141301/a002b_0303-1800x856.jpg",
            d1x: "https://d17292ff19wl6v.cloudfront.net/v2/wp/wp-content/uploads/2019/07/06141301/a002b_0303-1200x571.jpg",
            mob: "https://d17292ff19wl6v.cloudfront.net/v2/wp/wp-content/uploads/2019/07/06141301/a002b_0303-720x343.jpg",
        }
    }, {
        title: "Finding Perceptions",
        post_id: "484",
        type: "project",
        media: "image",
        ratio: {
            w: "1800",
            h: "1202",
        },
        video: {
            src: "",
        },
        image: {
            d2x: "https://d17292ff19wl6v.cloudfront.net/v2/wp/wp-content/uploads/2021/08/27104008/180116_0018_3-1800x1202.jpg",
            d1x: "https://d17292ff19wl6v.cloudfront.net/v2/wp/wp-content/uploads/2021/08/27104008/180116_0018_3-1200x801.jpg",
            mob: "https://d17292ff19wl6v.cloudfront.net/v2/wp/wp-content/uploads/2021/08/27104008/180116_0018_3-720x481.jpg",
        }
    }, {
        title: "Coca-Cola coke vision",
        post_id: "604",
        type: "project",
        media: "image",
        ratio: {
            w: "1800",
            h: "1200",
        },
        video: {
            src: "",
        },
        image: {
            d2x: "https://d17292ff19wl6v.cloudfront.net/v2/wp/wp-content/uploads/2021/09/01184443/0U0A0337-1800x1200.jpeg",
            d1x: "https://d17292ff19wl6v.cloudfront.net/v2/wp/wp-content/uploads/2021/09/01184443/0U0A0337-1200x800.jpeg",
            mob: "https://d17292ff19wl6v.cloudfront.net/v2/wp/wp-content/uploads/2021/09/01184443/0U0A0337-720x480.jpeg",
        }
    }, {
        title: "Nissan IMx Demonstrator",
        post_id: "496",
        type: "project",
        media: "image",
        ratio: {
            w: "1800",
            h: "1200",
        },
        video: {
            src: "",
        },
        image: {
            d2x: "https://d17292ff19wl6v.cloudfront.net/v2/wp/wp-content/uploads/2021/08/27154811/YK11257-1800x1200.jpeg",
            d1x: "https://d17292ff19wl6v.cloudfront.net/v2/wp/wp-content/uploads/2021/08/27154811/YK11257-1200x800.jpeg",
            mob: "https://d17292ff19wl6v.cloudfront.net/v2/wp/wp-content/uploads/2021/08/27154811/YK11257-720x480.jpeg",
        }
    }, {
        title: "kolor PARISCollection",
        post_id: "189",
        type: "project",
        media: "image",
        ratio: {
            w: "1800",
            h: "1013",
        },
        video: {
            src: "",
        },
        image: {
            d2x: "https://d17292ff19wl6v.cloudfront.net/v2/wp/wp-content/uploads/2021/09/02142645/kolor_full_filter7per-1800x1013.jpg",
            d1x: "https://d17292ff19wl6v.cloudfront.net/v2/wp/wp-content/uploads/2021/09/02142645/kolor_full_filter7per-1200x675.jpg",
            mob: "https://d17292ff19wl6v.cloudfront.net/v2/wp/wp-content/uploads/2021/09/02142645/kolor_full_filter7per-720x405.jpg",
        }
    }, {
        title: "Munch in motion",
        post_id: "184",
        type: "project",
        media: "image",
        ratio: {
            w: "1800",
            h: "1200",
        },
        video: {
            src: "https://d17292ff19wl6v.cloudfront.net/v2/wp/wp-content/uploads/2017/07/24102412/kolor.mp4",
        },
        image: {
            d2x: "https://d17292ff19wl6v.cloudfront.net/v2/wp/wp-content/uploads/2021/07/20231210/f5%402x-1800x1200.jpg",
            d1x: "https://d17292ff19wl6v.cloudfront.net/v2/wp/wp-content/uploads/2021/07/20231210/f5%402x-1200x800.jpg",
            mob: "https://d17292ff19wl6v.cloudfront.net/v2/wp/wp-content/uploads/2021/07/20231210/f5%402x-720x480.jpg",
        }
    }, {
        title: "PPP CI renewal",
        post_id: "183",
        type: "project",
        media: "image",
        ratio: {
            w: "1800",
            h: "1200",
        },
        video: {
            src: "/wp-content/uploads/2021/07/1280x720.mp4",
        },
        image: {
            d2x: "https://d17292ff19wl6v.cloudfront.net/v2/wp/wp-content/uploads/2021/07/20231202/f7%402x-1800x1200.jpg",
            d1x: "https://d17292ff19wl6v.cloudfront.net/v2/wp/wp-content/uploads/2021/07/20231202/f7%402x-1200x800.jpg",
            mob: "https://d17292ff19wl6v.cloudfront.net/v2/wp/wp-content/uploads/2021/07/20231202/f7%402x-720x480.jpg",
        }
    }, {
        title: "Electro Fork",
        post_id: "557",
        type: "project",
        media: "image",
        ratio: {
            w: "1800",
            h: "1089",
        },
        video: {
            src: "",
        },
        image: {
            d2x: "https://d17292ff19wl6v.cloudfront.net/v2/wp/wp-content/uploads/2016/04/02200021/fork_2-1800x1089.jpg",
            d1x: "https://d17292ff19wl6v.cloudfront.net/v2/wp/wp-content/uploads/2016/04/02200021/fork_2-1200x726.jpg",
            mob: "https://d17292ff19wl6v.cloudfront.net/v2/wp/wp-content/uploads/2016/04/02200021/fork_2-720x436.jpg",
        }
    }, {
        title: "Digital Biotopia",
        post_id: "2218",
        type: "research",
        media: "image",
        ratio: {
            w: "1800",
            h: "1013",
        },
        video: {
            src: "",
        },
        image: {
            d2x: "https://d17292ff19wl6v.cloudfront.net/v2/wp/wp-content/uploads/2023/12/13113819/Biotic-1-1800x1013.jpg",
            d1x: "https://d17292ff19wl6v.cloudfront.net/v2/wp/wp-content/uploads/2023/12/13113819/Biotic-1-1200x675.jpg",
            mob: "https://d17292ff19wl6v.cloudfront.net/v2/wp/wp-content/uploads/2023/12/13113819/Biotic-1-720x405.jpg",
        }
    }, {
        title: "Remix: Micro and Macro",
        post_id: "1905",
        type: "research",
        media: "image",
        ratio: {
            w: "1800",
            h: "766",
        },
        video: {
            src: "",
        },
        image: {
            d2x: "https://d17292ff19wl6v.cloudfront.net/v2/wp/wp-content/uploads/2023/04/09193731/1-1800x766.jpg",
            d1x: "https://d17292ff19wl6v.cloudfront.net/v2/wp/wp-content/uploads/2023/04/09193731/1-1200x511.jpg",
            mob: "https://d17292ff19wl6v.cloudfront.net/v2/wp/wp-content/uploads/2023/04/09193731/1-720x306.jpg",
        }
    }, {
        title: "AR GLASSES EXPERIMENT",
        post_id: "1732",
        type: "research",
        media: "image",
        ratio: {
            w: "1800",
            h: "1009",
        },
        video: {
            src: "",
        },
        image: {
            d2x: "https://d17292ff19wl6v.cloudfront.net/v2/wp/wp-content/uploads/2022/05/26132808/Screenshot-2022-05-25-at-0.59.45-1800x1009.jpg",
            d1x: "https://d17292ff19wl6v.cloudfront.net/v2/wp/wp-content/uploads/2022/05/26132808/Screenshot-2022-05-25-at-0.59.45-1200x673.jpg",
            mob: "https://d17292ff19wl6v.cloudfront.net/v2/wp/wp-content/uploads/2022/05/26132808/Screenshot-2022-05-25-at-0.59.45-720x404.jpg",
        }
    }, {
        title: "UN REAL EMOTION",
        post_id: "1530",
        type: "research",
        media: "image",
        ratio: {
            w: "1800",
            h: "1013",
        },
        video: {
            src: "",
        },
        image: {
            d2x: "https://d17292ff19wl6v.cloudfront.net/v2/wp/wp-content/uploads/2022/02/07151404/Screenshot-2022-03-07-at-13.34.38-1800x1013.jpg",
            d1x: "https://d17292ff19wl6v.cloudfront.net/v2/wp/wp-content/uploads/2022/02/07151404/Screenshot-2022-03-07-at-13.34.38-1200x676.jpg",
            mob: "https://d17292ff19wl6v.cloudfront.net/v2/wp/wp-content/uploads/2022/02/07151404/Screenshot-2022-03-07-at-13.34.38-720x405.jpg",
        }
    }, {
        title: "Imaginary Sweets",
        post_id: "710",
        type: "research",
        media: "image",
        ratio: {
            w: "1256",
            h: "904",
        },
        video: {
            src: "",
        },
        image: {
            d2x: "https://d17292ff19wl6v.cloudfront.net/v2/wp/wp-content/uploads/2021/09/07215227/0906_plate03.jpg",
            d1x: "https://d17292ff19wl6v.cloudfront.net/v2/wp/wp-content/uploads/2021/09/07215227/0906_plate03-1200x864.jpg",
            mob: "https://d17292ff19wl6v.cloudfront.net/v2/wp/wp-content/uploads/2021/09/07215227/0906_plate03-720x518.jpg",
        }
    }, {
        title: "BorderLESS",
        post_id: "275",
        type: "research",
        media: "image",
        ratio: {
            w: "841",
            h: "480",
        },
        video: {
            src: "",
        },
        image: {
            d2x: "https://d17292ff19wl6v.cloudfront.net/v2/wp/wp-content/uploads/2021/07/20231317/2-1%402x.jpg",
            d1x: "https://d17292ff19wl6v.cloudfront.net/v2/wp/wp-content/uploads/2021/07/20231317/2-1%402x.jpg",
            mob: "https://d17292ff19wl6v.cloudfront.net/v2/wp/wp-content/uploads/2021/07/20231317/2-1%402x-720x411.jpg",
        }
    }, {
        title: "[A] Marque Exploration",
        post_id: "1337",
        type: "research",
        media: "image",
        ratio: {
            w: "1800",
            h: "1276",
        },
        video: {
            src: "",
        },
        image: {
            d2x: "https://d17292ff19wl6v.cloudfront.net/v2/wp/wp-content/uploads/2021/10/13192425/Screenshot-2021-10-12-at-19.03.07-1800x1276.jpg",
            d1x: "https://d17292ff19wl6v.cloudfront.net/v2/wp/wp-content/uploads/2021/10/13192425/Screenshot-2021-10-12-at-19.03.07-1200x851.jpg",
            mob: "https://d17292ff19wl6v.cloudfront.net/v2/wp/wp-content/uploads/2021/10/13192425/Screenshot-2021-10-12-at-19.03.07-720x510.jpg",
        }
    }, {
        title: "The Shift Book",
        post_id: "355",
        type: "research",
        media: "image",
        ratio: {
            w: "1800",
            h: "1200",
        },
        video: {
            src: "",
        },
        image: {
            d2x: "https://d17292ff19wl6v.cloudfront.net/v2/wp/wp-content/uploads/2021/08/20231842/0915_aircord_raw74751-1800x1200.jpg",
            d1x: "https://d17292ff19wl6v.cloudfront.net/v2/wp/wp-content/uploads/2021/08/20231842/0915_aircord_raw74751-1200x800.jpg",
            mob: "https://d17292ff19wl6v.cloudfront.net/v2/wp/wp-content/uploads/2021/08/20231842/0915_aircord_raw74751-720x480.jpg",
        }
    }, {
        post_id: "team-0",
        type: "team",
        media: "image",
        ratio: {
            w: "1440",
            h: "960",
        },
        image: {
            d2x: "https://d17292ff19wl6v.cloudfront.net/v2/wp/wp-content/uploads/2021/08/20231900/ata1086s-1-1440x960.jpg",
            d1x: "https://d17292ff19wl6v.cloudfront.net/v2/wp/wp-content/uploads/2021/08/20231900/ata1086s-1-720x480.jpg",
            mob: "https://d17292ff19wl6v.cloudfront.net/v2/wp/wp-content/uploads/2021/08/20231900/ata1086s-1-450x300.jpg",
        }
    }, {
        post_id: "team-1",
        type: "team",
        media: "image",
        ratio: {
            w: "1440",
            h: "1080",
        },
        image: {
            d2x: "https://d17292ff19wl6v.cloudfront.net/v2/wp/wp-content/uploads/2021/09/08140739/profile-1440x1080.jpg",
            d1x: "https://d17292ff19wl6v.cloudfront.net/v2/wp/wp-content/uploads/2021/09/08140739/profile-720x540.jpg",
            mob: "https://d17292ff19wl6v.cloudfront.net/v2/wp/wp-content/uploads/2021/09/08140739/profile-450x337.jpg",
        }
    }, {
        post_id: "team-2",
        type: "team",
        media: "image",
        ratio: {
            w: "1440",
            h: "1080",
        },
        image: {
            d2x: "https://d17292ff19wl6v.cloudfront.net/v2/wp/wp-content/uploads/2021/09/08073100/IMG_4126-1440x1080.jpg",
            d1x: "https://d17292ff19wl6v.cloudfront.net/v2/wp/wp-content/uploads/2021/09/08073100/IMG_4126-720x540.jpg",
            mob: "https://d17292ff19wl6v.cloudfront.net/v2/wp/wp-content/uploads/2021/09/08073100/IMG_4126-450x338.jpg",
        }
    }, {
        post_id: "team-3",
        type: "team",
        media: "image",
        ratio: {
            w: "1440",
            h: "960",
        },
        image: {
            d2x: "https://d17292ff19wl6v.cloudfront.net/v2/wp/wp-content/uploads/2022/04/28101547/yifan-2-1440x960.jpg",
            d1x: "https://d17292ff19wl6v.cloudfront.net/v2/wp/wp-content/uploads/2022/04/28101547/yifan-2-720x480.jpg",
            mob: "https://d17292ff19wl6v.cloudfront.net/v2/wp/wp-content/uploads/2022/04/28101547/yifan-2-450x300.jpg",
        }
    }, {
        post_id: "team-4",
        type: "team",
        media: "image",
        ratio: {
            w: "1440",
            h: "960",
        },
        image: {
            d2x: "https://d17292ff19wl6v.cloudfront.net/v2/wp/wp-content/uploads/2022/12/01173134/22-0763%E5%A0%82%E5%9C%92%E3%81%95%E3%81%BEs-1440x960.jpg",
            d1x: "https://d17292ff19wl6v.cloudfront.net/v2/wp/wp-content/uploads/2022/12/01173134/22-0763%E5%A0%82%E5%9C%92%E3%81%95%E3%81%BEs-720x480.jpg",
            mob: "https://d17292ff19wl6v.cloudfront.net/v2/wp/wp-content/uploads/2022/12/01173134/22-0763%E5%A0%82%E5%9C%92%E3%81%95%E3%81%BEs-450x300.jpg",
        }
    }, {
        post_id: "team-5",
        type: "team",
        media: "image",
        ratio: {
            w: "1440",
            h: "960",
        },
        image: {
            d2x: "https://d17292ff19wl6v.cloudfront.net/v2/wp/wp-content/uploads/2023/09/05175443/mpm0289s-3-1440x960.jpg",
            d1x: "https://d17292ff19wl6v.cloudfront.net/v2/wp/wp-content/uploads/2023/09/05175443/mpm0289s-3-720x480.jpg",
            mob: "https://d17292ff19wl6v.cloudfront.net/v2/wp/wp-content/uploads/2023/09/05175443/mpm0289s-3-450x300.jpg",
        }
    }, {
        post_id: "team-6",
        type: "team",
        media: "image",
        ratio: {
            w: "1440",
            h: "960",
        },
        image: {
            d2x: "https://d17292ff19wl6v.cloudfront.net/v2/wp/wp-content/uploads/2023/09/25125409/Kai_profile-2-1440x960.jpg",
            d1x: "https://d17292ff19wl6v.cloudfront.net/v2/wp/wp-content/uploads/2023/09/25125409/Kai_profile-2-720x480.jpg",
            mob: "https://d17292ff19wl6v.cloudfront.net/v2/wp/wp-content/uploads/2023/09/25125409/Kai_profile-2-450x300.jpg",
        }
    }, ];
    </script>
</head>

<body x-init="init()">
    <script data-cfasync="false">
    if (ewww_webp_supported) {
        document.body.classList.add("webp-support");
    }
    </script>
    <header class="site-header"><a href="/" data-to="home" class="site-name flip js-put-navi-a" @mouseenter="ui.onEnter"
            @mouseleave="ui.onLeave" data-c="a">
            <h1 class="fadein">
                <div class="o">
                    <div class="t">THE SHIFT</div>
                </div>
            </h1>
        </a>
        <nav class="site-navi js-css" @mouseenter="styleMenu.onEnter()" @mouseleave="styleMenu.onLeave()">
            <div class="site-navi-origin fadein in">
                <div class="site-navi-head js-css f-s" @click.prevent="styleMenu.onToggle()"><a href="#">
                        <div class="ui-btn-link">
                            <div class="o">
                                <div class="t">MENU</div>
                            </div>
                        </div>
                    </a></div>
                <div class="site-navi-body js-css">
                    <ul class="site-navi-ul flip">
                        <li><a data-to="home" href="/" class="js-put-navi-a">
                                <div class="in">
                                    <div class="u js-css">
                                        <div></div>
                                    </div>
                                    <div class="o">
                                        <div class="t js-css">
                                            <div class="w">Home</div>
                                        </div>
                                    </div>
                                </div>
                            </a></li>
                        <li><a data-to="archive-project" href="/project/" class="js-put-navi-a">
                                <div class="in">
                                    <div class="u js-css">
                                        <div></div>
                                    </div>
                                    <div class="o">
                                        <div class="t js-css">
                                            <div class="w">Project</div>
                                        </div>
                                    </div>
                                </div>
                            </a></li>
                        <li><a data-to="archive-research" href="/research/" class="js-put-navi-a">
                                <div class="in">
                                    <div class="u js-css">
                                        <div></div>
                                    </div>
                                    <div class="o">
                                        <div class="t js-css">
                                            <div class="w">Research</div>
                                        </div>
                                    </div>
                                </div>
                            </a></li>
                        <li><a data-to="about" href="/about/" class="js-put-navi-a">
                                <div class="in">
                                    <div class="u js-css">
                                        <div></div>
                                    </div>
                                    <div class="o">
                                        <div class="t js-css">
                                            <div class="w">About</div>
                                        </div>
                                    </div>
                                </div>
                            </a></li>
                    </ul>
                    <ul class="site-navi-lang js-css flip">
                        <li class="ui-lang-a" @click.prevent="__LANG__.onToggle" data-to="en"><a href="/en/"
                                class="ui-btn-link ui-btn-link-re js-put-lang-en">
                                <div class="o">
                                    <div class="t">EN</div>
                                </div>
                            </a></li>
                        <li class="ui-lang-a" @click.prevent="__LANG__.onToggle" data-to="ja"><a href="/"
                                class="ui-btn-link ui-btn-link-re js-put-lang-ja">
                                <div class="o">
                                    <div class="t">JA</div>
                                </div>
                            </a></li>
                    </ul>
                </div>
                <div class="site-navi-bg js-css">
                    <div></div>
                </div>
            </div>
        </nav>
    </header>
    <script>
    const init = () => {};
    </script>
    <main class="site-window" id="top">
        <div class="page-content" data-xhr="wrapper">
            <div class="page-origin" data-en="/en/" data-ja="/" data-current-lang="ja" data-page-theme="light"
                data-scroll-type="page" data-xhr="container" data-page-type="home" data-xhr-namespace="home">
                <div class="section page-header js-h" data-n="1" data-scroll-section>
                    <div class="site-lang ui-lang-a js-inview" data-to="en" @click.prevent="__LANG__.onToggle"
                        @mouseenter="ui.onEnter" @mouseleave="ui.onLeave" data-c="a"><a href="/en/">
                            <div class="ui-btn-link fadein">
                                <div class="o">
                                    <div class="t">EN</div>
                                </div>
                            </div>
                        </a></div>
                    <div class="page-title-pivot">
                        <div class="in">
                            <h1 class="page-title page-home-title flip-c js-delay-n js-inview">
                                <div class="page-title-body js-split-l" data-type="char">
                                    <div class="l l1 odd">Exploring</div>
                                    <div> </div>
                                    <div class="l l2 even">The Shift</div>
                                    <div> </div>
                                    <div class="l l3 odd">of Today</div>
                                </div>
                            </h1>
                            <div class="lead-box js-clip">
                                <div class="lead-body">
                                    <div class="o">
                                        <div class="t indent">The Shift creates future-inspired projects for people and
                                            businesses desiring a shift. <br>Based in tokyo, working worldwide. </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="js-delay-n js-clip">
                        <div class="parts parts-b1 f-xxs hide-m">
                            <div class="o">
                                <div class="t">
                                    <div class="clock">
                                        <div class="clock-th">東京</div>
                                        <div class="clock-tb js-date">
                                            <div class="h">00</div>
                                            <div class="k">:</div>
                                            <div class="m">00</div>
                                            <div class="k">:</div>
                                            <div class="s">00</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="spr" data-n="0" data-mob="4.5"></div>
                        <div class="pickup pickup-slide-wrap fadein f-xxs js-inview">
                            <div class="pickup-head flip">
                                <div class="o">
                                    <div class="t">PROJECTS</div>
                                </div>
                            </div>
                            <div class="pickup-body">
                                <div class="in">
                                    <div class="pickup-ul">
                                        <div class="pickup-ul-origin in">
                                            <a href="/project/ipsa_aqua_play_art/" class="pickup-a pickup-slide"
                                                @mouseenter="ui.onEnter" @mouseleave="ui.onLeave" data-c="a">
                                                <div class="pickup-thumb">
                                                    <div class="pickup-thumb-body">
                                                        <div class="bg-img bg-video js-bg-video-inview">
                                                            <video
                                                                src="https://d17292ff19wl6v.cloudfront.net/v2/wp/wp-content/uploads/2022/07/23125244/rainbow-2.mp4"
                                                                muted playsinline loop preload="none"></video>
                                                            <div class="poster"
                                                                data-src="/v2/wp-content/uploads/2022/07/ipsa_aqua_play_art-home-slider-3x5.jpg">
                                                                <div></div>
                                                            </div>
                                                        </div>
                                                        <div class="alt">IPSA AQUA PLAY ART</div>
                                                    </div>
                                                </div>
                                                <div class="alt">IPSA AQUA PLAY ART</div>
                                            </a><a href="/project/level-of-distance/" class="pickup-a pickup-slide"
                                                @mouseenter="ui.onEnter" @mouseleave="ui.onLeave" data-c="a">
                                                <div class="pickup-thumb">
                                                    <div class="pickup-thumb-body">
                                                        <div class="bg-img bg-video js-bg-video-inview">
                                                            <video
                                                                src="https://d17292ff19wl6v.cloudfront.net/v2/wp/wp-content/uploads/2023/02/09190304/Vid-1.mp4"
                                                                muted playsinline loop preload="none"></video>
                                                            <div class="poster"
                                                                data-src="/v2/wp-content/uploads/2023/02/level-of-distance-home-slider-5x3.jpg">
                                                                <div></div>
                                                            </div>
                                                        </div>
                                                        <div class="alt">Level of Distance</div>
                                                    </div>
                                                </div>
                                                <div class="alt">Level of Distance</div>
                                            </a><a href="/project/shift_link/" class="pickup-a pickup-slide"
                                                @mouseenter="ui.onEnter" @mouseleave="ui.onLeave" data-c="a">
                                                <div class="pickup-thumb">
                                                    <div class="pickup-thumb-body">
                                                        <div class="bg-img bg-video js-bg-video-inview">
                                                            <video
                                                                src="https://d17292ff19wl6v.cloudfront.net/v2/wp/wp-content/uploads/2022/05/19141516/Untitled.mp4"
                                                                muted playsinline loop preload="none"></video>
                                                            <div class="poster"
                                                                data-src="/v2/wp-content/uploads/2022/05/shift_link-home-slider-5x3.jpg">
                                                                <div></div>
                                                            </div>
                                                        </div>
                                                        <div class="alt">SHIFT LINK</div>
                                                    </div>
                                                </div>
                                                <div class="alt">SHIFT LINK</div>
                                            </a><a href="/project/kolor-paris-collection/" class="pickup-a pickup-slide"
                                                @mouseenter="ui.onEnter" @mouseleave="ui.onLeave" data-c="a">
                                                <div class="pickup-thumb">
                                                    <div class="pickup-thumb-body">
                                                        <div class="bg-img bg-video js-bg-video-inview">
                                                            <video
                                                                src="https://d17292ff19wl6v.cloudfront.net/v2/wp/wp-content/uploads/2017/07/24102412/kolor.mp4"
                                                                muted playsinline loop preload="none"></video>
                                                            <div class="poster"
                                                                data-src="/v2/wp-content/uploads/2020/07/kolor-paris-collection-home-slider-5x3.jpg">
                                                                <div></div>
                                                            </div>
                                                        </div>
                                                        <div class="alt">kolor PARISCollection</div>
                                                    </div>
                                                </div>
                                                <div class="alt">kolor PARISCollection</div>
                                            </a><a href="/project/co-ca-cola-coke-vision/" class="pickup-a pickup-slide"
                                                @mouseenter="ui.onEnter" @mouseleave="ui.onLeave" data-c="a">
                                                <div class="pickup-thumb">
                                                    <div class="pickup-thumb-body">
                                                        <div class="bg-img bg-video js-bg-video-inview">
                                                            <video
                                                                src="https://d17292ff19wl6v.cloudfront.net/v2/wp/wp-content/uploads/2019/07/06141426/coca-cola.mp4"
                                                                muted playsinline loop preload="none"></video>
                                                            <div class="poster"
                                                                data-src="/v2/wp-content/uploads/2021/09/co-ca-cola-coke-vision-home-slider-5x3.jpg">
                                                                <div></div>
                                                            </div>
                                                        </div>
                                                        <div class="alt">Coca-Cola coke vision</div>
                                                    </div>
                                                </div>
                                                <div class="alt">Coca-Cola coke vision</div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="pickup-control" @mouseenter="ui.onEnter" @mouseleave="ui.onLeave"
                                        data-c="circle">
                                        <div class="in">
                                            <a href="#" class="ui-btn-arrow"
                                                @click.prevent="pickupSlider.onSlideToNext()">
                                                <div class="o">
                                                    <div class="i i-arrow-right">
                                                        <div class="alt">slide</div>
                                                    </div>
                                                    <div class="b"></div>
                                                </div>
                                            </a><svg class="progress" viewbox="0 0 62 62">
                                                <path d="M31,1A30,30,0,1,1,1,31,30,30,0,0,1,31,1"></path>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="pickup-count flip2">
                                <div class="o">
                                    <div class="t">
                                        <div class="parentheses">
                                            <div class="s">(</div>
                                            <div class="n min">
                                                <div class="min-body">
                                                    <div>01</div>
                                                    <div>02</div>
                                                    <div>03</div>
                                                    <div>04</div>
                                                    <div>05</div>
                                                </div>
                                            </div>
                                            <div class="m">/</div>
                                            <div class="n max">
                                                <div class="max-body">00</div>
                                            </div>
                                            <div class="s">)</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="spr" data-n="1" data-mob="4.5"></div>
                <section class="section section-what-we-do js-mh" data-bg="dark" data-n="1" data-scroll-section>
                    <div class="in">
                        <div class="body">
                            <div class="spr" data-n="3"></div>
                            <div class="section-title">
                                <h2 class="h2 section-title-headline flip-y js-inview">
                                    <div class="js-split-l">
                                        <div class="l">What we do</div>
                                    </div>
                                </h2>
                                <div class="border js-inview js-css">
                                    <div class="in">
                                        <div class="b"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="body thin">
                            <div class="spr" data-n="1" data-mob="2"></div>
                            <div class="section-lead" data-type="cover">
                                <div data-disable="any" class="p1 flip-y js-inview">The
                                    Shiftは東京を拠点としたクリエイティブコレクティブです。新しい視点やデザイン、課題解決を提供します。</div>
                            </div>
                            <div class="spr" data-n="1" data-mob="2"></div>
                            <div class="section-footer ui-btn-circle-wrap js-clip"><a href="/about/"
                                    class="ui-btn-circle ui-link-underline flip" @mouseenter="ui.onEnter"
                                    @mouseleave="ui.onLeave" data-c="circle">
                                    <div class="ui-btn-circle-origin">
                                        <div class="txt">
                                            <div class="o">
                                                <div class="t">
                                                    <div class="w">About us</div>
                                                    <div class="u"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="f"></div>
                                        <div class="b"></div>
                                    </div>
                                </a></div>
                            <div class="spr" data-n="4"></div>
                        </div>
                    </div>
                </section>
                <section class="section js-mh" data-n="1">
                    <div class="body">
                        <div class="section-title" data-scroll-section>
                            <h2 class="h2 section-title-headline flip-y js-inview">
                                <div class="js-split-l">
                                    <div class="l">Featured project</div>
                                    <div class="l">And Research</div>
                                </div>
                            </h2>
                            <div class="spr" data-n="1.5" data-mob="0"></div>
                            <div class="section-title-support js-clip"><a href="/project/"
                                    class="ui-link ui-link-underline flip" @mouseenter="ui.onEnter"
                                    @mouseleave="ui.onLeave" data-c="link">
                                    <div class="o">
                                        <div class="t">
                                            <div class="w">View all project</div>
                                            <div class="u"></div>
                                        </div>
                                    </div>
                                </a></div>
                            <div class="border js-inview js-css">
                                <div class="in">
                                    <div class="b"></div>
                                </div>
                            </div>
                        </div>
                        <div class="features flip">
                            <a href="/project/atelier-wen/" class="features-a js-inview flip-origin"
                                @mouseenter="webGL.features.enter" @mouseleave="webGL.features.leave"
                                data-thumb-id="2124" data-c="thumb" data-scroll-section>
                                <div class="features-h-wrap js-css">
                                    <div class="in">
                                        <div class="features-h">
                                            <div class="features-n js-clip">
                                                <div class="o">
                                                    <div class="t">
                                                        <div class="parentheses">
                                                            <div class="s">(</div>
                                                            <div class="n">01</div>
                                                            <div class="s">)</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="features-t-wrap">
                                                <div class="features-t gallery flip-f js-delay-n js-split-l">
                                                    <div class="l">Atelier Wen</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="border js-inview js-css">
                                    <div class="in">
                                        <div class="b"></div>
                                    </div>
                                </div>
                                <div class="border features-hover">
                                    <div class="b"></div>
                                </div>
                            </a><a href="/project/shift_link/" class="features-a js-inview flip-origin"
                                @mouseenter="webGL.features.enter" @mouseleave="webGL.features.leave"
                                data-thumb-id="1626" data-c="thumb" data-scroll-section>
                                <div class="features-h-wrap js-css">
                                    <div class="in">
                                        <div class="features-h">
                                            <div class="features-n js-clip">
                                                <div class="o">
                                                    <div class="t">
                                                        <div class="parentheses">
                                                            <div class="s">(</div>
                                                            <div class="n">02</div>
                                                            <div class="s">)</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="features-t-wrap">
                                                <div class="features-t gallery flip-f js-delay-n js-split-l">
                                                    <div class="l">SHIFT LINK</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="border js-inview js-css">
                                    <div class="in">
                                        <div class="b"></div>
                                    </div>
                                </div>
                                <div class="border features-hover">
                                    <div class="b"></div>
                                </div>
                            </a><a href="/project/ipsa_aqua_play_art/" class="features-a js-inview flip-origin"
                                @mouseenter="webGL.features.enter" @mouseleave="webGL.features.leave"
                                data-thumb-id="1781" data-c="thumb" data-scroll-section>
                                <div class="features-h-wrap js-css">
                                    <div class="in">
                                        <div class="features-h">
                                            <div class="features-n js-clip">
                                                <div class="o">
                                                    <div class="t">
                                                        <div class="parentheses">
                                                            <div class="s">(</div>
                                                            <div class="n">03</div>
                                                            <div class="s">)</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="features-t-wrap">
                                                <div class="features-t gallery flip-f js-delay-n js-split-l">
                                                    <div class="l">IPSA AQUA</div>
                                                    <div class="l">PLAY ART</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="border js-inview js-css">
                                    <div class="in">
                                        <div class="b"></div>
                                    </div>
                                </div>
                                <div class="border features-hover">
                                    <div class="b"></div>
                                </div>
                            </a><a href="/project/level-of-distance/" class="features-a js-inview flip-origin"
                                @mouseenter="webGL.features.enter" @mouseleave="webGL.features.leave"
                                data-thumb-id="1851" data-c="thumb" data-scroll-section>
                                <div class="features-h-wrap js-css">
                                    <div class="in">
                                        <div class="features-h">
                                            <div class="features-n js-clip">
                                                <div class="o">
                                                    <div class="t">
                                                        <div class="parentheses">
                                                            <div class="s">(</div>
                                                            <div class="n">04</div>
                                                            <div class="s">)</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="features-t-wrap">
                                                <div class="features-t gallery flip-f js-delay-n js-split-l">
                                                    <div class="l">Level of </div>
                                                    <div class="l">Distance</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="border js-inview js-css">
                                    <div class="in">
                                        <div class="b"></div>
                                    </div>
                                </div>
                                <div class="border features-hover">
                                    <div class="b"></div>
                                </div>
                            </a><a href="/project/kolor-paris-collection/" class="features-a js-inview flip-origin"
                                @mouseenter="webGL.features.enter" @mouseleave="webGL.features.leave"
                                data-thumb-id="189" data-c="thumb" data-scroll-section>
                                <div class="features-h-wrap js-css">
                                    <div class="in">
                                        <div class="features-h">
                                            <div class="features-n js-clip">
                                                <div class="o">
                                                    <div class="t">
                                                        <div class="parentheses">
                                                            <div class="s">(</div>
                                                            <div class="n">05</div>
                                                            <div class="s">)</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="features-t-wrap">
                                                <div class="features-t gallery flip-f js-delay-n js-split-l">
                                                    <div class="l">kolor PARIS</div>
                                                    <div class="l">Collection</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="border js-inview js-css">
                                    <div class="in">
                                        <div class="b"></div>
                                    </div>
                                </div>
                                <div class="border features-hover">
                                    <div class="b"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                </section>
                <div class="spr" data-n="4"></div>
                <ul class="get-global-navi">
                    <li> <a data-to="home" href="/" class="js-get-navi-a">Home</a> </li>
                    <li> <a data-to="archive-project" href="/project/" class="js-get-navi-a">Project</a> </li>
                    <li> <a data-to="archive-research" href="/research/" class="js-get-navi-a">Research</a> </li>
                    <li> <a data-to="about" href="/about/" class="js-get-navi-a">About</a> </li>
                </ul>
                <div class="page-footer section-wrap js-inview" data-type="cover">
                    <section class="section section-tagline section-territory" data-bg="dark" data-scroll-section>
                        <div class="body">
                            <div class="in">
                                <div class="section-title">
                                    <h2 class="h2 section-title-headline flip-y js-inview">
                                        <div class="js-split-l">
                                            <div class="l">Our territory</div>
                                            <div class="l">and fields</div>
                                        </div>
                                    </h2>
                                    <div class="spr" data-n="1.5" data-tab="0"></div>
                                    <div class="section-title-support js-clip"><a href="/about/"
                                            class="ui-link ui-link-underline" @mouseenter="ui.onEnter"
                                            @mouseleave="ui.onLeave" data-c="link">
                                            <div class="o">
                                                <div class="t">
                                                    <div class="w">About us</div>
                                                    <div class="u"></div>
                                                </div>
                                            </div>
                                        </a></div>
                                </div>
                                <div class="border js-inview js-css">
                                    <div class="in">
                                        <div class="b"></div>
                                    </div>
                                </div>
                                <div class="mq-wrap">
                                    <div class="re-body">
                                        <div class="spr" data-n="1"></div>
                                        <div class="mq js-inview">
                                            <div class="mq-g mq-anim">
                                                <div class="mq-ul js-inview">
                                                    <div class="mq-li">
                                                        <div class="l">
                                                            <div class="o">
                                                                <div class="t">Shift</div>
                                                            </div>
                                                        </div>
                                                        <div class="l">
                                                            <div class="o">
                                                                <div class="t">Produce</div>
                                                            </div>
                                                        </div>
                                                        <div class="l">
                                                            <div class="o">
                                                                <div class="t">Direction</div>
                                                            </div>
                                                        </div>
                                                        <div class="l">
                                                            <div class="o">
                                                                <div class="t">Design</div>
                                                            </div>
                                                        </div>
                                                        <div class="l">
                                                            <div class="o">
                                                                <div class="t">Technology Consulting</div>
                                                            </div>
                                                        </div>
                                                        <div class="l">
                                                            <div class="o">
                                                                <div class="t">Branding</div>
                                                            </div>
                                                        </div>
                                                        <div class="l">
                                                            <div class="o">
                                                                <div class="t">Strategy</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="mq-li">
                                                        <div class="l">
                                                            <div class="o">
                                                                <div class="t">Shift</div>
                                                            </div>
                                                        </div>
                                                        <div class="l">
                                                            <div class="o">
                                                                <div class="t">Produce</div>
                                                            </div>
                                                        </div>
                                                        <div class="l">
                                                            <div class="o">
                                                                <div class="t">Direction</div>
                                                            </div>
                                                        </div>
                                                        <div class="l">
                                                            <div class="o">
                                                                <div class="t">Design</div>
                                                            </div>
                                                        </div>
                                                        <div class="l">
                                                            <div class="o">
                                                                <div class="t">Technology Consulting</div>
                                                            </div>
                                                        </div>
                                                        <div class="l">
                                                            <div class="o">
                                                                <div class="t">Branding</div>
                                                            </div>
                                                        </div>
                                                        <div class="l">
                                                            <div class="o">
                                                                <div class="t">Strategy</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mq back js-inview">
                                            <div class="mq-e mq-anim">
                                                <div class="mq-ul js-inview">
                                                    <div class="mq-li">
                                                        <div class="l">
                                                            <div class="o">
                                                                <div class="t">Education</div>
                                                            </div>
                                                        </div>
                                                        <div class="l">
                                                            <div class="o">
                                                                <div class="t">Food</div>
                                                            </div>
                                                        </div>
                                                        <div class="l">
                                                            <div class="o">
                                                                <div class="t">Music</div>
                                                            </div>
                                                        </div>
                                                        <div class="l">
                                                            <div class="o">
                                                                <div class="t">Fashion</div>
                                                            </div>
                                                        </div>
                                                        <div class="l">
                                                            <div class="o">
                                                                <div class="t">Entertainment</div>
                                                            </div>
                                                        </div>
                                                        <div class="l">
                                                            <div class="o">
                                                                <div class="t">Product</div>
                                                            </div>
                                                        </div>
                                                        <div class="l">
                                                            <div class="o">
                                                                <div class="t">Event</div>
                                                            </div>
                                                        </div>
                                                        <div class="l">
                                                            <div class="o">
                                                                <div class="t">Sports</div>
                                                            </div>
                                                        </div>
                                                        <div class="l">
                                                            <div class="o">
                                                                <div class="t">Living Space</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="mq-li">
                                                        <div class="l">
                                                            <div class="o">
                                                                <div class="t">Education</div>
                                                            </div>
                                                        </div>
                                                        <div class="l">
                                                            <div class="o">
                                                                <div class="t">Food</div>
                                                            </div>
                                                        </div>
                                                        <div class="l">
                                                            <div class="o">
                                                                <div class="t">Music</div>
                                                            </div>
                                                        </div>
                                                        <div class="l">
                                                            <div class="o">
                                                                <div class="t">Fashion</div>
                                                            </div>
                                                        </div>
                                                        <div class="l">
                                                            <div class="o">
                                                                <div class="t">Entertainment</div>
                                                            </div>
                                                        </div>
                                                        <div class="l">
                                                            <div class="o">
                                                                <div class="t">Product</div>
                                                            </div>
                                                        </div>
                                                        <div class="l">
                                                            <div class="o">
                                                                <div class="t">Event</div>
                                                            </div>
                                                        </div>
                                                        <div class="l">
                                                            <div class="o">
                                                                <div class="t">Sports</div>
                                                            </div>
                                                        </div>
                                                        <div class="l">
                                                            <div class="o">
                                                                <div class="t">Living Space</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="spr" data-n="4.5" data-tab="0" data-mob="0"></div>
                                    </div>
                                </div>
                                <div class="spr" data-n="0" data-mob="7"></div>
                            </div>
                        </div>
                    </section>
                    <section class="section section-sitemap js-mh" data-n="1" data-bg="dark" data-scroll-section>
                        <div class="footer-header">
                            <div class="body">
                                <div class="section-title">
                                    <div class="border js-inview js-css">
                                        <div class="in">
                                            <div class="b"></div>
                                        </div>
                                    </div>
                                    <div class="title-flex">
                                        <div class="title-td title-td-left js-clip">
                                            <div class="ui-lang-a" data-to="en" @click.prevent="__LANG__.onToggle"
                                                @mouseenter="ui.onEnter" @mouseleave="ui.onLeave" data-c="btn"><a
                                                    href="/en/" class="ui-btn-link ui-btn-link-re">
                                                    <div class="o">
                                                        <div class="t">EN</div>
                                                    </div>
                                                </a></div>
                                        </div>
                                        <div class="title-td title-td-center js-clip js-delay-n">
                                            <h2 class="h2 section-title-headline flip-y js-inview">
                                                <div class="js-split-l">
                                                    <div class="l">Based in Tokyo</div>
                                                    <div class="l">Working Worldwide</div>
                                                </div>
                                            </h2>
                                        </div>
                                        <div class="title-td title-td-right js-clip"><a href="#"
                                                class="ui-btn ui-btn-backto-top" @click="ui.anchorToTop"
                                                @mouseenter="ui.onEnter" @mouseleave="ui.onLeave" data-c="btn">
                                                <div class="ui-btn-txt">
                                                    <div class="o">
                                                        <div class="t">BACK TO TOP</div>
                                                    </div>
                                                </div>
                                                <div class="ui-btn-arrow">
                                                    <div class="o">
                                                        <div class="i i-arrow-right"></div>
                                                        <div class="b"></div>
                                                    </div>
                                                </div>
                                            </a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="footer-flex js-mh" data-n="1">
                            <div class="footer-body">
                                <div class="body">
                                    <div class="footer-title">
                                        <div class="border js-inview js-css">
                                            <div class="in">
                                                <div class="b"></div>
                                            </div>
                                        </div>
                                        <div class="spr" data-n="2.5" data-mob="6"></div>
                                        <div class="footer-title-body">
                                            <a href="#"
                                                class="footer-title-a js-split-l flip2 flip-c js-delay-n js-inview"
                                                @click="ui.onMailTo" @mouseenter="ui.onEnter" @mouseleave="ui.onLeave"
                                                data-c="link">
                                                <div class="l">GET IN TOUCH</div>
                                            </a>
                                            <div class="footer-title-aside js-clip"><a href="#"
                                                    class="ui-link-table ui-link-underline contact-aside-a">
                                                    <div class="th">
                                                        <div class="o">
                                                            <div class="t">
                                                                <div class="w">EMAIL</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="td">
                                                        <div class="o">
                                                            <div class="t">
                                                                <div class="w">info (at) theshift.tokyo</div>
                                                                <div class="u"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a></div>
                                        </div>
                                        <div class="spr" data-n="2.5" data-mob="6"></div>
                                        <div class="border js-inview js-css">
                                            <div class="in">
                                                <div class="b"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="title-flex">
                                        <div class="title-td js-clip title-td-left"><small class="address">
                                                <div class="o">
                                                    <div class="t">&copy;2021</div>
                                                </div>
                                            </small></div>
                                        <div class="title-td js-clip title-td-center">
                                            <ul class="sns-ul">
                                                <li><a href="https://www.instagram.com/theshift.tokyo/" target="_blank"
                                                        rel="noopener" class="ui-link ui-link-underline flip"
                                                        @mouseenter="ui.onEnter" @mouseleave="ui.onLeave" data-c="link">
                                                        <div class="o">
                                                            <div class="t">Instagram<div class="u"></div>
                                                            </div>
                                                        </div>
                                                    </a></li>
                                            </ul>
                                        </div>
                                        <div class="title-td js-clip title-td-right"><a href="#"
                                                class="ui-btn-link ui-btn-link-re ui-btn-theme"
                                                @click.prevent="__THEME__.onToggle()" @mouseenter="ui.onEnter"
                                                @mouseleave="ui.onLeave" data-c="link">
                                                <div class="o">
                                                    <div class="t" data-to="dark">DARK MODE</div>
                                                    <div class="t" data-to="light">LIGHT MODE</div>
                                                </div>
                                            </a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </main>
    <div class="ui-cursor">
        <div class="ui-cursor-body clip">
            <div class="ui-cursor-text" data-c="drag">
                <div class="in">
                    <div class="o">
                        <div class="t">Drag</div>
                    </div>
                </div>
            </div>
            <div class="ui-cursor-text" data-c="click">
                <div class="in">
                    <div class="o">
                        <div class="t">Click</div>
                    </div>
                </div>
            </div>
            <div class="ui-cursor-text" data-c="explore">
                <div class="in">
                    <div class="o">
                        <div class="t">Explore</div>
                    </div>
                </div>
            </div>
            <div class="ui-cursor-text" data-c="next">
                <div class="in">
                    <div class="o">
                        <div class="t">Next</div>
                    </div>
                </div>
            </div>
            <div class="ui-cursor-text" data-c="copy">
                <div class="in">
                    <div class="o">
                        <div class="t">
                            <div>Copy an email address</div>
                        </div>
                    </div>
                    <div class="o">
                        <div class="t">
                            <div>Copied</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ui-cursor-bg">
                <div class="b"></div>
            </div>
        </div>
    </div>
    <div class="site-footer">
        <div class="js-scroll-height"></div>
    </div>
    <div class="site-mask"></div>
    <div class="alert" aria-hidden="true">
        <div class="alert-body alert-brows">We are sorry, your browser version is not supported.</div>
        <div class="alert-body alert-noscript">For full functionality of this site it is necessary to enable JavaScript.
            Here are the <a href="https://www.enable-javascript.com/" rel="noopener" target="_blank">instructions how to
                enable JavaScript in your web browser</a>.</div>
    </div>
    <noscript>
        <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100;300;400&display=swap"
            rel="stylesheet">
        <link rel="stylesheet"
            href="https://theshift.tokyo/wp-content/themes/the-shift/assets/css/prod-loader.css?657c52029e1ee">
        <link rel="stylesheet"
            href="https://theshift.tokyo/wp-content/themes/the-shift/assets/css/prod-noscript.css?657c52029e212">
    </noscript>
    <script defer src="https://theshift.tokyo/wp-content/themes/the-shift/assets/js/prod-loader.js?657c52029e232">
    </script>
    <script defer src="https://theshift.tokyo/wp-content/themes/the-shift/assets/js/cdn.min.js"></script>
    <style type="text/css">
    html.has-scroll-smooth {
        overflow: hidden;
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0
    }

    html.has-scroll-dragging {
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none
    }

    .has-scroll-smooth body {
        overflow: hidden
    }

    .has-scroll-smooth [data-scroll-container] {
        min-height: 100vh
    }

    [data-scroll-direction=horizontal] [data-scroll-container] {
        height: 100vh;
        display: inline-block;
        white-space: nowrap
    }

    [data-scroll-direction=horizontal] [data-scroll-section] {
        display: inline-block;
        vertical-align: top;
        white-space: nowrap;
        height: 100%
    }

    .c-scrollbar {
        position: absolute;
        right: 0;
        top: 0;
        width: 11px;
        height: 100%;
        transform-origin: center right;
        transition: transform .3s, opacity .3s;
        opacity: 0
    }

    .c-scrollbar:hover {
        transform: scaleX(1.45)
    }

    .c-scrollbar:hover,
    .has-scroll-dragging .c-scrollbar,
    .has-scroll-scrolling .c-scrollbar {
        opacity: 1
    }

    [data-scroll-direction=horizontal] .c-scrollbar {
        width: 100%;
        height: 10px;
        top: auto;
        bottom: 0;
        transform: scaleY(1)
    }

    [data-scroll-direction=horizontal] .c-scrollbar:hover {
        transform: scaleY(1.3)
    }

    .c-scrollbar_thumb {
        position: absolute;
        top: 0;
        right: 0;
        background-color: #000;
        opacity: .5;
        width: 7px;
        border-radius: 10px;
        margin: 2px;
        cursor: grab
    }

    .has-scroll-dragging .c-scrollbar_thumb {
        cursor: grabbing
    }

    [data-scroll-direction=horizontal] .c-scrollbar_thumb {
        right: auto;
        bottom: 0
    }

    [data-bg=dark] {
        background-color: var(--col-black)
    }

    [data-bg=dark],
    [data-bg=dark] a {
        color: var(--col-white)
    }

    [data-bg=dark] .border .b {
        background: var(--col-white)
    }

    [data-bg=dark] .border .num {
        color: var(--col-white)
    }

    [data-theme=light] [data-bg=dark] {
        color: var(--col-black);
        background-color: var(--col-white)
    }

    [data-theme=light] [data-bg=dark] a {
        color: var(--col-black)
    }

    [data-theme=light] [data-bg=dark] .border .b {
        background: var(--col-black)
    }

    [data-theme=light] [data-bg=dark] .border .num {
        color: var(--col-black)
    }

    [data-theme=light] .lead-box,
    [data-theme=light] .page-title-support {
        opacity: .8
    }

    [data-theme=light] .border,
    [data-theme=light] .border.sub {
        opacity: .3
    }

    [data-theme=light] .ui-btn-link-re .t,
    [data-theme=light] .ui-cursor-text .t {
        color: var(--col-black)
    }

    [data-theme=light] .ui-btn-link-re .o {
        border: 1px solid var(--col-black)
    }

    [data-theme=light] .ui-btn-link-re .o:before {
        background-color: var(--col-white)
    }

    [data-theme=light] .ui-btn-link-re .o:after {
        background-color: var(--col-black)
    }

    [data-theme=light] [data-page-theme=dark] .ui-btn-link .t {
        color: var(--col-black)
    }

    [data-theme=light] [data-page-theme=dark] .ui-btn-link .o {
        border: 1px solid var(--col-black)
    }

    [data-theme=light] [data-page-theme=dark] .ui-btn-link .o:before {
        visibility: hidden;
        background-color: var(--col-white)
    }

    [data-theme=light] [data-page-theme=dark] .ui-btn-link .o:after {
        visibility: hidden;
        background-color: var(--col-black)
    }

    [data-theme=light] .ui-btn-link-re:hover .t,
    [data-theme=light] [data-page-theme=dark] .site-lang:hover .ui-btn-link .t {
        color: var(--col-white)
    }

    [data-theme=light] .ui-btn-link-re:hover .o,
    [data-theme=light] [data-page-theme=dark] .site-lang:hover .ui-btn-link .o {
        border: 1px solid var(--col-black)
    }

    [data-theme=light] .ui-btn-link-re:hover .o:before,
    [data-theme=light] [data-page-theme=dark] .site-lang:hover .ui-btn-link .o:before {
        visibility: visible;
        background: var(--col-black)
    }

    [data-theme=light] .ui-btn-link-re:hover .o:after,
    [data-theme=light] [data-page-theme=dark] .site-lang:hover .ui-btn-link .o:after {
        visibility: visible;
        transform: scaleY(1);
        transform-origin: bottom
    }

    [data-theme=light] .site-navi-ul a {
        color: var(--col-black)
    }

    [data-theme=light] .site-navi-bg div {
        background: var(--col-white)
    }

    [data-theme=light] .site-navi-lang .ui-btn-link.diseble .t {
        color: var(--col-black)
    }

    .is-menu-opened.has-scrollover-navi[data-theme=light] .site-navi-ul .u div {
        background: var(--col-black)
    }

    .is-menu-opened.has-scrollover-navi[data-theme=light] .site-navi,
    .is-menu-opened.has-scrollover-navi[data-theme=light] .site-navi a {
        color: var(--col-black)
    }

    [data-page-theme=dark] .page-origin,
    [data-page-theme=dark] .page-origin a,
    [data-page-theme=dark] .site-name,
    [data-page-theme=dark] .site-navi a {
        color: var(--col-white)
    }

    [data-theme=light][data-page-theme=dark] {
        background-color: var(--col-white)
    }

    [data-theme=light][data-page-theme=dark] .page-origin,
    [data-theme=light][data-page-theme=dark] .page-origin a,
    [data-theme=light][data-page-theme=dark] .site-name,
    [data-theme=light][data-page-theme=dark] .site-navi a {
        color: var(--col-black)
    }

    [data-theme=light][data-page-theme=dark] .slide-scroll-map-li>div,
    [data-theme=light][data-page-theme=dark] .slide-scroll-thumb .pivot {
        border: 1px solid var(--col-black)
    }

    [data-theme=light][data-page-theme=dark] .slide-scroll-map-li>div>div {
        background-color: var(--col-black)
    }

    [data-bg=dark] .ui-btn-arrow,
    [data-page-theme=dark] .ui-btn-arrow,
    [data-scheme=dark] .ui-btn-arrow {
        color: var(--col-black)
    }

    [data-bg=dark] .site-navi-ul .u div,
    [data-bg=dark] .ui-btn-arrow .b,
    [data-bg=dark] .ui-link-underline .u,
    [data-page-theme=dark] .site-navi-ul .u div,
    [data-page-theme=dark] .ui-btn-arrow .b,
    [data-page-theme=dark] .ui-link-underline .u,
    [data-scheme=dark] .site-navi-ul .u div,
    [data-scheme=dark] .ui-btn-arrow .b,
    [data-scheme=dark] .ui-link-underline .u {
        background: var(--col-white)
    }

    [data-bg=dark] .ui-btn-circle .txt,
    [data-page-theme=dark] .ui-btn-circle .txt,
    [data-scheme=dark] .ui-btn-circle .txt {
        color: var(--col-black)
    }

    [data-bg=dark] .ui-btn-circle.ui-link-underline .u,
    [data-page-theme=dark] .ui-btn-circle.ui-link-underline .u,
    [data-scheme=dark] .ui-btn-circle.ui-link-underline .u {
        background: var(--col-black)
    }

    [data-bg=dark] .ui-btn-circle .b,
    [data-page-theme=dark] .ui-btn-circle .b,
    [data-scheme=dark] .ui-btn-circle .b {
        background: var(--col-white)
    }

    [data-theme=light] [data-bg=dark] .ui-btn-arrow,
    [data-theme=light][data-page-theme=dark] .ui-btn-arrow {
        color: var(--col-white)
    }

    [data-theme=light] [data-bg=dark] .site-navi-ul .u div,
    [data-theme=light] [data-bg=dark] .ui-btn-arrow .b,
    [data-theme=light] [data-bg=dark] .ui-link-underline .u,
    [data-theme=light][data-page-theme=dark] .site-navi-ul .u div,
    [data-theme=light][data-page-theme=dark] .ui-btn-arrow .b,
    [data-theme=light][data-page-theme=dark] .ui-link-underline .u {
        background: var(--col-black)
    }

    [data-theme=light] [data-bg=dark] .ui-btn-circle .txt,
    [data-theme=light][data-page-theme=dark] .ui-btn-circle .txt {
        color: var(--col-white)
    }

    [data-theme=light] [data-bg=dark] .ui-btn-circle.ui-link-underline .u,
    [data-theme=light][data-page-theme=dark] .ui-btn-circle.ui-link-underline .u {
        background: var(--col-white)
    }

    [data-theme=light] [data-bg=dark] .ui-btn-circle .b,
    [data-theme=light][data-page-theme=dark] .ui-btn-circle .b {
        background: var(--col-black)
    }

    html {
        -webkit-tap-highlight-color: rgba(255, 255, 255, 0);
        -webkit-text-size-adjust: 100%;
        font-size: 62.5%
    }

    blockquote,
    body,
    button,
    code,
    dd,
    div,
    dl,
    dt,
    fieldset,
    form,
    h1,
    h2,
    h3,
    h4,
    h5,
    h6,
    input,
    legend,
    li,
    ol,
    p,
    pre,
    select,
    td,
    textarea,
    th,
    ul {
        margin: 0;
        padding: 0
    }

    table {
        border-collapse: collapse;
        border-spacing: 0
    }

    fieldset,
    img {
        border: 0
    }

    address,
    button,
    caption,
    cite,
    code,
    dfn,
    em,
    input,
    optgroup,
    option,
    select,
    strong,
    textarea,
    th,
    var {
        font: inherit
    }

    del,
    ins {
        text-decoration: none
    }

    li {
        list-style: none
    }

    caption,
    th {
        text-align: left
    }

    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
        font-size: 100%;
        font-weight: 400
    }

    q:after,
    q:before {
        content: ""
    }

    abbr,
    acronym {
        border: 0;
        font-variant: normal
    }

    sub,
    sup {
        vertical-align: baseline
    }

    legend {
        color: #000
    }

    body,
    html {
        width: 100%;
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
        overscroll-behavior-y: none
    }

    * {
        outline: none;
        padding: 0;
        margin: 0;
        box-sizing: border-box
    }

    main {
        display: block
    }

    img,
    svg {
        vertical-align: bottom
    }

    a {
        text-decoration: none
    }

    .alert {
        display: none
    }

    .is-load-before .site-name,
    .is-load-before .site-navi-body a,
    .is-load-before .site-navi-head,
    .is-load-before .ui-lang-a {
        pointer-events: none
    }

    ::-moz-selection {
        background: var(--col-black);
        color: var(--col-white)
    }

    ::selection {
        background: var(--col-black);
        color: var(--col-white)
    }

    ::-moz-selection {
        background: var(--col-black);
        color: var(--col-white)
    }

    .get-global-navi {
        display: none
    }

    .in {
        width: 100%;
        height: 100%;
        position: relative
    }

    html {
        font-family: everett, Noto Sans JP, sans-serif;
        font-weight: 400;
        color: var(--col-font-black);
        background: var(--col-white)
    }

    html[data-page-theme=dark] {
        overflow: hidden
    }

    a,
    h1,
    h2,
    h3,
    h4,
    h5,
    html,
    p {
        letter-spacing: -.01em
    }

    .footer-title-a .s,
    .footer-title-a .w,
    .mq-e,
    .mq-g,
    .page-title,
    .page-title .l.even,
    .page-title .l.odd {
        letter-spacing: -.035em
    }

    a {
        color: var(--col-font-black)
    }

    .js-h {
        height: 100vh
    }

    .js-h[data-n="0"] {
        height: 0
    }

    .js-h[data-n="1"] {
        height: 100vh
    }

    .js-h[data-n="2"] {
        height: 200vh
    }

    .js-h[data-n="3"] {
        height: 300vh
    }

    .js-h[data-n="4"] {
        height: 400vh
    }

    .js-h[data-n="5"] {
        height: 500vh
    }

    .js-mh {
        min-height: 100vh
    }

    .js-mh[data-n="0"] {
        min-height: 0
    }

    .js-mh[data-n="1"] {
        min-height: 100vh
    }

    .js-mh[data-n="2"] {
        min-height: 200vh
    }

    .js-mh[data-n="3"] {
        min-height: 300vh
    }

    .js-mh[data-n="4"] {
        min-height: 400vh
    }

    .js-mh[data-n="5"] {
        min-height: 500vh
    }

    .spr[data-n="0"] {
        height: calc(var(--gw)*0)
    }

    .spr[data-n=".5"] {
        height: calc(var(--gw)*0.5)
    }

    .spr[data-n="1"] {
        height: calc(var(--gw)*1)
    }

    .spr[data-n="1.5"] {
        height: calc(var(--gw)*1.5)
    }

    .spr[data-n="2"] {
        height: calc(var(--gw)*2)
    }

    .spr[data-n="2.5"] {
        height: calc(var(--gw)*2.5)
    }

    .spr[data-n="3"] {
        height: calc(var(--gw)*3)
    }

    .spr[data-n="3.5"] {
        height: calc(var(--gw)*3.5)
    }

    .spr[data-n="4"] {
        height: calc(var(--gw)*4)
    }

    .spr[data-n="4.5"] {
        height: calc(var(--gw)*4.5)
    }

    .spr[data-n="5"] {
        height: calc(var(--gw)*5)
    }

    .spr[data-n="5.5"] {
        height: calc(var(--gw)*5.5)
    }

    .spr[data-n="6"] {
        height: calc(var(--gw)*6)
    }

    .spr[data-n="6.5"] {
        height: calc(var(--gw)*6.5)
    }

    .spr[data-n="7"] {
        height: calc(var(--gw)*7)
    }

    .spr[data-n="7.5"] {
        height: calc(var(--gw)*7.5)
    }

    .spr[data-n="8"] {
        height: calc(var(--gw)*8)
    }

    .spr[data-n="8.5"] {
        height: calc(var(--gw)*8.5)
    }

    .spr[data-n="9"] {
        height: calc(var(--gw)*9)
    }

    .spr[data-n="9.5"] {
        height: calc(var(--gw)*9.5)
    }

    .spr[data-n="10"] {
        height: calc(var(--gw)*10)
    }

    .border {
        height: 1px;
        width: 100%;
        opacity: 1
    }

    .border .b {
        width: 100%;
        height: 100%;
        background: var(--col-black);
        content: "";
        display: block;
        transform: scaleX(0);
        transform-origin: center left;
        transition: transform 2s cubic-bezier(.22, 1, .36, 1)
    }

    .border .num {
        height: 3em;
        display: flex;
        justify-content: center;
        align-items: center;
        position: absolute;
        font-weight: 100
    }

    .border .num.right {
        right: 0
    }

    .border .num.left {
        left: 0
    }

    .is-splash .border[data-shown="1"] .b {
        transform: scaleX(1)
    }

    .border.sub,
    .team-li .border,
    .ui-btn-toggle .b,
    [data-bg=dark] .border {
        opacity: .15
    }

    .team-li:last-child .border {
        opacity: 0
    }

    .site-window,
    .slide-scroll {
        z-index: 2
    }

    .site-thumb {
        z-index: 4
    }

    .js-webgl {
        z-index: 1
    }

    .ui-cursor {
        z-index: 5
    }

    .site-lang,
    .site-navi {
        z-index: 7
    }

    .site-name {
        z-index: 9
    }

    .site-splash {
        z-index: 11
    }

    .c-scrollbar {
        z-index: 10
    }

    .gallery {
        font-family: gallery, serif;
        font-weight: 400
    }

    .everett {
        font-family: everett, sans-serif
    }

    .lausanne {
        font-family: lausanne, sans-serif;
        font-weight: 150
    }

    .clip .o {
        overflow: hidden;
        line-height: 1.3em;
        position: relative
    }

    .clip .t {
        transform: translate(0);
        line-height: 1.3em
    }

    .flip .o {
        overflow: hidden;
        position: relative
    }

    .flip .o,
    .flip .t {
        vertical-align: bottom;
        line-height: 1.3em;
        height: 1.3em
    }

    .flip .t {
        transform: translate(0)
    }

    .site-navi * {
        backface-visibility: hidden;
        will-change: transform
    }

    .flip2 .o {
        overflow: hidden;
        position: relative
    }

    .flip2 .o,
    .flip2 .t {
        line-height: 1;
        height: 1em
    }

    .flip2 .t {
        transform: translate(0)
    }

    .flip2 .w[data-w=IN],
    .flip2 .w[data-w=IN] .o,
    .flip2 .w[data-w=IN] .t,
    .gallery .o,
    .gallery .t {
        line-height: .8;
        height: .7em
    }

    .gallery {
        line-height: .8
    }

    .site-navi-ul.flip .o,
    .site-navi-ul.flip .t {
        line-height: 1.1;
        height: 1.1em
    }

    .section-title-headline .js-split-l {
        line-height: .6
    }

    .section-title-headline .w,
    .section-title-headline .w .o,
    .section-title-headline .w .t {
        line-height: 1.2;
        height: 1.2em
    }

    .flip2 .w[data-w=GET],
    .flip2 .w[data-w=GET] .o,
    .flip2 .w[data-w=GET] .t,
    .flip2 .w[data-w=TOUCH],
    .flip2 .w[data-w=TOUCH] .o,
    .flip2 .w[data-w=TOUCH] .t {
        line-height: .85;
        height: .85em
    }

    .flip .features-t.gallery .l .s,
    .flip .features-t.gallery .l .t,
    .flip .features-t.gallery .l .w {
        line-height: .825em;
        height: .825em
    }

    .flip .features-t.gallery .l .o {
        line-height: .925em;
        height: .925em;
        margin-bottom: -.15em
    }

    .slide-plane-title .l.odd,
    .slide-plane-title .l.odd .s,
    .slide-plane-title .l.odd .t,
    .slide-plane-title .l.odd .w {
        line-height: .825em;
        height: .825em
    }

    .slide-plane-title .l.odd .o {
        line-height: .925em;
        height: .925em;
        margin-bottom: -.15em
    }

    .is-desktop.is-project-scrolling .slide-plane {
        pointer-events: none
    }

    .slide-plane-title .l.even {
        line-height: .975em;
        height: .975em;
        margin-bottom: 0
    }

    .slide-plane-title .l.even:last-child {
        margin-bottom: 0
    }

    .slide-plane-title .l.even .s,
    .slide-plane-title .l.even .t,
    .slide-plane-title .l.even .w {
        line-height: .875em;
        height: .875em
    }

    .slide-plane-title .l.even .o {
        line-height: .975em;
        height: .975em;
        margin-bottom: -.1em
    }

    .mq-g,
    .mq-g .t {
        line-height: .825em;
        height: .825em
    }

    .mq-g .o {
        line-height: .925em;
        height: .925em;
        margin-bottom: -.15em
    }

    .mq-e {
        line-height: .975em;
        height: .975em
    }

    .mq-e .t {
        line-height: .875em;
        height: .875em
    }

    .mq-e .o {
        line-height: .975em;
        height: .975em;
        margin-bottom: -.1em
    }

    .page-title .l.odd {
        margin-bottom: .15em;
        text-align: center;
        font-family: gallery, serif;
        font-weight: 400;
        display: flex;
        align-items: center;
        justify-content: center;
        line-height: 1em;
        height: .68em
    }

    .page-title .l.odd .o,
    .page-title .l.odd .s,
    .page-title .l.odd .t,
    .page-title .l.odd .w {
        line-height: .95em;
        height: .85em
    }

    .page-title .l.even {
        margin-bottom: .165em;
        text-align: left;
        font-family: everett, sans-serif;
        font-weight: 400;
        display: flex;
        align-items: center;
        line-height: 1.05em;
        height: .75em;
        padding-bottom: .0275em
    }

    .page-title .l.even .o,
    .page-title .l.even .s,
    .page-title .l.even .t,
    .page-title .l.even .w {
        line-height: .95em;
        height: .95em
    }

    .single-footer .page-title .l.even,
    .single-header .page-title .l.even {
        justify-content: center
    }

    .page-title .l.even.last,
    .page-title .l.odd.last {
        margin-bottom: 0
    }

    .page-header .lead-box {
        margin-top: -3.473vw
    }

    .page-title .w {
        padding-left: .25em;
        padding-right: .25em;
        margin-right: -.25em;
        margin-left: -.25em
    }

    .section-title-headline .o {
        display: block
    }

    .js-css[data-anim="1"],
    .js-split-l .l[data-anim="1"] .o,
    .js-split-l .l[data-anim="1"] .t,
    [data-anim="1"] .pickup-slide.now,
    [data-anim="1"] .pickup-slide.prev {
        will-change: transform
    }

    .bg-img {
        overflow: hidden;
        transition: background-color 1s;
        background-color: var(--col-l-gray)
    }

    .is-splash [data-bg=dark] .bg-img {
        background-color: var(--col-d-gray)
    }

    .is-splash .bg-img.bg-cover,
    .is-splash .bg-img.png,
    .is-splash [data-bg=dark] .bg-img.png {
        background-color: transparent
    }

    .is-splash .bg-img,
    .is-splash .bg-img .img {
        width: 100%;
        height: 100%;
        display: block
    }

    .is-splash .pickup .bg-img {
        transition: transform 2s cubic-bezier(.66, 0, .34, 1)
    }

    .is-splash .bg-img.bg-cover .img {
        background-size: cover;
        background-repeat: no-repeat;
        background-position: 50%;
        opacity: 0;
        transition: opacity 1s, transform 2s;
        transform: scale(1.2)
    }

    .is-splash .bg-img img,
    .is-splash .bg-video video {
        width: 100%;
        height: 100%;
        opacity: 0;
        transition: opacity 1s, transform 2s;
        transform: scale(1.2);
        -o-object-fit: cover;
        object-fit: cover
    }

    .is-splash .bg-img-clip,
    .is-splash .bg-img-wrap {
        overflow: hidden;
        width: 100%;
        height: 100%
    }

    .is-splash .bg-img-clip .bg-img.bg-cover .img,
    .is-splash .bg-img-clip .bg-img img,
    .is-splash .bg-img-clip .bg-video video {
        transform: scale(1.4)
    }

    .is-splash .bg-img.bg-cover.is-img-loaded .img,
    .is-splash .bg-img.is-img-loaded img,
    .is-splash .bg-video.is-video-load-start video {
        opacity: 1;
        transform: scale(1)
    }

    .is-splash .bg-img-clip .bg-img.bg-cover.is-img-loaded .img,
    .is-splash .bg-img-clip .bg-img.is-img-loaded img,
    .is-splash .bg-img-clip .bg-video.is-video-load-start video {
        opacity: 1;
        transform: scale(1.2)
    }

    .is-splash .bg-img-clip .bg-img.is-img-loaded,
    .is-splash .bg-img.is-img-loaded,
    .is-splash .bg-video.is-video-load-start,
    .is-splash [data-bg=dark] .bg-img.is-img-loaded {
        background-color: transparent
    }

    .is-splash .thumb-li .bg-img img,
    .is-splash .thumb-li .bg-video video {
        transform: scale(1.3);
        transition: opacity 1s, transform 1s
    }

    .is-splash .grid-img-li .bg-img .img,
    .is-splash .grid-img-li .bg-img.is-img-loaded .img,
    .is-splash .grid-img-li .bg-img img,
    .is-splash .grid-img-li .bg-video .img,
    .is-splash .grid-img-li .bg-video.is-video-load-start .img,
    .is-splash .grid-img-li .bg-video.is-video-load-start video,
    .is-splash .grid-img-li .bg-video video,
    .is-splash .section-media .bg-img .img,
    .is-splash .section-media .bg-img.is-img-loaded .img,
    .is-splash .section-media .bg-img img,
    .is-splash .section-media .bg-video .img,
    .is-splash .section-media .bg-video.is-video-load-start .img,
    .is-splash .section-media .bg-video.is-video-load-start video,
    .is-splash .section-media .bg-video video,
    .is-splash .thumb-li.active .bg-img .img,
    .is-splash .thumb-li.active .bg-img.is-img-loaded .img,
    .is-splash .thumb-li.active .bg-img img,
    .is-splash .thumb-li.active .bg-video .img,
    .is-splash .thumb-li.active .bg-video.is-video-load-start .img,
    .is-splash .thumb-li.active .bg-video.is-video-load-start video,
    .is-splash .thumb-li.active .bg-video video {
        transform: scale(1)
    }

    .is-splash .pickup .bg-img {
        transform: scale(1.1)
    }

    .is-splash .pickup .prev .bg-img {
        transform: scale(1)
    }

    .is-splash .bg-img-pivot {
        width: 100%;
        height: 100%
    }

    .is-splash .bg-img-pivot .bg-img,
    .is-splash .bg-img-pivot .bg-video {
        transform: scale(1)
    }

    .is-splash .slide-plane .bg-img {
        background: transparent
    }

    .is-splash .bg-video {
        position: relative
    }

    .is-splash .bg-video .poster {
        pointer-events: none;
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: 10;
        transition: opacity 1.5s;
        overflow: hidden
    }

    .is-splash .bg-video .poster div {
        background-size: 100% 100%;
        background-position: 50%;
        width: 110%;
        height: 110%;
        margin-left: -5%;
        margin-top: -5%
    }

    .is-splash .bg-video video {
        transition: opacity 1s, transform 1s;
        opacity: 0
    }

    .is-splash .is-video-canplay.bg-video video,
    .is-splash .is-video-play.bg-video video {
        opacity: 1
    }

    .is-splash .is-video-canplay.bg-video .poster.is-poster-loaded,
    .is-splash .is-video-play.bg-video .poster.is-poster-loaded {
        opacity: 0
    }

    .section.page-header {
        z-index: 3
    }

    .is-js-scroll .site-window {
        overflow: hidden;
        position: fixed;
        width: 100%;
        height: 100%;
        top: 0;
        left: 0
    }

    .is-js-scroll .js-scroll {
        will-change: auto
    }

    .is-js-scroll .js-scroll[data-visible="1"] {
        will-change: transform
    }

    .is-js-scroll .section.page-header {
        z-index: 2
    }

    [data-scroll-section-inview],
    [data-scroll-section-inview] .bg-img[data-scroll] {
        will-change: transform
    }

    .site-window {
        z-index: 2;
        position: relative
    }

    .js-webgl {
        position: fixed;
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
        pointer-events: none
    }

    .section,
    .section-wrap {
        position: relative
    }

    .section {
        z-index: 2
    }

    .pickup {
        z-index: 3
    }

    .alt {
        text-indent: -9999px;
        position: absolute;
        top: 0;
        left: 0
    }

    .section-sitemap {
        margin-top: -2px
    }

    .section-sitemap .cover {
        height: 75%
    }

    .cover {
        position: absolute;
        bottom: 0;
        height: 50%;
        pointer-events: none
    }

    .cover,
    .js-scroll-height {
        width: 100%
    }

    .section-bg {
        position: absolute;
        width: 100%;
        height: 100%;
        top: 0;
        left: 0
    }

    .c-scrollbar {
        position: fixed;
        width: 10px
    }

    .site-lang,
    .site-name,
    .site-navi {
        position: absolute;
        top: 0
    }

    .site-navi-body,
    .site-navi-foot,
    .site-navi-head {
        position: relative;
        z-index: 3
    }

    .is-static-scroll .site-name,
    .is-static-scroll .site-navi {
        position: fixed
    }

    .site-navi {
        width: calc(var(--gw)*3);
        right: 0;
        transform: translateY(calc(var(--gw)*-1 - .65em))
    }

    .site-navi,
    .site-navi a {
        display: block
    }

    .site-navi-body {
        padding: 0 calc(var(--gw)*0.5);
        text-transform: uppercase;
        line-height: 1
    }

    .site-navi-head a,
    .site-navi-lang {
        width: 100%;
        height: calc(var(--gw)*2)
    }

    .site-navi-head a {
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 0 var(--gw)
    }

    .site-navi-bg {
        position: absolute;
        z-index: 1;
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
        padding: 5px
    }

    .site-navi-bg div {
        width: 100%;
        height: 100%;
        background: var(--col-black);
        border-radius: calc(var(--gw)*0.5)
    }

    .site-subnavi {
        padding-top: 1em
    }

    .site-subnavi ul {
        position: relative;
        padding-left: 0;
        overflow: hidden;
        font-weight: 100
    }

    .site-lang {
        width: calc(var(--gw)*2);
        height: calc(var(--gw)*2);
        display: flex;
        justify-content: center;
        align-items: center;
        right: calc(var(--gw)*4)
    }

    .ui-lang-a {
        cursor: pointer
    }

    .ui-lang-a a {
        display: flex;
        justify-content: center;
        align-items: center;
        width: 100%;
        height: 100%;
        pointer-events: none
    }

    .site-name {
        display: block;
        padding: var(--gw) var(--gw) calc(var(--gw)*0.5) var(--gw);
        margin-top: -.65em
    }

    .site-name .ja .t {
        transform: translateY(-100%)
    }

    [data-page-name=home] .site-name .ja .t {
        transform: translate(0)
    }

    .site-name-h .t {
        display: flex
    }

    .site-name-h .copy {
        padding-left: .5em;
        font-weight: 100
    }

    .has-scrollover-dark .site-name {
        color: var(--col-white)
    }

    .site-navi-head {
        pointer-events: none;
        opacity: 0;
        transform: scale(.9);
        transition: opacity .3s, transform .6s cubic-bezier(.32, .94, .6, 1)
    }

    .site-navi-lang .t,
    .site-navi-ul .t {
        transition: opacity .3s, color .4s, transform .6s cubic-bezier(.32, .94, .6, 1)
    }

    .site-navi-ul a {
        width: 100%;
        position: relative;
        overflow: hidden;
        padding: .05em 0
    }

    .site-navi-ul a>.in {
        width: -moz-fit-content;
        width: fit-content;
        overflow: hidden
    }

    .site-navi-lang {
        pointer-events: none;
        opacity: 0;
        display: flex;
        align-items: center
    }

    .site-navi-bg {
        opacity: 0;
        transform: scale(.9)
    }

    .is-splash .site-navi-body,
    .is-splash .site-navi-lang {
        transition: opacity .3s, transform .6s cubic-bezier(.32, .94, .6, 1)
    }

    .is-splash .site-navi-bg {
        transition: opacity .3s, transform .6s
    }

    .is-splash .site-name,
    .is-splash .site-navi {
        transition: transform .8s cubic-bezier(.32, .94, .6, 1)
    }

    .site-navi-ul .active {
        pointer-events: none
    }

    .site-navi-ul .active .u {
        transform: scaleX(1);
        transform-origin: left
    }

    .has-scrollover-navi .site-navi {
        pointer-events: none
    }

    .has-scrollover-navi .site-navi-ul .u {
        transform: scaleX(0);
        transform-origin: right
    }

    .has-scrollover-navi .site-navi {
        transform: translate(0)
    }

    .has-scrollover-navi .site-navi-head {
        pointer-events: auto;
        opacity: 1;
        transform: scale(1)
    }

    .has-scrollover-navi .site-navi-lang .t,
    .has-scrollover-navi .site-navi-ul .t {
        opacity: 0;
        transform: translateY(100%)
    }

    .site-navi-lang .o {
        opacity: 0
    }

    .is-menu-opened.has-scrollover-navi .site-navi {
        pointer-events: auto
    }

    .is-menu-opened.has-scrollover-navi .site-navi-ul .active .u {
        transform: scaleX(1);
        transform-origin: left;
        transition: background .4s, transform .6s cubic-bezier(.32, .94, .6, 1)
    }

    .is-menu-opened.has-scrollover-navi .site-navi-ul .u div {
        background: var(--col-white)
    }

    .is-menu-opened.has-scrollover-navi .site-navi {
        transform: translate(0)
    }

    .is-menu-opened.has-scrollover-navi .site-navi,
    .is-menu-opened.has-scrollover-navi .site-navi a {
        color: var(--col-white)
    }

    .is-menu-opened.has-scrollover-navi .site-navi-lang {
        pointer-events: auto;
        opacity: 1
    }

    .is-menu-opened.has-scrollover-navi .site-navi-bg,
    .is-menu-opened.has-scrollover-navi .site-navi-body,
    .is-menu-opened.has-scrollover-navi .site-navi-head {
        pointer-events: auto;
        opacity: 1;
        transform: scale(1)
    }

    .is-menu-opened.has-scrollover-navi .site-navi-ul li:nth-child(0) .t {
        transition-delay: 0s
    }

    .is-menu-opened.has-scrollover-navi .site-navi-ul li:first-child .t {
        transition-delay: .05s
    }

    .is-menu-opened.has-scrollover-navi .site-navi-ul li:nth-child(2) .t {
        transition-delay: .1s
    }

    .is-menu-opened.has-scrollover-navi .site-navi-ul li:nth-child(3) .t {
        transition-delay: .15s
    }

    .is-menu-opened.has-scrollover-navi .site-navi-ul li:nth-child(4) .t {
        transition-delay: .2s
    }

    .is-menu-opened.has-scrollover-navi .site-navi-ul li:nth-child(5) .t {
        transition-delay: .25s
    }

    .is-menu-opened.has-scrollover-navi .site-navi-lang .o {
        opacity: 1
    }

    .is-menu-opened.has-scrollover-navi .site-navi-lang .t,
    .is-menu-opened.has-scrollover-navi .site-navi-ul .t {
        opacity: 1;
        transform: translate(0)
    }

    .has-scrollover-footer .site-name,
    .has-scrollover-footer .site-navi {
        pointer-events: none
    }

    .has-scrollover-footer .site-name,
    .has-scrollover-footer .site-navi {
        transform: translateY(calc(var(--gw)*-2))
    }

    .has-scrollover-footer[data-page-theme=dark] .site-name,
    .has-scrollover-footer[data-page-theme=dark] .site-navi {
        pointer-events: auto
    }

    .has-scrollover-footer[data-page-theme=dark] .site-name {
        transform: translate(0)
    }

    .has-scrollover-footer[data-page-theme=dark] .site-navi {
        transform: translateY(calc(var(--gw)*-1 - .65em))
    }

    .js-split-l .c,
    .js-split-l .s,
    .js-split-l .w,
    .js-split-w .c,
    .js-split-w .s,
    .js-split-w .w {
        display: inline-block
    }

    .js-split-l .w .o,
    .js-split-w .w .o {
        padding-right: .25em;
        padding-left: .25em;
        margin-right: -.25em;
        margin-left: -.25em
    }

    .js-split-l-child .s,
    .js-split-l .s,
    .js-split-w-child .s,
    .js-split-w .s {
        width: .25em;
        height: 100%
    }

    .js-split-l-child .s:first-child,
    .js-split-l-child .s[data-x="0"],
    .js-split-l .s:first-child,
    .js-split-l .s[data-x="0"],
    .js-split-w-child .s:first-child,
    .js-split-w-child .s[data-x="0"],
    .js-split-w .s:first-child,
    .js-split-w .s[data-x="0"] {
        width: 0
    }

    .lead-box,
    .page-title,
    .pickup-count,
    .pickup-head {
        cursor: default
    }

    .footer-title .page-title {
        pointer-events: auto
    }

    .research-a {
        cursor: pointer
    }

    .research-a * {
        pointer-events: none
    }

    .page-title-pivot {
        height: 100%
    }

    .page-title {
        line-height: .77;
        text-transform: uppercase;
        height: 100%;
        width: 100%;
        display: flex;
        align-items: center
    }

    .page-title-body {
        width: 100%
    }

    .page-title {
        padding: 0 calc(var(--gw)*3)
    }

    .single-footer .page-title {
        padding: 0
    }

    .single-header .page-title {
        padding: 0 calc(var(--gw)*1)
    }

    .page-title .o {
        overflow: hidden
    }

    .lead-box {
        letter-spacing: -.04em;
        position: absolute;
        z-index: 2;
        top: 0;
        left: 0;
        text-transform: uppercase;
        width: calc(var(--gw)*4);
        line-height: 1.245;
        font-weight: 400
    }

    .lead-body {
        margin-top: -.1em
    }

    .page-header .lead-box {
        top: 50%;
        left: calc(var(--gw)*16)
    }

    .lead-body>div {
        display: inline-block
    }

    .lead-box .clock-tb {
        font-weight: 400;
        padding-top: 0
    }

    @media (max-width:1024px) {
        .lead-body br {
            display: none
        }
    }

    @media (max-width:1380px) {
        .lead-box {
            letter-spacing: -.03em
        }

        .lead-body br {
            display: none
        }
    }

    @media (min-width:1680px) {
        .lead-body br {
            display: none
        }
    }

    .clock {
        line-height: 1;
        display: flex;
        align-items: baseline
    }

    .clock-wrap {
        margin-bottom: -.15em;
        overflow: hidden
    }

    .clock-th {
        padding-right: .25em
    }

    .clock-tb {
        font-weight: 100;
        display: flex;
        justify-content: center;
        align-items: center;
        text-align: center;
        padding-top: .05em
    }

    .clock-tb .h,
    .clock-tb .m,
    .clock-tb .s {
        min-width: 1.5em
    }

    .clock-tb .k {
        margin-top: -.3em
    }

    .parts {
        position: absolute;
        height: calc(var(--gw)*2);
        display: flex;
        align-items: center
    }

    .parts-b1 {
        bottom: 0;
        left: var(--gw)
    }

    .parts-b2 {
        bottom: 0;
        left: calc(var(--gw)*4)
    }

    .parts-b3 {
        bottom: 0;
        left: 50%;
        transform: translate(-50%)
    }

    .parts-b4 {
        bottom: 0;
        right: var(--gw)
    }

    .parts-t1 {
        top: 0;
        left: 50%;
        transform: translate(-50%)
    }

    .address {
        font-weight: 100
    }

    .pagging {
        margin: 0 -.5em
    }

    .pagging a {
        padding: 0 .5em
    }

    .pickup {
        position: absolute;
        bottom: calc(var(--gw)*-2.5);
        right: var(--gw)
    }

    .pickup-ul {
        will-change: transform;
        width: calc(var(--gw)*4.5);
        height: calc(var(--gw)*4.5*4/3);
        border-radius: calc(var(--gw)*4.5*0.5);
        overflow: hidden
    }

    .pickup-a {
        z-index: 0;
        display: block;
        width: 100%;
        height: 100%;
        position: absolute;
        top: 0;
        left: 0
    }

    .pickup-a.prev {
        z-index: 2
    }

    .pickup-a.now {
        z-index: 1
    }

    .pickup-slide {
        transform-origin: center bottom;
        visibility: hidden
    }

    .pickup-slide.now,
    .pickup-slide.prev {
        visibility: visible
    }

    .pickup-thumb,
    .pickup-thumb-body {
        width: 100%;
        height: 100%
    }

    .pickup-head {
        text-align: right;
        padding-bottom: 2em
    }

    .pickup-count {
        z-index: 3;
        height: calc(var(--gw)*2);
        bottom: calc(var(--gw)*-2.5*-1);
        left: calc(var(--gw)*-2);
        position: absolute
    }

    .parentheses,
    .pickup-count {
        display: flex;
        justify-content: center;
        align-items: center
    }

    .parentheses {
        line-height: 1em;
        text-align: center;
        font-weight: 100
    }

    .parentheses .s {
        margin-top: -.15em;
        letter-spacing: 0
    }

    .parentheses .s:first-child {
        padding-right: .05em
    }

    .parentheses .s:last-child {
        padding-left: .08em
    }

    .parentheses {
        overflow: hidden
    }

    .parentheses .max,
    .parentheses .min,
    .parentheses .n {
        min-width: 1.5em
    }

    .parentheses .max-body,
    .parentheses .min-body {
        margin-top: -.1em
    }

    .parentheses .max-body,
    .parentheses .max-body div,
    .parentheses .min-body,
    .parentheses .min-body div {
        height: 1em;
        line-height: 1.2em
    }

    .pickup-control {
        position: absolute;
        bottom: 0;
        right: 0;
        z-index: 3;
        width: var(--gw);
        height: var(--gw)
    }

    .pickup-control .progress {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 120%;
        height: 120%;
        z-index: -1
    }

    .progress path {
        fill: none;
        stroke: var(--col-d-gray);
        stroke-miterlimit: 10;
        stroke-width: .8px;
        stroke-dasharray: 189;
        stroke-dashoffset: 189
    }

    .body {
        position: relative;
        padding: 0 var(--gw);
        z-index: 2
    }

    .thin {
        padding: 0 calc(var(--gw)*4)
    }

    .inner {
        padding: 0 calc(var(--gw)*3)
    }

    .section-title-headline {
        text-transform: uppercase;
        text-align: center
    }

    .section-title-headline,
    .section-title-support {
        display: flex;
        justify-content: center;
        align-items: center;
        height: calc(var(--gw)*2)
    }

    .section-title-support .ui-link {
        max-width: calc(var(--gw)*3);
        min-width: calc(var(--gw)*2)
    }

    .section-title-support .ui-link .o {
        display: inline-block
    }

    .section-title-support .border {
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100%
    }

    .p1 {
        margin-top: -.4em;
        text-align: center;
        line-height: 1.2;
        letter-spacing: -.04em
    }

    .features-n,
    .p1 {
        font-weight: 100
    }

    .features-n .o {
        padding-right: .25em
    }

    .features-a {
        position: relative;
        overflow: hidden;
        display: block;
        padding-top: calc(var(--gw)*1.2);
        padding-bottom: calc(var(--gw)*1.15)
    }

    .features-h-wrap {
        display: block;
        padding-right: calc(var(--gw)*3);
        padding-left: calc(var(--gw)*3);
        width: 100%
    }

    .features-h {
        margin-bottom: 0;
        display: inline-block;
        position: relative;
        max-width: calc(100vw - var(--gw)*8);
        width: 100%
    }

    .features-n {
        position: absolute;
        top: .5em;
        left: calc(var(--gw)*-1);
        width: var(--gw);
        display: flex;
        align-items: center;
        justify-content: center
    }

    .features-t {
        width: 100%;
        text-transform: uppercase;
        white-space: nowrap
    }

    .features-t,
    .features-t .s,
    .features-t .w {
        line-height: .6
    }

    .features-t .s,
    .features-t .w {
        height: .6em
    }

    .features-t-wrap {
        position: relative;
        width: 100%
    }

    .features-label {
        font-weight: 100;
        position: absolute;
        right: calc(var(--gw)*2);
        top: calc(var(--gw)*1.2)
    }

    .features-label .t {
        transform: translateY(100%)
    }

    .flip-b {
        position: absolute;
        top: 0;
        left: 0
    }

    .features-a .border {
        position: absolute;
        bottom: 0;
        left: 0;
        opacity: .1
    }

    .features-a .features-hover {
        opacity: 1;
        left: calc(var(--gw)*2);
        transform-origin: center center
    }

    .features-a .features-hover .b {
        transition: all .6s cubic-bezier(.32, .94, .6, 1);
        transform: scaleX(0);
        transform-origin: center left
    }

    .js-thumb * {
        pointer-events: none
    }

    .re-body {
        margin: 0 calc(var(--gw)*-1)
    }

    .mq {
        font-size: 0;
        text-transform: uppercase;
        width: 100vw;
        overflow: hidden
    }

    .mq-anim {
        line-height: .9;
        white-space: nowrap;
        text-align: left
    }

    .mq-anim:last-child {
        margin-top: 0
    }

    .mq-ul {
        will-change: auto
    }

    .mq-li,
    .mq-li .l,
    .mq-ul {
        display: inline-block
    }

    .mq-li .o {
        padding: 0;
        overflow: hidden
    }

    .mq-li .t {
        padding: 0 .33em
    }

    .mq-g {
        font-family: gallery, serif
    }

    .mq-e {
        font-weight: 100;
        font-family: everett, sans-serif
    }

    .mq-anim {
        transform: translate(0)
    }

    .mq-ul[data-visible="1"] {
        animation: marquee 80s linear infinite forwards;
        will-change: transform
    }

    .mq.back .mq-anim .mq-ul[data-visible="1"] {
        animation: marquee_backward 80s linear infinite forwards;
        will-change: transform
    }

    @keyframes marquee {
        0% {
            transform: translate(0)
        }

        to {
            transform: translate(-50%)
        }
    }

    @keyframes marquee_backward {
        0% {
            transform: translate(-50%)
        }

        to {
            transform: translate(0)
        }
    }

    .title-flex {
        height: calc(var(--gw)*2);
        justify-content: space-between
    }

    .title-flex,
    .title-td {
        display: flex;
        align-items: center
    }

    .title-td {
        width: 33.333%
    }

    .title-td-center {
        justify-content: center
    }

    .title-td-right {
        justify-content: flex-end
    }

    .sns-ul {
        display: flex;
        justify-content: center;
        align-items: center
    }

    .sns-ul li {
        padding: 0 .25em
    }

    .footer-title-body {
        position: relative
    }

    .footer-title-a .w[data-w=IN] {
        font-family: gallery, serif
    }

    .footer-title-aside {
        position: absolute;
        right: 0;
        bottom: 0
    }

    .footer-header {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%
    }

    .footer-body {
        width: 100%
    }

    .footer-flex {
        padding-top: calc(var(--gw)*2);
        height: 100%;
        width: 100%;
        display: flex;
        flex-direction: column;
        justify-content: flex-end
    }

    .footer-title-a {
        display: inline-block
    }

    .footer-title-body {
        text-align: center
    }

    .footer-title-aside {
        display: none
    }

    .slide-scroll {
        width: 100vw;
        height: 100vh;
        position: fixed;
        top: 0;
        left: 0;
        transform: rotate(15deg)
    }

    .slide-plane {
        user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        -khtml-user-select: none;
        -webkit-user-select: none;
        -webkit-touch-callout: none;
        height: calc(var(--gw)*5.6*1.5);
        position: relative;
        will-change: auto;
        padding: 0 calc(var(--gw)*0.6)
    }

    .slide-plane.even {
        margin-bottom: calc(var(--gw)*0.6*2)
    }

    .slide-plane.odd {
        margin-top: calc(var(--gw)*0.6*2)
    }

    .slide-plane[data-visible="1"],
    .slide-plane[data-visible="1"] .img {
        will-change: transform
    }

    .slide-a {
        user-select: none;
        -webkit-user-select: none;
        -ms-user-select: none;
        -moz-user-select: none;
        -khtml-user-select: none;
        -webkit-user-drag: none;
        -khtml-user-drag: none;
        height: 100%;
        width: calc(var(--gw)*5.6);
        height: calc(var(--gw)*5.6*1.5);
        display: block;
        position: relative
    }

    .slide-plane-parts {
        padding-top: .5em;
        padding-bottom: .5em;
        height: auto;
        position: absolute;
        text-transform: uppercase;
        pointer-events: none;
        width: calc(var(--gw)*5.6*1.6)
    }

    .slide-plane-y {
        right: 0;
        top: 0;
        transform: rotate(90deg) translate(100%, -100%);
        transform-origin: right top
    }

    .slide-plane-t {
        width: 100%
    }

    .slide-plane-parts .t {
        display: flex;
        align-items: center
    }

    .slide-plane-parts .t .parentheses {
        padding-right: .5em
    }

    .slide-plane-title {
        width: 100%;
        height: 100%;
        text-transform: uppercase;
        position: absolute;
        top: 0;
        left: 0;
        z-index: 2;
        display: flex;
        justify-content: center;
        align-items: center;
        transform: rotate(-15deg);
        white-space: nowrap
    }

    .slide-plane-title .flip-b {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-52.5%, -55.5%)
    }

    .slide-plane-title .l.odd {
        text-align: center;
        font-family: gallery, serif;
        font-weight: 400
    }

    .slide-plane-title .l.even {
        text-align: center;
        font-family: everett, sans-serif
    }

    .slide-a {
        cursor: pointer
    }

    .slide-a * {
        pointer-events: none
    }

    [data-page-type="404"] .slide-a {
        cursor: default
    }

    .slide-in {
        display: block
    }

    .slide-scroll-body {
        display: flex
    }

    .slide-scroll-contents {
        height: 100vh;
        width: 99999px;
        display: flex;
        align-items: center
    }

    .slide-scroll-wrap {
        position: relative
    }

    .slide-scroll-wrap .parts {
        z-index: 10
    }

    .slide-scroll-control {
        height: calc(var(--gw)*2);
        position: absolute;
        bottom: 0;
        left: var(--gw);
        z-index: 10;
        overflow: hidden
    }

    .slide-scroll-control>.in {
        display: flex;
        justify-content: center;
        align-items: center
    }

    .slide-scroll-thumb .pivot {
        width: 100%;
        height: 100%;
        border: 1px solid var(--col-white);
        position: absolute;
        left: 0;
        top: 50%
    }

    [data-scroll-infinite=false] .slide-scroll-thumb {
        transform: translate(0)
    }

    .slide-scroll-map-li>div {
        border-radius: 2px
    }

    .slide-scroll-thumb .pivot {
        border-radius: 3px
    }

    .slide-scroll-map {
        display: flex;
        justify-content: center;
        align-items: center
    }

    .slide-scroll-map-li {
        width: 8px;
        height: 12px;
        margin-left: 4px;
        margin-right: 4px
    }

    .slide-scroll-map-li:nth-child(2n-1)>div {
        transform: translateY(-2.4px)
    }

    .slide-scroll-map-li:nth-child(2n)>div {
        transform: translateY(2.4px)
    }

    .slide-scroll-map-li>div {
        width: 100%;
        height: 100%;
        border: 1px solid var(--col-white);
        opacity: .1;
        transition: all .15s;
        overflow: hidden
    }

    .slide-scroll-map-li>div>div {
        background-color: var(--col-white);
        width: 100%;
        height: 100%;
        transform: scaleY(0);
        opacity: .5;
        transition: transform .15s;
        transform-origin: top
    }

    .slide-scroll-map-li[data-visible="1"]>div {
        opacity: 1
    }

    .subpage-title-wrap {
        height: 100%;
        display: flex;
        align-items: center
    }

    .page-title.tx-c .l.even,
    .page-title.tx-c .l.odd,
    .subpage-title-wrap {
        justify-content: center;
        text-align: center
    }

    .page-title-support {
        margin-top: 2em;
        text-align: center;
        text-transform: uppercase
    }

    .page-title-support .l {
        margin-bottom: -.1em
    }

    .col-wrap {
        display: flex;
        justify-content: end;
        flex-wrap: wrap
    }

    .col-wrap .col {
        width: 50%
    }

    .col-wrap[data-col="3"] .col {
        width: 33.3333%
    }

    .col-wrap[data-col="4"] .col {
        width: 25%
    }

    .col-wrap {
        margin-right: calc(var(--gw)*-0.5);
        margin-left: calc(var(--gw)*-0.5)
    }

    .col-wrap .col {
        padding-right: calc(var(--gw)*0.5);
        padding-left: calc(var(--gw)*0.5)
    }

    .section-media .col-wrap {
        margin: calc(var(--gw)*-0.5)
    }

    .section-media .col-wrap .col {
        padding: calc(var(--gw)*0.5)
    }

    .col-wrap.partner-wrap {
        justify-content: center
    }

    .editor,
    .inf {
        word-break: break-word
    }

    .editor {
        font-family: lausanne;
        font-weight: 150;
        letter-spacing: -.01em;
        line-height: 1.375
    }

    .editor div {
        display: inline-block
    }

    .editor a {
        text-decoration: underline
    }

    .editor b,
    .editor strong {
        font-weight: 600
    }

    .editor em {
        font-style: italic
    }

    .editor u {
        text-decoration: underline
    }

    .editor blockquote {
        margin-bottom: 2em;
        padding: 2em;
        background: var(--col-l-gray)
    }

    .editor iframe,
    .editor img,
    .editor video {
        margin-bottom: 2em;
        width: 100%
    }

    .editor h2,
    .editor h3,
    .editor h4,
    .editor h5,
    .editor h6 {
        font-family: everett, Noto Sans JP, sans-serif;
        font-weight: 400
    }

    .editor h2,
    .editor h2:first-child,
    .editor h3:first-child,
    .editor h4,
    .editor h4:first-child,
    .editor h5,
    .editor h5:first-child,
    .editor h6,
    .editor h6:first-child {
        margin-top: 3em;
        margin-bottom: 2em
    }

    .editor h2:first-child,
    .editor h3:first-child,
    .editor h4:first-child,
    .editor h5:first-child,
    .editor h6:first-child {
        margin-top: 0
    }

    .editor h3 {
        margin-top: 1em;
        margin-bottom: 1em
    }

    .editor p {
        margin-bottom: 2em
    }

    .editor p:last-child {
        margin-bottom: 0
    }

    .indent,
    .lead-body .w:first-child {
        text-indent: var(--gw)
    }

    .indent-ja {
        text-indent: 1em
    }

    .logo-split-title .lead-body .w:first-child {
        text-indent: 0
    }

    .setback {
        padding-left: var(--gw)
    }

    .editor.indent {
        text-indent: 0
    }

    .editor.indent p {
        text-indent: var(--gw);
        margin-bottom: 0
    }

    .editor.indent p * {
        text-indent: 0
    }

    [lang=ja] .editor-ja.indent p {
        text-indent: 1em
    }

    [lang=ja] .editor-ja.indent p * {
        text-indent: 0
    }

    [lang=ja] .editor-ja {
        font-family: YakuHanJP, Noto Sans JP, sans-serif;
        font-weight: 300;
        line-height: 1.7
    }

    [lang=ja] .editor-ja h2,
    [lang=ja] .editor-ja h3,
    [lang=ja] .editor-ja h4,
    [lang=ja] .editor-ja h5,
    [lang=ja] .editor-ja h6 {
        font-family: YakuHanJP, Noto Sans JP, sans-serif;
        font-weight: 600
    }

    [lang=ja] .indent.ja {
        text-indent: 0;
        line-height: 1.7
    }

    .logo-split {
        overflow: visible
    }

    .logo-split-ul {
        width: calc(var(--gw)*16);
        height: calc(var(--gw)*16*0.42292);
        margin: 0 auto;
        overflow: hidden
    }

    .logo-split-li {
        width: 100%;
        height: 8.33333333%;
        overflow: hidden;
        transition: all 1s cubic-bezier(.32, .94, .6, 1);
        margin-bottom: -1px;
        will-change: transform
    }

    .logo-split.bg-img .img {
        background-repeat: repeat-x;
        background-size: calc(var(--gw)*16) calc(var(--gw)*16*0.42292);
        transition: background 1s cubic-bezier(.32, .94, .6, 1);
        transform: scale(1) !important
    }

    .logo-split-li:nth-child(2n-1) {
        transform: translate(100%)
    }

    .logo-split-li:nth-child(2n) {
        transform: translate(-100%)
    }

    .logo-split-li:nth-child(0) .img {
        background-position-y: calc(var(--gw)*16*0.42292/12*1)
    }

    .logo-split-li:first-child .img {
        background-position-y: calc(var(--gw)*16*0.42292/12*0)
    }

    .logo-split-li:nth-child(2) .img {
        background-position-y: calc(var(--gw)*16*0.42292/12*-1)
    }

    .logo-split-li:nth-child(3) .img {
        background-position-y: calc(var(--gw)*16*0.42292/12*-2)
    }

    .logo-split-li:nth-child(4) .img {
        background-position-y: calc(var(--gw)*16*0.42292/12*-3)
    }

    .logo-split-li:nth-child(5) .img {
        background-position-y: calc(var(--gw)*16*0.42292/12*-4)
    }

    .logo-split-li:nth-child(6) .img {
        background-position-y: calc(var(--gw)*16*0.42292/12*-5)
    }

    .logo-split-li:nth-child(7) .img {
        background-position-y: calc(var(--gw)*16*0.42292/12*-6)
    }

    .logo-split-li:nth-child(8) .img {
        background-position-y: calc(var(--gw)*16*0.42292/12*-7)
    }

    .logo-split-li:nth-child(9) .img {
        background-position-y: calc(var(--gw)*16*0.42292/12*-8)
    }

    .logo-split-li:nth-child(10) .img {
        background-position-y: calc(var(--gw)*16*0.42292/12*-9)
    }

    .logo-split-li:nth-child(11) .img {
        background-position-y: calc(var(--gw)*16*0.42292/12*-10)
    }

    .logo-split-li:nth-child(12) .img {
        background-position-y: calc(var(--gw)*16*0.42292/12*-11)
    }

    .is-splash [data-shown="1"] .logo-split-li:nth-child(0) {
        transform: translate(0);
        transition-delay: 0s
    }

    .is-splash .logo-split-li[data-n="0"] .img {
        background-position-x: calc(var(--gw)*16/9*0)
    }

    .is-splash.is-update .logo-split-li[data-n="0"] .img {
        background-position-x: calc(var(--gw)*16 + var(--gw)*16/9*0);
        transition-duration: 2s;
        transition-timing-function: cubic-bezier(.66, 0, .34, 1);
        transition-property: background
    }

    .is-splash [data-shown="1"] .logo-split-li:first-child {
        transform: translate(0);
        transition-delay: .06s
    }

    .is-splash .logo-split-li[data-n="1"] .img {
        background-position-x: calc(var(--gw)*16/9*1)
    }

    .is-splash.is-update .logo-split-li[data-n="1"] .img {
        background-position-x: calc(var(--gw)*16 + var(--gw)*16/9*1);
        transition-duration: 2s;
        transition-timing-function: cubic-bezier(.66, 0, .34, 1);
        transition-property: background
    }

    .is-splash [data-shown="1"] .logo-split-li:nth-child(2) {
        transform: translate(0);
        transition-delay: .12s
    }

    .is-splash .logo-split-li[data-n="2"] .img {
        background-position-x: calc(var(--gw)*16/9*2)
    }

    .is-splash.is-update .logo-split-li[data-n="2"] .img {
        background-position-x: calc(var(--gw)*16 + var(--gw)*16/9*2);
        transition-duration: 2s;
        transition-timing-function: cubic-bezier(.66, 0, .34, 1);
        transition-property: background
    }

    .is-splash [data-shown="1"] .logo-split-li:nth-child(3) {
        transform: translate(0);
        transition-delay: .18s
    }

    .is-splash .logo-split-li[data-n="3"] .img {
        background-position-x: calc(var(--gw)*16/9*3)
    }

    .is-splash.is-update .logo-split-li[data-n="3"] .img {
        background-position-x: calc(var(--gw)*16 + var(--gw)*16/9*3);
        transition-duration: 2s;
        transition-timing-function: cubic-bezier(.66, 0, .34, 1);
        transition-property: background
    }

    .is-splash [data-shown="1"] .logo-split-li:nth-child(4) {
        transform: translate(0);
        transition-delay: .24s
    }

    .is-splash .logo-split-li[data-n="4"] .img {
        background-position-x: calc(var(--gw)*16/9*4)
    }

    .is-splash.is-update .logo-split-li[data-n="4"] .img {
        background-position-x: calc(var(--gw)*16 + var(--gw)*16/9*4);
        transition-duration: 2s;
        transition-timing-function: cubic-bezier(.66, 0, .34, 1);
        transition-property: background
    }

    .is-splash [data-shown="1"] .logo-split-li:nth-child(5) {
        transform: translate(0);
        transition-delay: .3s
    }

    .is-splash .logo-split-li[data-n="5"] .img {
        background-position-x: calc(var(--gw)*16/9*5)
    }

    .is-splash.is-update .logo-split-li[data-n="5"] .img {
        background-position-x: calc(var(--gw)*16 + var(--gw)*16/9*5);
        transition-duration: 2s;
        transition-timing-function: cubic-bezier(.66, 0, .34, 1);
        transition-property: background
    }

    .is-splash [data-shown="1"] .logo-split-li:nth-child(6) {
        transform: translate(0);
        transition-delay: .36s
    }

    .is-splash .logo-split-li[data-n="6"] .img {
        background-position-x: calc(var(--gw)*16/9*6)
    }

    .is-splash.is-update .logo-split-li[data-n="6"] .img {
        background-position-x: calc(var(--gw)*16 + var(--gw)*16/9*6);
        transition-duration: 2s;
        transition-timing-function: cubic-bezier(.66, 0, .34, 1);
        transition-property: background
    }

    .is-splash [data-shown="1"] .logo-split-li:nth-child(7) {
        transform: translate(0);
        transition-delay: .42s
    }

    .is-splash .logo-split-li[data-n="7"] .img {
        background-position-x: calc(var(--gw)*16/9*7)
    }

    .is-splash.is-update .logo-split-li[data-n="7"] .img {
        background-position-x: calc(var(--gw)*16 + var(--gw)*16/9*7);
        transition-duration: 2s;
        transition-timing-function: cubic-bezier(.66, 0, .34, 1);
        transition-property: background
    }

    .is-splash [data-shown="1"] .logo-split-li:nth-child(8) {
        transform: translate(0);
        transition-delay: .48s
    }

    .is-splash .logo-split-li[data-n="8"] .img {
        background-position-x: calc(var(--gw)*16/9*8)
    }

    .is-splash.is-update .logo-split-li[data-n="8"] .img {
        background-position-x: calc(var(--gw)*16 + var(--gw)*16/9*8);
        transition-duration: 2s;
        transition-timing-function: cubic-bezier(.66, 0, .34, 1);
        transition-property: background
    }

    .is-splash [data-shown="1"] .logo-split-li:nth-child(9) {
        transform: translate(0);
        transition-delay: .54s
    }

    .is-splash .logo-split-li[data-n="9"] .img {
        background-position-x: calc(var(--gw)*16/9*9)
    }

    .is-splash.is-update .logo-split-li[data-n="9"] .img {
        background-position-x: calc(var(--gw)*16 + var(--gw)*16/9*9);
        transition-duration: 2s;
        transition-timing-function: cubic-bezier(.66, 0, .34, 1);
        transition-property: background
    }

    .is-splash [data-shown="1"] .logo-split-li:nth-child(10) {
        transform: translate(0);
        transition-delay: .6s
    }

    .is-splash .logo-split-li[data-n="10"] .img {
        background-position-x: calc(var(--gw)*16/9*10)
    }

    .is-splash.is-update .logo-split-li[data-n="10"] .img {
        background-position-x: calc(var(--gw)*16 + var(--gw)*16/9*10);
        transition-duration: 2s;
        transition-timing-function: cubic-bezier(.66, 0, .34, 1);
        transition-property: background
    }

    .is-splash [data-shown="1"] .logo-split-li:nth-child(11) {
        transform: translate(0);
        transition-delay: .66s
    }

    .is-splash .logo-split-li[data-n="11"] .img {
        background-position-x: calc(var(--gw)*16/9*11)
    }

    .is-splash.is-update .logo-split-li[data-n="11"] .img {
        background-position-x: calc(var(--gw)*16 + var(--gw)*16/9*11);
        transition-duration: 2s;
        transition-timing-function: cubic-bezier(.66, 0, .34, 1);
        transition-property: background
    }

    .is-splash [data-shown="1"] .logo-split-li:nth-child(12) {
        transform: translate(0);
        transition-delay: .72s
    }

    .is-splash .logo-split-li[data-n="12"] .img {
        background-position-x: calc(var(--gw)*16/9*12)
    }

    .is-splash.is-update .logo-split-li[data-n="12"] .img {
        background-position-x: calc(var(--gw)*16 + var(--gw)*16/9*12);
        transition-duration: 2s;
        transition-timing-function: cubic-bezier(.66, 0, .34, 1);
        transition-property: background
    }

    .logo-split-n {
        position: absolute;
        right: 0;
        top: 0;
        transform: rotate(90deg) translate(100%, -100%);
        transform-origin: top right;
        display: flex;
        justify-content: center;
        align-items: center;
        height: calc(var(--gw));
        width: calc(var(--gw)*16*0.42292 - 1em)
    }

    .logo-split-n .parentheses .max,
    .parentheses .min,
    .parentheses .n {
        min-width: 0
    }

    .logo-split-n .min-body {
        transition: transform 1.5s cubic-bezier(.32, .94, .6, 1)
    }

    .is-splash .logo-split-n .n:nth-child(0) .min-body {
        transition-delay: 0s
    }

    .is-splash [data-shown="1"] .logo-split-n .n[data-n="0"] .min-body {
        transform: translateY(0)
    }

    .is-splash .logo-split-n .n:first-child .min-body {
        transition-delay: .06s
    }

    .is-splash [data-shown="1"] .logo-split-n .n[data-n="1"] .min-body {
        transform: translateY(-1.2em)
    }

    .is-splash .logo-split-n .n:nth-child(2) .min-body {
        transition-delay: .12s
    }

    .is-splash [data-shown="1"] .logo-split-n .n[data-n="2"] .min-body {
        transform: translateY(-2.4em)
    }

    .is-splash .logo-split-n .n:nth-child(3) .min-body {
        transition-delay: .18s
    }

    .is-splash [data-shown="1"] .logo-split-n .n[data-n="3"] .min-body {
        transform: translateY(-3.6em)
    }

    .is-splash .logo-split-n .n:nth-child(4) .min-body {
        transition-delay: .24s
    }

    .is-splash [data-shown="1"] .logo-split-n .n[data-n="4"] .min-body {
        transform: translateY(-4.8em)
    }

    .is-splash .logo-split-n .n:nth-child(5) .min-body {
        transition-delay: .3s
    }

    .is-splash [data-shown="1"] .logo-split-n .n[data-n="5"] .min-body {
        transform: translateY(-6em)
    }

    .is-splash .logo-split-n .n:nth-child(6) .min-body {
        transition-delay: .36s
    }

    .is-splash [data-shown="1"] .logo-split-n .n[data-n="6"] .min-body {
        transform: translateY(-7.2em)
    }

    .is-splash .logo-split-n .n:nth-child(7) .min-body {
        transition-delay: .42s
    }

    .is-splash [data-shown="1"] .logo-split-n .n[data-n="7"] .min-body {
        transform: translateY(-8.4em)
    }

    .is-splash .logo-split-n .n:nth-child(8) .min-body {
        transition-delay: .48s
    }

    .is-splash [data-shown="1"] .logo-split-n .n[data-n="8"] .min-body {
        transform: translateY(-9.6em)
    }

    .is-splash .logo-split-n .n:nth-child(9) .min-body {
        transition-delay: .54s
    }

    .is-splash [data-shown="1"] .logo-split-n .n[data-n="9"] .min-body {
        transform: translateY(-10.8em)
    }

    .is-splash .logo-split-n .n:nth-child(10) .min-body {
        transition-delay: .6s
    }

    .is-splash [data-shown="1"] .logo-split-n .n[data-n="10"] .min-body {
        transform: translateY(-12em)
    }

    .is-splash .logo-split-n .n:nth-child(11) .min-body {
        transition-delay: .66s
    }

    .is-splash [data-shown="1"] .logo-split-n .n[data-n="11"] .min-body {
        transform: translateY(-13.2em)
    }

    .is-splash .logo-split-n .n:nth-child(12) .min-body {
        transition-delay: .72s
    }

    .is-splash [data-shown="1"] .logo-split-n .n[data-n="12"] .min-body {
        transform: translateY(-14.4em)
    }

    .logo-split-n .parentheses .max-body,
    .logo-split-n .parentheses .max-body div,
    .logo-split-n .parentheses .min-body,
    .logo-split-n .parentheses .min-body div {
        height: 1.2em;
        line-height: 1.2em
    }

    .logo-split-title {
        display: flex;
        justify-content: center
    }

    .logo-split-title .col {
        width: 33.3333%
    }

    .logo-split-title .lead-box {
        position: relative;
        margin-left: auto;
        max-width: 100%
    }

    .logo-split-h,
    .logo-split-title .clock {
        justify-content: center
    }

    .logo-split-h {
        font-weight: 400;
        text-align: center;
        display: flex;
        margin-top: -.3em
    }

    .section-tagline {
        position: relative
    }

    .section-tagline .body {
        width: 100%;
        height: 100%
    }

    .tagline-header {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%
    }

    .section-big-title {
        font-family: gallery;
        text-align: center;
        line-height: 1;
        line-height: .8;
        height: .72em;
        text-transform: uppercase;
        white-space: nowrap
    }

    .star {
        display: flex;
        justify-content: center;
        align-items: center
    }

    .team-name,
    .team-post {
        text-transform: uppercase
    }

    .team-name .o {
        margin-bottom: .15em;
        display: inline-block;
        padding-right: .15em
    }

    .team-name .o,
    .team-name .t {
        height: auto
    }

    .team-name {
        transform-origin: top left;
        font-family: gallery
    }

    .team-post {
        display: flex;
        flex-wrap: wrap
    }

    .team-post div {
        display: inline-block
    }

    .team-post .category,
    .team-post .country {
        padding-right: .5em
    }

    .team-post .post {
        font-weight: 100
    }

    .team-body {
        overflow: hidden
    }

    .team-body .editor {
        padding-top: 2em;
        padding-bottom: 0
    }

    .team-li {
        position: relative
    }

    .team-li .col-wrap .col:nth-child(2n) {
        display: flex;
        align-items: center
    }

    .team-li .inner {
        padding-top: calc(var(--gw)*1.5);
        padding-bottom: calc(var(--gw)*1.5)
    }

    .team-li.toggle * {
        pointer-events: none
    }

    .team-li.toggle a {
        pointer-events: auto
    }

    .team-li.toggle .inner {
        padding-top: calc(var(--gw)*0.6);
        padding-bottom: calc(var(--gw)*0.6)
    }

    .team-li.toggle {
        cursor: pointer
    }

    .team-li.toggle .team-body {
        height: 0;
        transition: height 1s
    }

    .team-li.toggle.is-toggle-opened .team-body {
        height: auto
    }

    .team-li .ui-btn-toggle {
        position: absolute;
        right: 0;
        top: 50%;
        transform: translateY(-50%)
    }

    .career-name {
        font-weight: 100
    }

    .inf-wrap {
        margin-top: -2em
    }

    .inf-title {
        padding-top: 2em;
        padding-bottom: 2em;
        text-transform: uppercase
    }

    .inf-body {
        font-weight: 100
    }

    .partner-title {
        padding-top: .5em;
        padding-bottom: .5em;
        display: block
    }

    .partner {
        text-align: center
    }

    .drag-slide-wrap {
        position: absolute;
        top: 50%;
        transform: translateY(-50%)
    }

    .drag-slide-wrap,
    .drag-slide-wrap * {
        z-index: 0
    }

    .drag-slide-wrap {
        width: 100vw;
        overflow: hidden;
        cursor: grab
    }

    .drag-slide-wrap.is-dragging {
        cursor: grabbing
    }

    .drag-slide {
        pointer-events: none
    }

    .drag-slide-body {
        display: flex;
        flex-wrap: wrap
    }

    .slide-c,
    .slide-o {
        width: 100%;
        height: 100%
    }

    .slide-c {
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none
    }

    .drag-slide .slide-o {
        padding-left: var(--gw);
        padding-right: var(--gw)
    }

    .drag-slide:first-child .slide-o {
        padding-left: calc(var(--gw)*4)
    }

    .drag-slide:last-child .slide-o {
        padding-right: calc(var(--gw)*4)
    }

    .section-gallery {
        height: calc(50vh + var(--gw)*9)
    }

    .slide-img {
        height: 50vh !important
    }

    .slide-c .editor {
        padding-top: 2em
    }

    .slide-x {
        width: 100%;
        height: 100%
    }

    [data-section-type=img-slider] .drag-slide-wrap {
        position: relative;
        top: 0;
        transform: translate(0)
    }

    .grid {
        height: calc(var(--gw)*12);
        width: calc(var(--gw)*22)
    }

    .grid-title .page-title {
        margin-top: -.1em;
        margin-bottom: -.06em
    }

    .hr-wrap,
    .vr-wrap {
        position: absolute;
        width: 100%;
        height: 100%
    }

    .hr-wrap {
        display: flex;
        justify-content: center;
        align-items: center
    }

    .grid-img-li {
        position: absolute;
        width: var(--gw);
        height: var(--gw)
    }

    .grid-wrap {
        display: grid
    }

    .grid-top {
        order: 1
    }

    .grid-title {
        order: 2
    }

    .grid-bottom {
        order: 3
    }

    .grid-img-li a.bg-img-clip {
        display: block
    }

    .grid-img-li .caption {
        position: absolute;
        transform-origin: top right;
        transform: rotate(90deg) translate(100%, -100%);
        right: 0;
        top: 0;
        display: flex;
        align-items: center;
        height: 3em;
        font-weight: 100
    }

    .grid-img-li .lead-box {
        position: relative;
        width: auto;
        padding-bottom: 1em
    }

    .grid-img-li-a {
        display: block;
        width: 100%;
        height: 100%
    }

    .grid-img-li[data-h="0"],
    .grid[data-h="0"] {
        height: calc(var(--gw)*0)
    }

    .grid-img-li[data-y="0"] {
        top: calc(var(--gw)*0)
    }

    .grid-img-li[data-h="1"],
    .grid[data-h="1"] {
        height: calc(var(--gw)*1)
    }

    .grid-img-li[data-y="1"] {
        top: calc(var(--gw)*1)
    }

    .grid-img-li[data-h="2"],
    .grid[data-h="2"] {
        height: calc(var(--gw)*2)
    }

    .grid-img-li[data-y="2"] {
        top: calc(var(--gw)*2)
    }

    .grid-img-li[data-h="3"],
    .grid[data-h="3"] {
        height: calc(var(--gw)*3)
    }

    .grid-img-li[data-y="3"] {
        top: calc(var(--gw)*3)
    }

    .grid-img-li[data-h="4"],
    .grid[data-h="4"] {
        height: calc(var(--gw)*4)
    }

    .grid-img-li[data-y="4"] {
        top: calc(var(--gw)*4)
    }

    .grid-img-li[data-h="5"],
    .grid[data-h="5"] {
        height: calc(var(--gw)*5)
    }

    .grid-img-li[data-y="5"] {
        top: calc(var(--gw)*5)
    }

    .grid-img-li[data-h="6"],
    .grid[data-h="6"] {
        height: calc(var(--gw)*6)
    }

    .grid-img-li[data-y="6"] {
        top: calc(var(--gw)*6)
    }

    .grid-img-li[data-h="7"],
    .grid[data-h="7"] {
        height: calc(var(--gw)*7)
    }

    .grid-img-li[data-y="7"] {
        top: calc(var(--gw)*7)
    }

    .grid-img-li[data-h="8"],
    .grid[data-h="8"] {
        height: calc(var(--gw)*8)
    }

    .grid-img-li[data-y="8"] {
        top: calc(var(--gw)*8)
    }

    .grid-img-li[data-h="9"],
    .grid[data-h="9"] {
        height: calc(var(--gw)*9)
    }

    .grid-img-li[data-y="9"] {
        top: calc(var(--gw)*9)
    }

    .grid-img-li[data-h="10"],
    .grid[data-h="10"] {
        height: calc(var(--gw)*10)
    }

    .grid-img-li[data-y="10"] {
        top: calc(var(--gw)*10)
    }

    .grid-img-li[data-h="11"],
    .grid[data-h="11"] {
        height: calc(var(--gw)*11)
    }

    .grid-img-li[data-y="11"] {
        top: calc(var(--gw)*11)
    }

    .grid-img-li[data-h="12"],
    .grid[data-h="12"] {
        height: calc(var(--gw)*12)
    }

    .grid-img-li[data-y="12"] {
        top: calc(var(--gw)*12)
    }

    .grid-img-li[data-w="0"],
    .grid[data-w="0"] {
        width: calc(var(--gw)*0)
    }

    .grid-img-li[data-x="0"] {
        left: calc(var(--gw)*0)
    }

    .grid-img-li[data-w="1"],
    .grid[data-w="1"] {
        width: calc(var(--gw)*1)
    }

    .grid-img-li[data-x="1"] {
        left: calc(var(--gw)*1)
    }

    .grid-img-li[data-w="2"],
    .grid[data-w="2"] {
        width: calc(var(--gw)*2)
    }

    .grid-img-li[data-x="2"] {
        left: calc(var(--gw)*2)
    }

    .grid-img-li[data-w="3"],
    .grid[data-w="3"] {
        width: calc(var(--gw)*3)
    }

    .grid-img-li[data-x="3"] {
        left: calc(var(--gw)*3)
    }

    .grid-img-li[data-w="4"],
    .grid[data-w="4"] {
        width: calc(var(--gw)*4)
    }

    .grid-img-li[data-x="4"] {
        left: calc(var(--gw)*4)
    }

    .grid-img-li[data-w="5"],
    .grid[data-w="5"] {
        width: calc(var(--gw)*5)
    }

    .grid-img-li[data-x="5"] {
        left: calc(var(--gw)*5)
    }

    .grid-img-li[data-w="6"],
    .grid[data-w="6"] {
        width: calc(var(--gw)*6)
    }

    .grid-img-li[data-x="6"] {
        left: calc(var(--gw)*6)
    }

    .grid-img-li[data-w="7"],
    .grid[data-w="7"] {
        width: calc(var(--gw)*7)
    }

    .grid-img-li[data-x="7"] {
        left: calc(var(--gw)*7)
    }

    .grid-img-li[data-w="8"],
    .grid[data-w="8"] {
        width: calc(var(--gw)*8)
    }

    .grid-img-li[data-x="8"] {
        left: calc(var(--gw)*8)
    }

    .grid-img-li[data-w="9"],
    .grid[data-w="9"] {
        width: calc(var(--gw)*9)
    }

    .grid-img-li[data-x="9"] {
        left: calc(var(--gw)*9)
    }

    .grid-img-li[data-w="10"],
    .grid[data-w="10"] {
        width: calc(var(--gw)*10)
    }

    .grid-img-li[data-x="10"] {
        left: calc(var(--gw)*10)
    }

    .grid-img-li[data-w="11"],
    .grid[data-w="11"] {
        width: calc(var(--gw)*11)
    }

    .grid-img-li[data-x="11"] {
        left: calc(var(--gw)*11)
    }

    .grid-img-li[data-w="12"],
    .grid[data-w="12"] {
        width: calc(var(--gw)*12)
    }

    .grid-img-li[data-x="12"] {
        left: calc(var(--gw)*12)
    }

    .grid-img-li[data-w="13"],
    .grid[data-w="13"] {
        width: calc(var(--gw)*13)
    }

    .grid-img-li[data-x="13"] {
        left: calc(var(--gw)*13)
    }

    .grid-img-li[data-w="14"],
    .grid[data-w="14"] {
        width: calc(var(--gw)*14)
    }

    .grid-img-li[data-x="14"] {
        left: calc(var(--gw)*14)
    }

    .grid-img-li[data-w="15"],
    .grid[data-w="15"] {
        width: calc(var(--gw)*15)
    }

    .grid-img-li[data-x="15"] {
        left: calc(var(--gw)*15)
    }

    .grid-img-li[data-w="16"],
    .grid[data-w="16"] {
        width: calc(var(--gw)*16)
    }

    .grid-img-li[data-x="16"] {
        left: calc(var(--gw)*16)
    }

    .grid-img-li[data-w="17"],
    .grid[data-w="17"] {
        width: calc(var(--gw)*17)
    }

    .grid-img-li[data-x="17"] {
        left: calc(var(--gw)*17)
    }

    .grid-img-li[data-w="18"],
    .grid[data-w="18"] {
        width: calc(var(--gw)*18)
    }

    .grid-img-li[data-x="18"] {
        left: calc(var(--gw)*18)
    }

    .grid-img-li[data-w="19"],
    .grid[data-w="19"] {
        width: calc(var(--gw)*19)
    }

    .grid-img-li[data-x="19"] {
        left: calc(var(--gw)*19)
    }

    .grid-img-li[data-w="20"],
    .grid[data-w="20"] {
        width: calc(var(--gw)*20)
    }

    .grid-img-li[data-x="20"] {
        left: calc(var(--gw)*20)
    }

    .grid-img-li[data-w="21"],
    .grid[data-w="21"] {
        width: calc(var(--gw)*21)
    }

    .grid-img-li[data-x="21"] {
        left: calc(var(--gw)*21)
    }

    .grid-img-li[data-w="22"],
    .grid[data-w="22"] {
        width: calc(var(--gw)*22)
    }

    .grid-img-li[data-x="22"] {
        left: calc(var(--gw)*22)
    }

    .grid-img-li[data-z="0"] {
        z-index: 0
    }

    .grid-img-li[data-z="1"] {
        z-index: 1
    }

    .grid-img-li[data-z="2"] {
        z-index: 2
    }

    .grid-img-li[data-z="3"] {
        z-index: 3
    }

    .grid-img-li[data-z="4"] {
        z-index: 4
    }

    .grid-img-li[data-z="5"] {
        z-index: 5
    }

    .grid-img-li[data-z="6"] {
        z-index: 6
    }

    .grid-img-li[data-z="7"] {
        z-index: 7
    }

    .grid-img-li[data-z="8"] {
        z-index: 8
    }

    .grid-img-li[data-z="9"] {
        z-index: 9
    }

    .grid-img-li[data-z="10"] {
        z-index: 10
    }

    .grid-img-li[data-h="99"] {
        height: auto
    }

    .single-header {
        margin-bottom: calc(var(--gw)*-2);
        padding-bottom: calc(var(--gw)*2)
    }

    .single-info {
        text-transform: uppercase
    }

    .single-info-head {
        padding-bottom: .5em
    }

    .single-info ul {
        display: flex;
        justify-content: space-between;
        flex-wrap: wrap;
        margin: 0 -1em
    }

    .single-info ul li {
        padding: 2em 1em 0;
        min-width: calc(var(--gw)*5)
    }

    .section-editor {
        padding: 0 calc(var(--gw)*7)
    }

    .section-body {
        width: 100%;
        height: 100%
    }

    [data-section-type=img-full] {
        margin-top: -1px
    }

    [data-section-type=img-col][data-section-bg=light] .spr-bottom,
    [data-section-type=img-col][data-section-bg=light] .spr-top,
    [data-section-type=img-normal][data-section-bg=light] .spr-bottom,
    [data-section-type=img-normal][data-section-bg=light] .spr-top {
        display: none
    }

    [data-section-bg=dark][data-section-next-bg=dark],
    [data-section-next-type=shift] {
        margin-bottom: calc(var(--gw)*-3)
    }

    [data-section-bg=dark][data-section-next-bg=dark] .spr-next,
    [data-section-bg=dark][data-section-next-type=img-full] .spr-next,
    [data-section-next-type=last] .spr-next,
    [data-section-type=img-full][data-section-next-bg=dark] .spr-next,
    [data-section-type=img-full][data-section-next-type=img-full] .spr-next {
        display: none
    }

    [lang=ja] .ja,
    [lang=ja] .p1 {
        font-family: YakuHanJP, Noto Sans JP, sans-serif;
        font-weight: 400;
        line-height: 1.5
    }

    [data-page-type="404"] .slide-a {
        width: calc(var(--gw)*10);
        height: calc(var(--gw)*10*0.42292)
    }

    [data-page-type="404"] .slide-plane {
        width: auto;
        height: auto;
        padding: 0 calc(var(--gw)*1)
    }

    [data-page-type="404"] .slide-plane.odd {
        margin-top: 0;
        margin-bottom: calc(var(--gw)*10*0.42292*0.5)
    }

    [data-page-type="404"] .slide-plane.even {
        margin-bottom: 0;
        margin-top: calc(var(--gw)*10*0.42292*0.5)
    }

    [data-page-type="404"] .slide-plane .img {
        opacity: 1
    }

    [data-page-type="404"] .slide-scroll {
        transform: rotate(0deg) !important
    }

    [data-page-type="404"] .slide-scroll-map-li {
        width: 12px;
        height: 8px;
        margin-left: 4px;
        margin-right: 4px
    }

    [data-page-type="404"] .page-title .l2 {
        justify-content: center
    }

    .logo-split-past .logo-split-n {
        position: relative;
        transform: rotate(0);
        height: auto;
        width: auto;
        top: auto;
        right: auto;
        display: block
    }

    .logo-split-past .logo-split-info {
        display: flex;
        justify-content: space-between;
        align-items: center
    }

    .logo-split-past .logo-split-date {
        height: 1.2em;
        background: var(--col-black)
    }

    .logo-split-past .parentheses,
    .logo-split-past .pickup-count {
        justify-content: end;
        background: var(--col-black)
    }

    .logo-split-past .logo-split-ul {
        width: calc(var(--gw)*10);
        height: calc(var(--gw)*10*0.42292);
        margin: 0;
        overflow: hidden;
        will-change: transform
    }

    .logo-split-past .logo-split-li {
        width: 100%;
        height: 8.33333333%;
        overflow: hidden;
        transition: all 1s cubic-bezier(.32, .94, .6, 1);
        margin-bottom: -1px
    }

    .logo-split-past .img {
        width: 100%;
        height: 100%;
        background-repeat: repeat-x;
        background-size: calc(var(--gw)*10) calc(var(--gw)*10*0.42292)
    }

    .logo-split-past .logo-split-li:nth-child(0) .img {
        background-position-y: calc(var(--gw)*10*0.42292/12*1)
    }

    .logo-split-past .logo-split-li:first-child .img {
        background-position-y: calc(var(--gw)*10*0.42292/12*0)
    }

    .logo-split-past .logo-split-li:nth-child(2) .img {
        background-position-y: calc(var(--gw)*10*0.42292/12*-1)
    }

    .logo-split-past .logo-split-li:nth-child(3) .img {
        background-position-y: calc(var(--gw)*10*0.42292/12*-2)
    }

    .logo-split-past .logo-split-li:nth-child(4) .img {
        background-position-y: calc(var(--gw)*10*0.42292/12*-3)
    }

    .logo-split-past .logo-split-li:nth-child(5) .img {
        background-position-y: calc(var(--gw)*10*0.42292/12*-4)
    }

    .logo-split-past .logo-split-li:nth-child(6) .img {
        background-position-y: calc(var(--gw)*10*0.42292/12*-5)
    }

    .logo-split-past .logo-split-li:nth-child(7) .img {
        background-position-y: calc(var(--gw)*10*0.42292/12*-6)
    }

    .logo-split-past .logo-split-li:nth-child(8) .img {
        background-position-y: calc(var(--gw)*10*0.42292/12*-7)
    }

    .logo-split-past .logo-split-li:nth-child(9) .img {
        background-position-y: calc(var(--gw)*10*0.42292/12*-8)
    }

    .logo-split-past .logo-split-li:nth-child(10) .img {
        background-position-y: calc(var(--gw)*10*0.42292/12*-9)
    }

    .logo-split-past .logo-split-li:nth-child(11) .img {
        background-position-y: calc(var(--gw)*10*0.42292/12*-10)
    }

    .logo-split-past .logo-split-li:nth-child(12) .img {
        background-position-y: calc(var(--gw)*10*0.42292/12*-11)
    }

    .logo-split-past .is-splash [data-shown="1"] .logo-split-li:nth-child(0) {
        transform: translate(0);
        transition-delay: 0s
    }

    .logo-split-past .is-splash .logo-split-li[data-n="0"] .img {
        background-position-x: calc(var(--gw)*10/9*0)
    }

    .logo-split-past .is-splash [data-shown="1"] .logo-split-li:first-child {
        transform: translate(0);
        transition-delay: .06s
    }

    .logo-split-past .is-splash .logo-split-li[data-n="1"] .img {
        background-position-x: calc(var(--gw)*10/9*1)
    }

    .logo-split-past .is-splash [data-shown="1"] .logo-split-li:nth-child(2) {
        transform: translate(0);
        transition-delay: .12s
    }

    .logo-split-past .is-splash .logo-split-li[data-n="2"] .img {
        background-position-x: calc(var(--gw)*10/9*2)
    }

    .logo-split-past .is-splash [data-shown="1"] .logo-split-li:nth-child(3) {
        transform: translate(0);
        transition-delay: .18s
    }

    .logo-split-past .is-splash .logo-split-li[data-n="3"] .img {
        background-position-x: calc(var(--gw)*10/9*3)
    }

    .logo-split-past .is-splash [data-shown="1"] .logo-split-li:nth-child(4) {
        transform: translate(0);
        transition-delay: .24s
    }

    .logo-split-past .is-splash .logo-split-li[data-n="4"] .img {
        background-position-x: calc(var(--gw)*10/9*4)
    }

    .logo-split-past .is-splash [data-shown="1"] .logo-split-li:nth-child(5) {
        transform: translate(0);
        transition-delay: .3s
    }

    .logo-split-past .is-splash .logo-split-li[data-n="5"] .img {
        background-position-x: calc(var(--gw)*10/9*5)
    }

    .logo-split-past .is-splash [data-shown="1"] .logo-split-li:nth-child(6) {
        transform: translate(0);
        transition-delay: .36s
    }

    .logo-split-past .is-splash .logo-split-li[data-n="6"] .img {
        background-position-x: calc(var(--gw)*10/9*6)
    }

    .logo-split-past .is-splash [data-shown="1"] .logo-split-li:nth-child(7) {
        transform: translate(0);
        transition-delay: .42s
    }

    .logo-split-past .is-splash .logo-split-li[data-n="7"] .img {
        background-position-x: calc(var(--gw)*10/9*7)
    }

    .logo-split-past .is-splash [data-shown="1"] .logo-split-li:nth-child(8) {
        transform: translate(0);
        transition-delay: .48s
    }

    .logo-split-past .is-splash .logo-split-li[data-n="8"] .img {
        background-position-x: calc(var(--gw)*10/9*8)
    }

    .logo-split-past .is-splash [data-shown="1"] .logo-split-li:nth-child(9) {
        transform: translate(0);
        transition-delay: .54s
    }

    .logo-split-past .is-splash .logo-split-li[data-n="9"] .img {
        background-position-x: calc(var(--gw)*10/9*9)
    }

    .logo-split-past .is-splash [data-shown="1"] .logo-split-li:nth-child(10) {
        transform: translate(0);
        transition-delay: .6s
    }

    .logo-split-past .is-splash .logo-split-li[data-n="10"] .img {
        background-position-x: calc(var(--gw)*10/9*10)
    }

    .logo-split-past .is-splash [data-shown="1"] .logo-split-li:nth-child(11) {
        transform: translate(0);
        transition-delay: .66s
    }

    .logo-split-past .is-splash .logo-split-li[data-n="11"] .img {
        background-position-x: calc(var(--gw)*10/9*11)
    }

    .logo-split-past .is-splash [data-shown="1"] .logo-split-li:nth-child(12) {
        transform: translate(0);
        transition-delay: .72s
    }

    .logo-split-past .is-splash .logo-split-li[data-n="12"] .img {
        background-position-x: calc(var(--gw)*10/9*12)
    }

    [data-bg=dark] {
        background-color: var(--col-black)
    }

    [data-bg=dark],
    [data-bg=dark] a {
        color: var(--col-white)
    }

    [data-bg=dark] .border .b {
        background: var(--col-white)
    }

    [data-bg=dark] .border .num {
        color: var(--col-white)
    }

    [data-theme=light] [data-bg=dark] {
        color: var(--col-black);
        background-color: var(--col-white)
    }

    [data-theme=light] [data-bg=dark] a {
        color: var(--col-black)
    }

    [data-theme=light] [data-bg=dark] .border .b {
        background: var(--col-black)
    }

    [data-theme=light] [data-bg=dark] .border .num {
        color: var(--col-black)
    }

    [data-theme=light] .lead-box,
    [data-theme=light] .page-title-support {
        opacity: .8
    }

    [data-theme=light] .border,
    [data-theme=light] .border.sub {
        opacity: .3
    }

    [data-theme=light] .ui-btn-link-re .t,
    [data-theme=light] .ui-cursor-text .t {
        color: var(--col-black)
    }

    [data-theme=light] .ui-btn-link-re .o {
        border: 1px solid var(--col-black)
    }

    [data-theme=light] .ui-btn-link-re .o:before {
        background-color: var(--col-white)
    }

    [data-theme=light] .ui-btn-link-re .o:after {
        background-color: var(--col-black)
    }

    [data-theme=light] [data-page-theme=dark] .ui-btn-link .t {
        color: var(--col-black)
    }

    [data-theme=light] [data-page-theme=dark] .ui-btn-link .o {
        border: 1px solid var(--col-black)
    }

    [data-theme=light] [data-page-theme=dark] .ui-btn-link .o:before {
        visibility: hidden;
        background-color: var(--col-white)
    }

    [data-theme=light] [data-page-theme=dark] .ui-btn-link .o:after {
        visibility: hidden;
        background-color: var(--col-black)
    }

    [data-theme=light] .ui-btn-link-re:hover .t,
    [data-theme=light] [data-page-theme=dark] .site-lang:hover .ui-btn-link .t {
        color: var(--col-white)
    }

    [data-theme=light] .ui-btn-link-re:hover .o,
    [data-theme=light] [data-page-theme=dark] .site-lang:hover .ui-btn-link .o {
        border: 1px solid var(--col-black)
    }

    [data-theme=light] .ui-btn-link-re:hover .o:before,
    [data-theme=light] [data-page-theme=dark] .site-lang:hover .ui-btn-link .o:before {
        visibility: visible;
        background: var(--col-black)
    }

    [data-theme=light] .ui-btn-link-re:hover .o:after,
    [data-theme=light] [data-page-theme=dark] .site-lang:hover .ui-btn-link .o:after {
        visibility: visible;
        transform: scaleY(1);
        transform-origin: bottom
    }

    [data-theme=light] .site-navi-ul a {
        color: var(--col-black)
    }

    [data-theme=light] .site-navi-bg div {
        background: var(--col-white)
    }

    [data-theme=light] .site-navi-lang .ui-btn-link.diseble .t {
        color: var(--col-black)
    }

    .is-menu-opened.has-scrollover-navi[data-theme=light] .site-navi-ul .u div {
        background: var(--col-black)
    }

    .is-menu-opened.has-scrollover-navi[data-theme=light] .site-navi,
    .is-menu-opened.has-scrollover-navi[data-theme=light] .site-navi a {
        color: var(--col-black)
    }

    [data-page-theme=dark] .page-origin,
    [data-page-theme=dark] .page-origin a,
    [data-page-theme=dark] .site-name,
    [data-page-theme=dark] .site-navi a {
        color: var(--col-white)
    }

    [data-theme=light][data-page-theme=dark] {
        background-color: var(--col-white)
    }

    [data-theme=light][data-page-theme=dark] .page-origin,
    [data-theme=light][data-page-theme=dark] .page-origin a,
    [data-theme=light][data-page-theme=dark] .site-name,
    [data-theme=light][data-page-theme=dark] .site-navi a {
        color: var(--col-black)
    }

    [data-theme=light][data-page-theme=dark] .slide-scroll-map-li>div,
    [data-theme=light][data-page-theme=dark] .slide-scroll-thumb .pivot {
        border: 1px solid var(--col-black)
    }

    [data-theme=light][data-page-theme=dark] .slide-scroll-map-li>div>div {
        background-color: var(--col-black)
    }

    [data-bg=dark] .ui-btn-arrow,
    [data-page-theme=dark] .ui-btn-arrow,
    [data-scheme=dark] .ui-btn-arrow {
        color: var(--col-black)
    }

    [data-bg=dark] .site-navi-ul .u div,
    [data-bg=dark] .ui-btn-arrow .b,
    [data-bg=dark] .ui-link-underline .u,
    [data-page-theme=dark] .site-navi-ul .u div,
    [data-page-theme=dark] .ui-btn-arrow .b,
    [data-page-theme=dark] .ui-link-underline .u,
    [data-scheme=dark] .site-navi-ul .u div,
    [data-scheme=dark] .ui-btn-arrow .b,
    [data-scheme=dark] .ui-link-underline .u {
        background: var(--col-white)
    }

    [data-bg=dark] .ui-btn-circle .txt,
    [data-page-theme=dark] .ui-btn-circle .txt,
    [data-scheme=dark] .ui-btn-circle .txt {
        color: var(--col-black)
    }

    [data-bg=dark] .ui-btn-circle.ui-link-underline .u,
    [data-page-theme=dark] .ui-btn-circle.ui-link-underline .u,
    [data-scheme=dark] .ui-btn-circle.ui-link-underline .u {
        background: var(--col-black)
    }

    [data-bg=dark] .ui-btn-circle .b,
    [data-page-theme=dark] .ui-btn-circle .b,
    [data-scheme=dark] .ui-btn-circle .b {
        background: var(--col-white)
    }

    [data-theme=light] [data-bg=dark] .ui-btn-arrow,
    [data-theme=light][data-page-theme=dark] .ui-btn-arrow {
        color: var(--col-white)
    }

    [data-theme=light] [data-bg=dark] .site-navi-ul .u div,
    [data-theme=light] [data-bg=dark] .ui-btn-arrow .b,
    [data-theme=light] [data-bg=dark] .ui-link-underline .u,
    [data-theme=light][data-page-theme=dark] .site-navi-ul .u div,
    [data-theme=light][data-page-theme=dark] .ui-btn-arrow .b,
    [data-theme=light][data-page-theme=dark] .ui-link-underline .u {
        background: var(--col-black)
    }

    [data-theme=light] [data-bg=dark] .ui-btn-circle .txt,
    [data-theme=light][data-page-theme=dark] .ui-btn-circle .txt {
        color: var(--col-white)
    }

    [data-theme=light] [data-bg=dark] .ui-btn-circle.ui-link-underline .u,
    [data-theme=light][data-page-theme=dark] .ui-btn-circle.ui-link-underline .u {
        background: var(--col-white)
    }

    [data-theme=light] [data-bg=dark] .ui-btn-circle .b,
    [data-theme=light][data-page-theme=dark] .ui-btn-circle .b {
        background: var(--col-black)
    }

    html {
        transition: background .6s;
        background-color: var(--col-white)
    }

    html[data-page-theme=dark] {
        background-color: var(--col-black)
    }

    .flip-b,
    .flip-c,
    .flip-f,
    .flip-y,
    .mq,
    .perspective {
        perspective: 25vw
    }

    .flip-b .c,
    .flip-b .o,
    .flip-b .t,
    .flip-c .t,
    .flip-f .o,
    .flip-f .t,
    .mq-anim,
    .mq-li .o,
    .mq-li .t {
        transform-origin: center bottom
    }

    .flip-f .w {
        transform: rotateX(-90deg);
        overflow: hidden
    }

    .flip-f .t {
        transform: translateY(100%)
    }

    .flip-c .w {
        transform: rotateX(-90deg) rotateY(0deg);
        overflow: hidden
    }

    .flip-b .w {
        transform: rotateX(-90deg);
        overflow: hidden
    }

    .flip-b .t,
    .flip-c .t {
        transform: translateY(110%)
    }

    .flip-y .o {
        transform: translateY(110%) rotateX(0deg);
        overflow: hidden;
        margin-bottom: -.35em
    }

    .flip-y .t {
        transform: translateY(110%)
    }

    .mq-anim {
        transform: rotateX(-90deg)
    }

    .mq-li .o {
        transform: rotateX(0deg)
    }

    .mq-li .t {
        transform: translateY(110%)
    }

    .js-clip .o {
        transform: translateY(calc(var(--gw)*0.5)) rotateX(0deg);
        overflow: hidden
    }

    .js-clip .t {
        transform: translateY(calc(var(--gw)*0.5));
        opacity: 0
    }

    .ui-btn-arrow .b,
    .ui-btn-circle .b {
        transform: scale(0)
    }

    .ui-btn-arrow .o,
    .ui-btn-arrow .t,
    .ui-btn-arrow .w,
    .ui-btn-circle .o,
    .ui-btn-circle .w {
        transform: translate(0)
    }

    .ui-link-underline .w {
        transform: translateY(100%)
    }

    .ui-link-underline .u {
        transform: scaleX(0)
    }

    .ui-link-underline .t {
        transform: translate(0)
    }

    .ui-btn-arrow .b,
    .ui-cursor-bg .b {
        transition: transform .5s
    }

    .is-splash .features-h-wrap,
    .is-splash .features-label .t,
    .is-splash .flip-b .o,
    .is-splash .flip-b .t,
    .is-splash .flip-b .w,
    .is-splash .flip-f .o,
    .is-splash .flip-f .t,
    .is-splash .flip-f .w,
    .is-splash .flip-y .o,
    .is-splash .flip-y .t,
    .is-splash .flip-y .w,
    .is-splash .js-clip .o,
    .is-splash .js-clip .t,
    .is-splash .js-clip .w,
    .is-splash .mq-anim,
    .is-splash .mq-li .o,
    .is-splash .mq-li .t,
    .is-splash .mq-li .w,
    .is-splash .ui-btn-circle .b,
    .is-splash .ui-link-underline .u,
    .is-splash .ui-link-underline .w {
        transition-duration: .8s;
        transition-timing-function: cubic-bezier(.32, .94, .6, 1);
        transition-property: opacity, transform
    }

    .is-splash .flip-c .o,
    .is-splash .flip-c .t,
    .is-splash .flip-c .w {
        transition-duration: 1.2s;
        transition-timing-function: cubic-bezier(.26, 1, .48, 1);
        transition-property: opacity, transform
    }

    .is-splash.is-any [data-disable=any] {
        opacity: 0;
        transform: translateY(1em)
    }

    .is-splash.is-any [data-disable=any][data-shown="1"] {
        opacity: 1;
        transform: translate(0);
        transition-duration: .8s;
        transition-timing-function: cubic-bezier(.32, .94, .6, 1);
        transition-property: opacity, transform
    }

    .flip-origin.is-hover .features-h-wrap,
    .flip-origin.is-hover .flip-b .o,
    .flip-origin.is-hover .flip-b .t,
    .flip-origin.is-hover .flip-f .o,
    .flip-origin.is-hover .flip-f .t {
        transition-duration: .6s;
        transition-timing-function: cubic-bezier(.32, .94, .6, 1);
        transition-property: transform
    }

    .slide-plane .slide-plane-parts .t {
        transition: transform .6s cubic-bezier(.32, .94, .6, 1);
        transform: translateY(100%)
    }

    .slide-plane .bg-img {
        overflow: hidden
    }

    .slide-plane .is-img-loaded .img {
        opacity: .8
    }

    .slide-plane .ui-btn-arrow {
        transition: transform .6s cubic-bezier(.32, .94, .6, 1);
        transform: rotate(-15deg) scale(0);
        position: absolute;
        right: 1em;
        bottom: 1em
    }

    .slide-plane.is-hover {
        z-index: 999 !important
    }

    .slide-plane.is-hover .slide-plane-parts .t {
        transition-duration: .8s;
        transition-timing-function: cubic-bezier(.32, .94, .6, 1);
        transition-property: transform;
        transform: translate(0)
    }

    .slide-plane.is-hover .ui-btn-arrow {
        transform: rotate(-15deg) scale(1)
    }

    .slide-plane.is-hover .ui-btn-arrow,
    .slide-plane.is-hover .ui-btn-arrow .b {
        transition-duration: .6s;
        transition-timing-function: cubic-bezier(.32, .94, .6, 1);
        transition-property: transform
    }

    .slide-plane.is-hover .ui-btn-arrow .b {
        transform: scale(1)
    }

    .is-splash .flip-origin[data-shown="1"] .flip-f .o,
    .is-splash .flip-origin[data-shown="1"] .flip-f .w {
        transform: rotateX(0deg)
    }

    .is-splash .flip-origin[data-shown="1"] .flip-f .t {
        transform: translate(0)
    }

    .is-splash .flip-origin[data-shown="1"].is-hover .flip-f .o,
    .is-splash .flip-origin[data-shown="1"].is-hover .flip-f .w {
        transform: rotateX(90deg) translateZ(.75em)
    }

    .is-splash .flip-origin[data-shown="1"].is-hover .flip-f .t {
        transform: translateY(-110%)
    }

    .is-splash .flip-origin[data-shown="1"].is-hover .flip-b .o,
    .is-splash .flip-origin[data-shown="1"].is-hover .flip-b .w {
        transform: rotateX(0deg)
    }

    .is-splash .flip-origin[data-shown="1"].is-hover .flip-b .t {
        transform: translate(0)
    }

    .is-desktop.is-splash .features-h-wrap .features-n,
    .is-desktop.is-splash .features-h-wrap .features-t {
        transition-duration: .8s;
        transition-timing-function: cubic-bezier(.32, .94, .6, 1);
        transition-property: transform
    }

    .is-desktop.is-splash .flip-origin[data-shown="1"]:hover .features-label .t {
        transform: translate(0)
    }

    .is-desktop.is-splash .flip-origin[data-shown="1"]:hover .features-h-wrap .features-n,
    .is-desktop.is-splash .flip-origin[data-shown="1"]:hover .features-h-wrap .features-t {
        transform: translate(calc(var(--gw)*-2))
    }

    .is-desktop.is-splash .flip-origin[data-shown="1"]:hover .features-arrow.ui-btn-arrow .b {
        transform: scale(1)
    }

    .is-splash .footer-title-a[data-shown="1"].flip-c .t,
    .is-splash .page-title[data-shown="1"].flip-c .t,
    .is-splash .section-big-title[data-shown="1"].flip-c .t {
        transform: translate(0)
    }

    .is-splash .footer-title-a[data-shown="1"].flip-c .o,
    .is-splash .footer-title-a[data-shown="1"].flip-c .w,
    .is-splash .page-title[data-shown="1"].flip-c .o,
    .is-splash .page-title[data-shown="1"].flip-c .w,
    .is-splash .section-big-title[data-shown="1"].flip-c .o,
    .is-splash .section-big-title[data-shown="1"].flip-c .w {
        transform: rotateX(0deg)
    }

    .js-split-l .l,
    .js-split-w,
    .slide-plane-title .l {
        transform-origin: center bottom;
        perspective: 20vw
    }

    .is-splash .flip-y[data-shown="1"] .ui-btn-arrow .b,
    .is-splash .flip-y[data-shown="1"] .ui-btn-circle .b,
    .is-splash .mq-ul[data-shown="1"] .mq-li .ui-btn-arrow .b,
    .is-splash .mq-ul[data-shown="1"] .mq-li .ui-btn-circle .b,
    .is-splash .section-editor[data-shown="1"] .ui-btn-arrow .b,
    .is-splash .section-editor[data-shown="1"] .ui-btn-circle .b {
        transform: scale(1)
    }

    .is-splash .flip-y[data-shown="1"] .ui-link-underline .w,
    .is-splash .mq-ul[data-shown="1"] .mq-li .ui-link-underline .w,
    .is-splash .section-editor[data-shown="1"] .ui-link-underline .w {
        transform: translate(0)
    }

    .is-splash .flip-y[data-shown="1"] .ui-link-underline .u,
    .is-splash .mq-ul[data-shown="1"] .mq-li .ui-link-underline .u,
    .is-splash .section-editor[data-shown="1"] .ui-link-underline .u {
        transform: scale(1)
    }

    .is-splash .flip-y[data-shown="1"] .t,
    .is-splash .mq-ul[data-shown="1"] .mq-li .t,
    .is-splash .section-editor[data-shown="1"] .t {
        transform: translate(0)
    }

    .is-splash .flip-y[data-shown="1"] .o,
    .is-splash .flip-y[data-shown="1"] .w,
    .is-splash .mq-ul[data-shown="1"] .mq-li .o,
    .is-splash .mq-ul[data-shown="1"] .mq-li .w,
    .is-splash .mq[data-shown="1"] .mq-anim,
    .is-splash .section-editor[data-shown="1"] .o,
    .is-splash .section-editor[data-shown="1"] .w {
        transform: rotateX(0deg)
    }

    .is-splash .js-clip[data-shown="1"] .ui-btn-arrow .b,
    .is-splash .js-clip[data-shown="1"] .ui-btn-circle .b {
        transform: scale(1)
    }

    .is-splash .js-clip[data-shown="1"] .ui-link-underline .w {
        transform: translate(0)
    }

    .is-splash .js-clip[data-shown="1"] .ui-link-underline .u {
        transform: scale(1)
    }

    .is-splash .js-clip[data-shown="1"] .t {
        transform: translate(0);
        opacity: 1
    }

    .is-splash .js-clip[data-shown="1"] .o,
    .is-splash .js-clip[data-shown="1"] .w {
        transform: rotateX(0deg)
    }

    .is-tr-leaveing .caption,
    .is-tr-leaveing .grid-img,
    .is-tr-leaveing .logo-split-ul,
    .is-tr-leaveing .pickup,
    .is-tr-leaveing .single-body,
    .is-tr-leaveing .slide-scroll-body,
    .is-tr-leaveing .slide-scroll-wrap,
    .is-tr-leaveing [data-bg=dark] {
        transition-delay: 0s;
        transition-duration: .4s;
        transition-timing-function: cubic-bezier(.32, .94, .6, 1);
        opacity: 0 !important
    }

    .is-tr-leaveing .js-delay-n .o[data-d="0"],
    .is-tr-leaveing .js-delay-n .o[data-d="0"] .b,
    .is-tr-leaveing .js-delay-n .o[data-d="0"] .t,
    .is-tr-leaveing .js-delay-n .w[data-d="0"] {
        transition-delay: 0s
    }

    .is-tr-leaveing .js-delay-n .o[data-d="1"],
    .is-tr-leaveing .js-delay-n .o[data-d="1"] .b,
    .is-tr-leaveing .js-delay-n .o[data-d="1"] .t,
    .is-tr-leaveing .js-delay-n .w[data-d="1"] {
        transition-delay: .05s
    }

    .is-tr-leaveing .js-delay-n .o[data-d="2"],
    .is-tr-leaveing .js-delay-n .o[data-d="2"] .b,
    .is-tr-leaveing .js-delay-n .o[data-d="2"] .t,
    .is-tr-leaveing .js-delay-n .w[data-d="2"] {
        transition-delay: .1s
    }

    .is-tr-leaveing .js-delay-n .o[data-d="3"],
    .is-tr-leaveing .js-delay-n .o[data-d="3"] .b,
    .is-tr-leaveing .js-delay-n .o[data-d="3"] .t,
    .is-tr-leaveing .js-delay-n .w[data-d="3"] {
        transition-delay: .15s
    }

    .is-tr-leaveing .js-delay-n .o[data-d="4"],
    .is-tr-leaveing .js-delay-n .o[data-d="4"] .b,
    .is-tr-leaveing .js-delay-n .o[data-d="4"] .t,
    .is-tr-leaveing .js-delay-n .w[data-d="4"] {
        transition-delay: .2s
    }

    .is-tr-leaveing .js-delay-n .o[data-d="5"],
    .is-tr-leaveing .js-delay-n .o[data-d="5"] .b,
    .is-tr-leaveing .js-delay-n .o[data-d="5"] .t,
    .is-tr-leaveing .js-delay-n .w[data-d="5"] {
        transition-delay: .25s
    }

    .is-tr-leaveing .js-delay-n .o[data-d="6"],
    .is-tr-leaveing .js-delay-n .o[data-d="6"] .b,
    .is-tr-leaveing .js-delay-n .o[data-d="6"] .t,
    .is-tr-leaveing .js-delay-n .w[data-d="6"] {
        transition-delay: .3s
    }

    .is-tr-leaveing .js-delay-n .o[data-d="7"],
    .is-tr-leaveing .js-delay-n .o[data-d="7"] .b,
    .is-tr-leaveing .js-delay-n .o[data-d="7"] .t,
    .is-tr-leaveing .js-delay-n .w[data-d="7"] {
        transition-delay: .35s
    }

    .is-tr-leaveing .js-delay-n .o[data-d="8"],
    .is-tr-leaveing .js-delay-n .o[data-d="8"] .b,
    .is-tr-leaveing .js-delay-n .o[data-d="8"] .t,
    .is-tr-leaveing .js-delay-n .w[data-d="8"] {
        transition-delay: .4s
    }

    .is-tr-leaveing .js-delay-n .o[data-d="9"],
    .is-tr-leaveing .js-delay-n .o[data-d="9"] .b,
    .is-tr-leaveing .js-delay-n .o[data-d="9"] .t,
    .is-tr-leaveing .js-delay-n .w[data-d="9"] {
        transition-delay: .45s
    }

    .is-tr-leaveing .js-delay-n .o[data-d="10"],
    .is-tr-leaveing .js-delay-n .o[data-d="10"] .b,
    .is-tr-leaveing .js-delay-n .o[data-d="10"] .t,
    .is-tr-leaveing .js-delay-n .w[data-d="10"] {
        transition-delay: .5s
    }

    .is-tr-leaveing .flip-y .l[data-y="0"] .o,
    .is-tr-leaveing .flip-y .l[data-y="0"] .t,
    .is-tr-leaveing .flip-y .w[data-y="0"] .o,
    .is-tr-leaveing .flip-y .w[data-y="0"] .t,
    .is-tr-leaveing .mq-li .l:nth-child(0) .t {
        transition-delay: 0s
    }

    .is-tr-leaveing .flip-y .l[data-y="1"] .o,
    .is-tr-leaveing .flip-y .l[data-y="1"] .t,
    .is-tr-leaveing .flip-y .w[data-y="1"] .o,
    .is-tr-leaveing .flip-y .w[data-y="1"] .t,
    .is-tr-leaveing .mq-li .l:first-child .t {
        transition-delay: .05s
    }

    .is-tr-leaveing .flip-y .l[data-y="2"] .o,
    .is-tr-leaveing .flip-y .l[data-y="2"] .t,
    .is-tr-leaveing .flip-y .w[data-y="2"] .o,
    .is-tr-leaveing .flip-y .w[data-y="2"] .t,
    .is-tr-leaveing .mq-li .l:nth-child(2) .t {
        transition-delay: .1s
    }

    .is-tr-leaveing .flip-y .l[data-y="3"] .o,
    .is-tr-leaveing .flip-y .l[data-y="3"] .t,
    .is-tr-leaveing .flip-y .w[data-y="3"] .o,
    .is-tr-leaveing .flip-y .w[data-y="3"] .t,
    .is-tr-leaveing .mq-li .l:nth-child(3) .t {
        transition-delay: .15s
    }

    .is-tr-leaveing .flip-y .l[data-y="4"] .o,
    .is-tr-leaveing .flip-y .l[data-y="4"] .t,
    .is-tr-leaveing .flip-y .w[data-y="4"] .o,
    .is-tr-leaveing .flip-y .w[data-y="4"] .t,
    .is-tr-leaveing .mq-li .l:nth-child(4) .t {
        transition-delay: .2s
    }

    .is-tr-leaveing .flip-y .l[data-y="5"] .o,
    .is-tr-leaveing .flip-y .l[data-y="5"] .t,
    .is-tr-leaveing .flip-y .w[data-y="5"] .o,
    .is-tr-leaveing .flip-y .w[data-y="5"] .t,
    .is-tr-leaveing .mq-li .l:nth-child(5) .t {
        transition-delay: .25s
    }

    .is-tr-leaveing .flip-y .l[data-y="6"] .o,
    .is-tr-leaveing .flip-y .l[data-y="6"] .t,
    .is-tr-leaveing .flip-y .w[data-y="6"] .o,
    .is-tr-leaveing .flip-y .w[data-y="6"] .t,
    .is-tr-leaveing .mq-li .l:nth-child(6) .t {
        transition-delay: .3s
    }

    .is-tr-leaveing .flip-y .l[data-y="7"] .o,
    .is-tr-leaveing .flip-y .l[data-y="7"] .t,
    .is-tr-leaveing .flip-y .w[data-y="7"] .o,
    .is-tr-leaveing .flip-y .w[data-y="7"] .t,
    .is-tr-leaveing .mq-li .l:nth-child(7) .t {
        transition-delay: .35s
    }

    .is-tr-leaveing .flip-y .l[data-y="8"] .o,
    .is-tr-leaveing .flip-y .l[data-y="8"] .t,
    .is-tr-leaveing .flip-y .w[data-y="8"] .o,
    .is-tr-leaveing .flip-y .w[data-y="8"] .t,
    .is-tr-leaveing .mq-li .l:nth-child(8) .t {
        transition-delay: .4s
    }

    .is-tr-leaveing .flip-y .l[data-y="9"] .o,
    .is-tr-leaveing .flip-y .l[data-y="9"] .t,
    .is-tr-leaveing .flip-y .w[data-y="9"] .o,
    .is-tr-leaveing .flip-y .w[data-y="9"] .t,
    .is-tr-leaveing .mq-li .l:nth-child(9) .t {
        transition-delay: .45s
    }

    .is-tr-leaveing .flip-y .l[data-y="10"] .o,
    .is-tr-leaveing .flip-y .l[data-y="10"] .t,
    .is-tr-leaveing .flip-y .w[data-y="10"] .o,
    .is-tr-leaveing .flip-y .w[data-y="10"] .t,
    .is-tr-leaveing .mq-li .l:nth-child(10) .t {
        transition-delay: .5s
    }

    .is-tr-leaveing .js-delay-n [data-type=char] .o[data-d="0"],
    .is-tr-leaveing .js-delay-n [data-type=char] .o[data-d="0"] .b,
    .is-tr-leaveing .js-delay-n [data-type=char] .o[data-d="0"] .t {
        transition-delay: 0s
    }

    .is-tr-leaveing .js-delay-n [data-type=char] .o[data-d="1"],
    .is-tr-leaveing .js-delay-n [data-type=char] .o[data-d="1"] .b,
    .is-tr-leaveing .js-delay-n [data-type=char] .o[data-d="1"] .t {
        transition-delay: 25ms
    }

    .is-tr-leaveing .js-delay-n [data-type=char] .o[data-d="2"],
    .is-tr-leaveing .js-delay-n [data-type=char] .o[data-d="2"] .b,
    .is-tr-leaveing .js-delay-n [data-type=char] .o[data-d="2"] .t {
        transition-delay: .05s
    }

    .is-tr-leaveing .js-delay-n [data-type=char] .o[data-d="3"],
    .is-tr-leaveing .js-delay-n [data-type=char] .o[data-d="3"] .b,
    .is-tr-leaveing .js-delay-n [data-type=char] .o[data-d="3"] .t {
        transition-delay: 75ms
    }

    .is-tr-leaveing .js-delay-n [data-type=char] .o[data-d="4"],
    .is-tr-leaveing .js-delay-n [data-type=char] .o[data-d="4"] .b,
    .is-tr-leaveing .js-delay-n [data-type=char] .o[data-d="4"] .t {
        transition-delay: .1s
    }

    .is-tr-leaveing .js-delay-n [data-type=char] .o[data-d="5"],
    .is-tr-leaveing .js-delay-n [data-type=char] .o[data-d="5"] .b,
    .is-tr-leaveing .js-delay-n [data-type=char] .o[data-d="5"] .t {
        transition-delay: .125s
    }

    .is-tr-leaveing .js-delay-n [data-type=char] .o[data-d="6"],
    .is-tr-leaveing .js-delay-n [data-type=char] .o[data-d="6"] .b,
    .is-tr-leaveing .js-delay-n [data-type=char] .o[data-d="6"] .t {
        transition-delay: .15s
    }

    .is-tr-leaveing .js-delay-n [data-type=char] .o[data-d="7"],
    .is-tr-leaveing .js-delay-n [data-type=char] .o[data-d="7"] .b,
    .is-tr-leaveing .js-delay-n [data-type=char] .o[data-d="7"] .t {
        transition-delay: .175s
    }

    .is-tr-leaveing .js-delay-n [data-type=char] .o[data-d="8"],
    .is-tr-leaveing .js-delay-n [data-type=char] .o[data-d="8"] .b,
    .is-tr-leaveing .js-delay-n [data-type=char] .o[data-d="8"] .t {
        transition-delay: .2s
    }

    .is-tr-leaveing .js-delay-n [data-type=char] .o[data-d="9"],
    .is-tr-leaveing .js-delay-n [data-type=char] .o[data-d="9"] .b,
    .is-tr-leaveing .js-delay-n [data-type=char] .o[data-d="9"] .t {
        transition-delay: .225s
    }

    .is-tr-leaveing .js-delay-n [data-type=char] .o[data-d="10"],
    .is-tr-leaveing .js-delay-n [data-type=char] .o[data-d="10"] .b,
    .is-tr-leaveing .js-delay-n [data-type=char] .o[data-d="10"] .t {
        transition-delay: .25s
    }

    .is-tr-leaveing .js-delay-n [data-type=char] .o[data-d="11"],
    .is-tr-leaveing .js-delay-n [data-type=char] .o[data-d="11"] .b,
    .is-tr-leaveing .js-delay-n [data-type=char] .o[data-d="11"] .t {
        transition-delay: .275s
    }

    .is-tr-leaveing .js-delay-n [data-type=char] .o[data-d="12"],
    .is-tr-leaveing .js-delay-n [data-type=char] .o[data-d="12"] .b,
    .is-tr-leaveing .js-delay-n [data-type=char] .o[data-d="12"] .t {
        transition-delay: .3s
    }

    .is-tr-leaveing .js-delay-n [data-type=char] .o[data-d="13"],
    .is-tr-leaveing .js-delay-n [data-type=char] .o[data-d="13"] .b,
    .is-tr-leaveing .js-delay-n [data-type=char] .o[data-d="13"] .t {
        transition-delay: .325s
    }

    .is-tr-leaveing .js-delay-n [data-type=char] .o[data-d="14"],
    .is-tr-leaveing .js-delay-n [data-type=char] .o[data-d="14"] .b,
    .is-tr-leaveing .js-delay-n [data-type=char] .o[data-d="14"] .t {
        transition-delay: .35s
    }

    .is-tr-leaveing .js-delay-n [data-type=char] .o[data-d="15"],
    .is-tr-leaveing .js-delay-n [data-type=char] .o[data-d="15"] .b,
    .is-tr-leaveing .js-delay-n [data-type=char] .o[data-d="15"] .t {
        transition-delay: .375s
    }

    .is-tr-leaveing .js-delay-n [data-type=char] .o[data-d="16"],
    .is-tr-leaveing .js-delay-n [data-type=char] .o[data-d="16"] .b,
    .is-tr-leaveing .js-delay-n [data-type=char] .o[data-d="16"] .t {
        transition-delay: .4s
    }

    .is-tr-leaveing .js-delay-n [data-type=char] .o[data-d="17"],
    .is-tr-leaveing .js-delay-n [data-type=char] .o[data-d="17"] .b,
    .is-tr-leaveing .js-delay-n [data-type=char] .o[data-d="17"] .t {
        transition-delay: .425s
    }

    .is-tr-leaveing .js-delay-n [data-type=char] .o[data-d="18"],
    .is-tr-leaveing .js-delay-n [data-type=char] .o[data-d="18"] .b,
    .is-tr-leaveing .js-delay-n [data-type=char] .o[data-d="18"] .t {
        transition-delay: .45s
    }

    .is-tr-leaveing .js-delay-n [data-type=char] .o[data-d="19"],
    .is-tr-leaveing .js-delay-n [data-type=char] .o[data-d="19"] .b,
    .is-tr-leaveing .js-delay-n [data-type=char] .o[data-d="19"] .t {
        transition-delay: .475s
    }

    .is-tr-leaveing .js-delay-n [data-type=char] .o[data-d="20"],
    .is-tr-leaveing .js-delay-n [data-type=char] .o[data-d="20"] .b,
    .is-tr-leaveing .js-delay-n [data-type=char] .o[data-d="20"] .t {
        transition-delay: .5s
    }

    .is-tr-leaveing .js-delay-n [data-type=char] .o[data-d="21"],
    .is-tr-leaveing .js-delay-n [data-type=char] .o[data-d="21"] .b,
    .is-tr-leaveing .js-delay-n [data-type=char] .o[data-d="21"] .t {
        transition-delay: .525s
    }

    .is-tr-leaveing .js-delay-n [data-type=char] .o[data-d="22"],
    .is-tr-leaveing .js-delay-n [data-type=char] .o[data-d="22"] .b,
    .is-tr-leaveing .js-delay-n [data-type=char] .o[data-d="22"] .t {
        transition-delay: .55s
    }

    .is-tr-leaveing .js-delay-n [data-type=char] .o[data-d="23"],
    .is-tr-leaveing .js-delay-n [data-type=char] .o[data-d="23"] .b,
    .is-tr-leaveing .js-delay-n [data-type=char] .o[data-d="23"] .t {
        transition-delay: .575s
    }

    .is-tr-leaveing .js-delay-n [data-type=char] .o[data-d="24"],
    .is-tr-leaveing .js-delay-n [data-type=char] .o[data-d="24"] .b,
    .is-tr-leaveing .js-delay-n [data-type=char] .o[data-d="24"] .t {
        transition-delay: .6s
    }

    .is-tr-leaveing .js-delay-n [data-type=char] .o[data-d="25"],
    .is-tr-leaveing .js-delay-n [data-type=char] .o[data-d="25"] .b,
    .is-tr-leaveing .js-delay-n [data-type=char] .o[data-d="25"] .t {
        transition-delay: .625s
    }

    .is-tr-leaveing .js-delay-n [data-type=char] .o[data-d="26"],
    .is-tr-leaveing .js-delay-n [data-type=char] .o[data-d="26"] .b,
    .is-tr-leaveing .js-delay-n [data-type=char] .o[data-d="26"] .t {
        transition-delay: .65s
    }

    .is-tr-leaveing .js-delay-n [data-type=char] .o[data-d="27"],
    .is-tr-leaveing .js-delay-n [data-type=char] .o[data-d="27"] .b,
    .is-tr-leaveing .js-delay-n [data-type=char] .o[data-d="27"] .t {
        transition-delay: .675s
    }

    .is-tr-leaveing .js-delay-n [data-type=char] .o[data-d="28"],
    .is-tr-leaveing .js-delay-n [data-type=char] .o[data-d="28"] .b,
    .is-tr-leaveing .js-delay-n [data-type=char] .o[data-d="28"] .t {
        transition-delay: .7s
    }

    .is-tr-leaveing .js-delay-n [data-type=char] .o[data-d="29"],
    .is-tr-leaveing .js-delay-n [data-type=char] .o[data-d="29"] .b,
    .is-tr-leaveing .js-delay-n [data-type=char] .o[data-d="29"] .t {
        transition-delay: .725s
    }

    .is-tr-leaveing .js-delay-n [data-type=char] .o[data-d="30"],
    .is-tr-leaveing .js-delay-n [data-type=char] .o[data-d="30"] .b,
    .is-tr-leaveing .js-delay-n [data-type=char] .o[data-d="30"] .t {
        transition-delay: .75s
    }

    .slide-scroll-wrap {
        transition: opacity .8s cubic-bezier(.32, .94, .6, 1)
    }

    .single-body,
    .site-lang,
    .slide-scroll-body {
        transition: opacity .8s cubic-bezier(.32, .94, .6, 1) .3s;
        opacity: 0
    }

    .site-lang {
        transform: rotate(45deg)
    }

    .site-lang a {
        transform: rotate(-45deg)
    }

    .subpage-title-wrap {
        position: relative;
        z-index: 1
    }

    .slide-plane .img {
        transition: opacity .8s cubic-bezier(.32, .94, .6, 1);
        opacity: 0
    }

    .is-splash .single-body[data-shown="1"],
    .is-splash .site-lang[data-shown="1"],
    .is-splash .slide-scroll-wrap[data-shown="1"],
    .is-splash [data-shown="1"] .slide-scroll-body {
        opacity: 1
    }

    .js-delay-n .o[data-d="0"],
    .js-delay-n .o[data-d="0"] .b,
    .js-delay-n .o[data-d="0"] .t,
    .slide-a .js-delay-n .o[data-d="0"],
    .slide-a .js-delay-n .o[data-d="0"] .b,
    .slide-a .js-delay-n .o[data-d="0"] .t {
        transition-delay: 0s
    }

    .js-delay-n .o[data-d="1"],
    .js-delay-n .o[data-d="1"] .b,
    .js-delay-n .o[data-d="1"] .t {
        transition-delay: .1s
    }

    .slide-a .js-delay-n .o[data-d="1"],
    .slide-a .js-delay-n .o[data-d="1"] .b,
    .slide-a .js-delay-n .o[data-d="1"] .t {
        transition-delay: 25ms
    }

    .js-delay-n .o[data-d="2"],
    .js-delay-n .o[data-d="2"] .b,
    .js-delay-n .o[data-d="2"] .t {
        transition-delay: .2s
    }

    .slide-a .js-delay-n .o[data-d="2"],
    .slide-a .js-delay-n .o[data-d="2"] .b,
    .slide-a .js-delay-n .o[data-d="2"] .t {
        transition-delay: .05s
    }

    .js-delay-n .o[data-d="3"],
    .js-delay-n .o[data-d="3"] .b,
    .js-delay-n .o[data-d="3"] .t {
        transition-delay: .3s
    }

    .slide-a .js-delay-n .o[data-d="3"],
    .slide-a .js-delay-n .o[data-d="3"] .b,
    .slide-a .js-delay-n .o[data-d="3"] .t {
        transition-delay: 75ms
    }

    .js-delay-n .o[data-d="4"],
    .js-delay-n .o[data-d="4"] .b,
    .js-delay-n .o[data-d="4"] .t {
        transition-delay: .4s
    }

    .slide-a .js-delay-n .o[data-d="4"],
    .slide-a .js-delay-n .o[data-d="4"] .b,
    .slide-a .js-delay-n .o[data-d="4"] .t {
        transition-delay: .1s
    }

    .js-delay-n .o[data-d="5"],
    .js-delay-n .o[data-d="5"] .b,
    .js-delay-n .o[data-d="5"] .t {
        transition-delay: .5s
    }

    .slide-a .js-delay-n .o[data-d="5"],
    .slide-a .js-delay-n .o[data-d="5"] .b,
    .slide-a .js-delay-n .o[data-d="5"] .t {
        transition-delay: .125s
    }

    .js-delay-n .o[data-d="6"],
    .js-delay-n .o[data-d="6"] .b,
    .js-delay-n .o[data-d="6"] .t {
        transition-delay: .6s
    }

    .slide-a .js-delay-n .o[data-d="6"],
    .slide-a .js-delay-n .o[data-d="6"] .b,
    .slide-a .js-delay-n .o[data-d="6"] .t {
        transition-delay: .15s
    }

    .js-delay-n .o[data-d="7"],
    .js-delay-n .o[data-d="7"] .b,
    .js-delay-n .o[data-d="7"] .t {
        transition-delay: .7s
    }

    .slide-a .js-delay-n .o[data-d="7"],
    .slide-a .js-delay-n .o[data-d="7"] .b,
    .slide-a .js-delay-n .o[data-d="7"] .t {
        transition-delay: .175s
    }

    .js-delay-n .o[data-d="8"],
    .js-delay-n .o[data-d="8"] .b,
    .js-delay-n .o[data-d="8"] .t {
        transition-delay: .8s
    }

    .slide-a .js-delay-n .o[data-d="8"],
    .slide-a .js-delay-n .o[data-d="8"] .b,
    .slide-a .js-delay-n .o[data-d="8"] .t {
        transition-delay: .2s
    }

    .js-delay-n .o[data-d="9"],
    .js-delay-n .o[data-d="9"] .b,
    .js-delay-n .o[data-d="9"] .t {
        transition-delay: .9s
    }

    .slide-a .js-delay-n .o[data-d="9"],
    .slide-a .js-delay-n .o[data-d="9"] .b,
    .slide-a .js-delay-n .o[data-d="9"] .t {
        transition-delay: .225s
    }

    .js-delay-n .o[data-d="10"],
    .js-delay-n .o[data-d="10"] .b,
    .js-delay-n .o[data-d="10"] .t {
        transition-delay: 1s
    }

    .slide-a .js-delay-n .o[data-d="10"],
    .slide-a .js-delay-n .o[data-d="10"] .b,
    .slide-a .js-delay-n .o[data-d="10"] .t {
        transition-delay: .25s
    }

    .flip-y .l[data-y="0"] .o,
    .flip-y .l[data-y="0"] .t,
    .flip-y .w[data-y="0"] .o,
    .flip-y .w[data-y="0"] .t,
    .js-clip .o[data-d="0"],
    .js-clip .o[data-d="0"] .t {
        transition-delay: 0s
    }

    .flip-y .l[data-y="1"] .o,
    .flip-y .l[data-y="1"] .t,
    .flip-y .w[data-y="1"] .o,
    .flip-y .w[data-y="1"] .t {
        transition-delay: .1s
    }

    .js-clip .o[data-d="1"],
    .js-clip .o[data-d="1"] .t {
        transition-delay: 75ms
    }

    .flip-y .l[data-y="2"] .o,
    .flip-y .l[data-y="2"] .t,
    .flip-y .w[data-y="2"] .o,
    .flip-y .w[data-y="2"] .t {
        transition-delay: .2s
    }

    .js-clip .o[data-d="2"],
    .js-clip .o[data-d="2"] .t {
        transition-delay: .15s
    }

    .flip-y .l[data-y="3"] .o,
    .flip-y .l[data-y="3"] .t,
    .flip-y .w[data-y="3"] .o,
    .flip-y .w[data-y="3"] .t {
        transition-delay: .3s
    }

    .js-clip .o[data-d="3"],
    .js-clip .o[data-d="3"] .t {
        transition-delay: .225s
    }

    .flip-y .l[data-y="4"] .o,
    .flip-y .l[data-y="4"] .t,
    .flip-y .w[data-y="4"] .o,
    .flip-y .w[data-y="4"] .t {
        transition-delay: .4s
    }

    .js-clip .o[data-d="4"],
    .js-clip .o[data-d="4"] .t {
        transition-delay: .3s
    }

    .flip-y .l[data-y="5"] .o,
    .flip-y .l[data-y="5"] .t,
    .flip-y .w[data-y="5"] .o,
    .flip-y .w[data-y="5"] .t {
        transition-delay: .5s
    }

    .js-clip .o[data-d="5"],
    .js-clip .o[data-d="5"] .t {
        transition-delay: .375s
    }

    .flip-y .l[data-y="6"] .o,
    .flip-y .l[data-y="6"] .t,
    .flip-y .w[data-y="6"] .o,
    .flip-y .w[data-y="6"] .t {
        transition-delay: .6s
    }

    .js-clip .o[data-d="6"],
    .js-clip .o[data-d="6"] .t {
        transition-delay: .45s
    }

    .flip-y .l[data-y="7"] .o,
    .flip-y .l[data-y="7"] .t,
    .flip-y .w[data-y="7"] .o,
    .flip-y .w[data-y="7"] .t {
        transition-delay: .7s
    }

    .js-clip .o[data-d="7"],
    .js-clip .o[data-d="7"] .t {
        transition-delay: .525s
    }

    .flip-y .l[data-y="8"] .o,
    .flip-y .l[data-y="8"] .t,
    .flip-y .w[data-y="8"] .o,
    .flip-y .w[data-y="8"] .t {
        transition-delay: .8s
    }

    .js-clip .o[data-d="8"],
    .js-clip .o[data-d="8"] .t {
        transition-delay: .6s
    }

    .flip-y .l[data-y="9"] .o,
    .flip-y .l[data-y="9"] .t,
    .flip-y .w[data-y="9"] .o,
    .flip-y .w[data-y="9"] .t {
        transition-delay: .9s
    }

    .js-clip .o[data-d="9"],
    .js-clip .o[data-d="9"] .t {
        transition-delay: .675s
    }

    .flip-y .l[data-y="10"] .o,
    .flip-y .l[data-y="10"] .t,
    .flip-y .w[data-y="10"] .o,
    .flip-y .w[data-y="10"] .t {
        transition-delay: 1s
    }

    .js-clip .o[data-d="10"],
    .js-clip .o[data-d="10"] .t {
        transition-delay: .75s
    }

    .js-delay-n [data-type=char] .o[data-d="0"],
    .js-delay-n [data-type=char] .o[data-d="0"] .b,
    .js-delay-n [data-type=char] .o[data-d="0"] .t {
        transition-delay: 0s
    }

    .js-delay-n [data-type=char] .o[data-d="1"],
    .js-delay-n [data-type=char] .o[data-d="1"] .b,
    .js-delay-n [data-type=char] .o[data-d="1"] .t {
        transition-delay: 25ms
    }

    .js-delay-n [data-type=char] .o[data-d="2"],
    .js-delay-n [data-type=char] .o[data-d="2"] .b,
    .js-delay-n [data-type=char] .o[data-d="2"] .t {
        transition-delay: .05s
    }

    .js-delay-n [data-type=char] .o[data-d="3"],
    .js-delay-n [data-type=char] .o[data-d="3"] .b,
    .js-delay-n [data-type=char] .o[data-d="3"] .t {
        transition-delay: 75ms
    }

    .js-delay-n [data-type=char] .o[data-d="4"],
    .js-delay-n [data-type=char] .o[data-d="4"] .b,
    .js-delay-n [data-type=char] .o[data-d="4"] .t {
        transition-delay: .1s
    }

    .js-delay-n [data-type=char] .o[data-d="5"],
    .js-delay-n [data-type=char] .o[data-d="5"] .b,
    .js-delay-n [data-type=char] .o[data-d="5"] .t {
        transition-delay: .125s
    }

    .js-delay-n [data-type=char] .o[data-d="6"],
    .js-delay-n [data-type=char] .o[data-d="6"] .b,
    .js-delay-n [data-type=char] .o[data-d="6"] .t {
        transition-delay: .15s
    }

    .js-delay-n [data-type=char] .o[data-d="7"],
    .js-delay-n [data-type=char] .o[data-d="7"] .b,
    .js-delay-n [data-type=char] .o[data-d="7"] .t {
        transition-delay: .175s
    }

    .js-delay-n [data-type=char] .o[data-d="8"],
    .js-delay-n [data-type=char] .o[data-d="8"] .b,
    .js-delay-n [data-type=char] .o[data-d="8"] .t {
        transition-delay: .2s
    }

    .js-delay-n [data-type=char] .o[data-d="9"],
    .js-delay-n [data-type=char] .o[data-d="9"] .b,
    .js-delay-n [data-type=char] .o[data-d="9"] .t {
        transition-delay: .225s
    }

    .js-delay-n [data-type=char] .o[data-d="10"],
    .js-delay-n [data-type=char] .o[data-d="10"] .b,
    .js-delay-n [data-type=char] .o[data-d="10"] .t {
        transition-delay: .25s
    }

    .js-delay-n [data-type=char] .o[data-d="11"],
    .js-delay-n [data-type=char] .o[data-d="11"] .b,
    .js-delay-n [data-type=char] .o[data-d="11"] .t {
        transition-delay: .275s
    }

    .js-delay-n [data-type=char] .o[data-d="12"],
    .js-delay-n [data-type=char] .o[data-d="12"] .b,
    .js-delay-n [data-type=char] .o[data-d="12"] .t {
        transition-delay: .3s
    }

    .js-delay-n [data-type=char] .o[data-d="13"],
    .js-delay-n [data-type=char] .o[data-d="13"] .b,
    .js-delay-n [data-type=char] .o[data-d="13"] .t {
        transition-delay: .325s
    }

    .js-delay-n [data-type=char] .o[data-d="14"],
    .js-delay-n [data-type=char] .o[data-d="14"] .b,
    .js-delay-n [data-type=char] .o[data-d="14"] .t {
        transition-delay: .35s
    }

    .js-delay-n [data-type=char] .o[data-d="15"],
    .js-delay-n [data-type=char] .o[data-d="15"] .b,
    .js-delay-n [data-type=char] .o[data-d="15"] .t {
        transition-delay: .375s
    }

    .js-delay-n [data-type=char] .o[data-d="16"],
    .js-delay-n [data-type=char] .o[data-d="16"] .b,
    .js-delay-n [data-type=char] .o[data-d="16"] .t {
        transition-delay: .4s
    }

    .js-delay-n [data-type=char] .o[data-d="17"],
    .js-delay-n [data-type=char] .o[data-d="17"] .b,
    .js-delay-n [data-type=char] .o[data-d="17"] .t {
        transition-delay: .425s
    }

    .js-delay-n [data-type=char] .o[data-d="18"],
    .js-delay-n [data-type=char] .o[data-d="18"] .b,
    .js-delay-n [data-type=char] .o[data-d="18"] .t {
        transition-delay: .45s
    }

    .js-delay-n [data-type=char] .o[data-d="19"],
    .js-delay-n [data-type=char] .o[data-d="19"] .b,
    .js-delay-n [data-type=char] .o[data-d="19"] .t {
        transition-delay: .475s
    }

    .js-delay-n [data-type=char] .o[data-d="20"],
    .js-delay-n [data-type=char] .o[data-d="20"] .b,
    .js-delay-n [data-type=char] .o[data-d="20"] .t {
        transition-delay: .5s
    }

    .js-delay-n [data-type=char] .o[data-d="21"],
    .js-delay-n [data-type=char] .o[data-d="21"] .b,
    .js-delay-n [data-type=char] .o[data-d="21"] .t {
        transition-delay: .525s
    }

    .js-delay-n [data-type=char] .o[data-d="22"],
    .js-delay-n [data-type=char] .o[data-d="22"] .b,
    .js-delay-n [data-type=char] .o[data-d="22"] .t {
        transition-delay: .55s
    }

    .js-delay-n [data-type=char] .o[data-d="23"],
    .js-delay-n [data-type=char] .o[data-d="23"] .b,
    .js-delay-n [data-type=char] .o[data-d="23"] .t {
        transition-delay: .575s
    }

    .js-delay-n [data-type=char] .o[data-d="24"],
    .js-delay-n [data-type=char] .o[data-d="24"] .b,
    .js-delay-n [data-type=char] .o[data-d="24"] .t {
        transition-delay: .6s
    }

    .js-delay-n [data-type=char] .o[data-d="25"],
    .js-delay-n [data-type=char] .o[data-d="25"] .b,
    .js-delay-n [data-type=char] .o[data-d="25"] .t {
        transition-delay: .625s
    }

    .js-delay-n [data-type=char] .o[data-d="26"],
    .js-delay-n [data-type=char] .o[data-d="26"] .b,
    .js-delay-n [data-type=char] .o[data-d="26"] .t {
        transition-delay: .65s
    }

    .js-delay-n [data-type=char] .o[data-d="27"],
    .js-delay-n [data-type=char] .o[data-d="27"] .b,
    .js-delay-n [data-type=char] .o[data-d="27"] .t {
        transition-delay: .675s
    }

    .js-delay-n [data-type=char] .o[data-d="28"],
    .js-delay-n [data-type=char] .o[data-d="28"] .b,
    .js-delay-n [data-type=char] .o[data-d="28"] .t {
        transition-delay: .7s
    }

    .js-delay-n [data-type=char] .o[data-d="29"],
    .js-delay-n [data-type=char] .o[data-d="29"] .b,
    .js-delay-n [data-type=char] .o[data-d="29"] .t {
        transition-delay: .725s
    }

    .js-delay-n [data-type=char] .o[data-d="30"],
    .js-delay-n [data-type=char] .o[data-d="30"] .b,
    .js-delay-n [data-type=char] .o[data-d="30"] .t {
        transition-delay: .75s
    }

    .pickup-ul {
        transform: translateY(var(--gw))
    }

    .site-navi-ul .u div {
        transform: scaleX(0);
        transform-origin: left
    }

    .site-navi .flip .t {
        overflow: hidden
    }

    .site-name .t,
    .site-navi .flip .t .w {
        overflow: hidden;
        transform: translateY(100%)
    }

    .is-splash .site-navi .site-navi-ul li:nth-child(0) .t .w {
        transition-delay: 0s
    }

    .is-splash .site-navi .site-navi-ul li:first-child .t .w {
        transition-delay: .1s
    }

    .is-splash .site-navi .site-navi-ul li:nth-child(2) .t .w {
        transition-delay: .2s
    }

    .is-splash .site-navi .site-navi-ul li:nth-child(3) .t .w {
        transition-delay: .3s
    }

    .is-splash .site-navi .site-navi-ul li:nth-child(4) .t .w {
        transition-delay: .4s
    }

    .is-splash .site-navi .site-navi-ul li:nth-child(5) .t .w {
        transition-delay: .5s
    }

    .is-splash .site-navi .site-navi-ul li:nth-child(6) .t .w {
        transition-delay: .6s
    }

    .is-splash .site-navi .site-navi-ul li:nth-child(7) .t .w {
        transition-delay: .7s
    }

    .is-splash .site-navi .site-navi-ul li:nth-child(8) .t .w {
        transition-delay: .8s
    }

    .is-splash .site-navi .site-navi-ul li:nth-child(9) .t .w {
        transition-delay: .9s
    }

    .is-splash .site-navi .site-navi-ul li:nth-child(10) .t .w {
        transition-delay: 1s
    }

    .is-splash .fadein,
    .is-splash .site-window {
        opacity: 1;
        visibility: visible
    }

    .is-splash .fadein {
        transition: opacity 1.8s cubic-bezier(.32, .94, .6, 1)
    }

    .is-splash .pickup-ul {
        transition: transform 1.8s cubic-bezier(.32, .94, .6, 1), background 1.8s cubic-bezier(.32, .94, .6, 1);
        transform: translate(0)
    }

    .is-splash .site-navi-ul .u div {
        transition: transform 1s cubic-bezier(.32, .94, .6, 1);
        transform: scaleX(1)
    }

    .is-splash .site-name .t,
    .is-splash .site-navi .flip .t .w {
        transition: transform 1s cubic-bezier(.32, .94, .6, 1);
        transform: translate(0)
    }

    .is-splash.is-mouse-active .ui-cursor-body {
        transition: transform 1s cubic-bezier(.32, .94, .6, 1);
        transform: translate(-50%, -50%) scale(1)
    }

    @media (max-width:1024px) {
        .is-splash-before .pickup-ul {
            background: var(--col-l-gray)
        }

        .is-splash-before .site-window {
            opacity: 1
        }

        .is-splash-before .fadein,
        .is-splash-before .single-body,
        .is-splash-before .slide-scroll-body {
            opacity: 1;
            visibility: visible
        }

        .is-splash-before .page-header .js-clip .ui-btn-arrow .b,
        .is-splash-before .page-header .js-clip .ui-btn-circle .b {
            transform: scale(1)
        }

        .is-splash-before .page-header .js-clip .ui-link-underline .w {
            transform: translate(0)
        }

        .is-splash-before .page-header .js-clip .ui-link-underline .u {
            transform: scale(1)
        }

        .is-splash-before .page-header .js-clip .t {
            transform: translate(0);
            opacity: 1
        }

        .is-splash-before .page-header .js-clip .o {
            transform: rotateX(0deg)
        }

        .is-splash-before .page-header .flip-y .o,
        .is-splash-before .page-header .flip-y .t,
        .is-splash-before .page-header .ui-link-underline .w {
            transform: translate(0)
        }

        .is-splash-before .page-title.flip-c .o,
        .is-splash-before .page-title.flip-c .w {
            transform: rotateX(0deg)
        }

        .is-splash-before .page-footer .section-title-headline .t,
        .is-splash-before .page-footer .sns-ul .t {
            transform: translate(0);
            opacity: 1;
            background: var(--col-black);
            color: var(--col-white)
        }

        .is-splash-before .page-title.flip-c .t,
        .is-splash-before .pickup-ul,
        .is-splash-before .site-name .t,
        .is-splash-before .slide-plane .slide-plane-parts .t {
            transform: translate(0)
        }
    }

    [data-bg=dark] {
        background-color: var(--col-black)
    }

    [data-bg=dark],
    [data-bg=dark] a {
        color: var(--col-white)
    }

    [data-bg=dark] .border .b {
        background: var(--col-white)
    }

    [data-bg=dark] .border .num {
        color: var(--col-white)
    }

    [data-theme=light] [data-bg=dark] {
        color: var(--col-black);
        background-color: var(--col-white)
    }

    [data-theme=light] [data-bg=dark] a {
        color: var(--col-black)
    }

    [data-theme=light] [data-bg=dark] .border .b {
        background: var(--col-black)
    }

    [data-theme=light] [data-bg=dark] .border .num {
        color: var(--col-black)
    }

    [data-theme=light] .lead-box,
    [data-theme=light] .page-title-support {
        opacity: .8
    }

    [data-theme=light] .border,
    [data-theme=light] .border.sub {
        opacity: .3
    }

    [data-theme=light] .ui-btn-link-re .t,
    [data-theme=light] .ui-cursor-text .t {
        color: var(--col-black)
    }

    [data-theme=light] .ui-btn-link-re .o {
        border: 1px solid var(--col-black)
    }

    [data-theme=light] .ui-btn-link-re .o:before {
        background-color: var(--col-white)
    }

    [data-theme=light] .ui-btn-link-re .o:after {
        background-color: var(--col-black)
    }

    [data-theme=light] [data-page-theme=dark] .ui-btn-link .t {
        color: var(--col-black)
    }

    [data-theme=light] [data-page-theme=dark] .ui-btn-link .o {
        border: 1px solid var(--col-black)
    }

    [data-theme=light] [data-page-theme=dark] .ui-btn-link .o:before {
        visibility: hidden;
        background-color: var(--col-white)
    }

    [data-theme=light] [data-page-theme=dark] .ui-btn-link .o:after {
        visibility: hidden;
        background-color: var(--col-black)
    }

    [data-theme=light] .ui-btn-link-re:hover .t,
    [data-theme=light] [data-page-theme=dark] .site-lang:hover .ui-btn-link .t {
        color: var(--col-white)
    }

    [data-theme=light] .ui-btn-link-re:hover .o,
    [data-theme=light] [data-page-theme=dark] .site-lang:hover .ui-btn-link .o {
        border: 1px solid var(--col-black)
    }

    [data-theme=light] .ui-btn-link-re:hover .o:before,
    [data-theme=light] [data-page-theme=dark] .site-lang:hover .ui-btn-link .o:before {
        visibility: visible;
        background: var(--col-black)
    }

    [data-theme=light] .ui-btn-link-re:hover .o:after,
    [data-theme=light] [data-page-theme=dark] .site-lang:hover .ui-btn-link .o:after {
        visibility: visible;
        transform: scaleY(1);
        transform-origin: bottom
    }

    [data-theme=light] .site-navi-ul a {
        color: var(--col-black)
    }

    [data-theme=light] .site-navi-bg div {
        background: var(--col-white)
    }

    [data-theme=light] .site-navi-lang .ui-btn-link.diseble .t {
        color: var(--col-black)
    }

    .is-menu-opened.has-scrollover-navi[data-theme=light] .site-navi-ul .u div {
        background: var(--col-black)
    }

    .is-menu-opened.has-scrollover-navi[data-theme=light] .site-navi,
    .is-menu-opened.has-scrollover-navi[data-theme=light] .site-navi a {
        color: var(--col-black)
    }

    [data-page-theme=dark] .page-origin,
    [data-page-theme=dark] .page-origin a,
    [data-page-theme=dark] .site-name,
    [data-page-theme=dark] .site-navi a {
        color: var(--col-white)
    }

    [data-theme=light][data-page-theme=dark] {
        background-color: var(--col-white)
    }

    [data-theme=light][data-page-theme=dark] .page-origin,
    [data-theme=light][data-page-theme=dark] .page-origin a,
    [data-theme=light][data-page-theme=dark] .site-name,
    [data-theme=light][data-page-theme=dark] .site-navi a {
        color: var(--col-black)
    }

    [data-theme=light][data-page-theme=dark] .slide-scroll-map-li>div,
    [data-theme=light][data-page-theme=dark] .slide-scroll-thumb .pivot {
        border: 1px solid var(--col-black)
    }

    [data-theme=light][data-page-theme=dark] .slide-scroll-map-li>div>div {
        background-color: var(--col-black)
    }

    [data-bg=dark] .ui-btn-arrow,
    [data-page-theme=dark] .ui-btn-arrow,
    [data-scheme=dark] .ui-btn-arrow {
        color: var(--col-black)
    }

    [data-bg=dark] .site-navi-ul .u div,
    [data-bg=dark] .ui-btn-arrow .b,
    [data-bg=dark] .ui-link-underline .u,
    [data-page-theme=dark] .site-navi-ul .u div,
    [data-page-theme=dark] .ui-btn-arrow .b,
    [data-page-theme=dark] .ui-link-underline .u,
    [data-scheme=dark] .site-navi-ul .u div,
    [data-scheme=dark] .ui-btn-arrow .b,
    [data-scheme=dark] .ui-link-underline .u {
        background: var(--col-white)
    }

    [data-bg=dark] .ui-btn-circle .txt,
    [data-page-theme=dark] .ui-btn-circle .txt,
    [data-scheme=dark] .ui-btn-circle .txt {
        color: var(--col-black)
    }

    [data-bg=dark] .ui-btn-circle.ui-link-underline .u,
    [data-page-theme=dark] .ui-btn-circle.ui-link-underline .u,
    [data-scheme=dark] .ui-btn-circle.ui-link-underline .u {
        background: var(--col-black)
    }

    [data-bg=dark] .ui-btn-circle .b,
    [data-page-theme=dark] .ui-btn-circle .b,
    [data-scheme=dark] .ui-btn-circle .b {
        background: var(--col-white)
    }

    [data-theme=light] [data-bg=dark] .ui-btn-arrow,
    [data-theme=light][data-page-theme=dark] .ui-btn-arrow {
        color: var(--col-white)
    }

    [data-theme=light] [data-bg=dark] .site-navi-ul .u div,
    [data-theme=light] [data-bg=dark] .ui-btn-arrow .b,
    [data-theme=light] [data-bg=dark] .ui-link-underline .u,
    [data-theme=light][data-page-theme=dark] .site-navi-ul .u div,
    [data-theme=light][data-page-theme=dark] .ui-btn-arrow .b,
    [data-theme=light][data-page-theme=dark] .ui-link-underline .u {
        background: var(--col-black)
    }

    [data-theme=light] [data-bg=dark] .ui-btn-circle .txt,
    [data-theme=light][data-page-theme=dark] .ui-btn-circle .txt {
        color: var(--col-white)
    }

    [data-theme=light] [data-bg=dark] .ui-btn-circle.ui-link-underline .u,
    [data-theme=light][data-page-theme=dark] .ui-btn-circle.ui-link-underline .u {
        background: var(--col-white)
    }

    [data-theme=light] [data-bg=dark] .ui-btn-circle .b,
    [data-theme=light][data-page-theme=dark] .ui-btn-circle .b {
        background: var(--col-black)
    }

    .ui-btn-link .o {
        will-change: transform;
        position: relative;
        overflow: hidden
    }

    [lang=en] .site-navi .ui-lang-a[data-to=en] .ui-btn-link .t {
        color: var(--col-white);
        padding-left: 0
    }

    [lang=en] .site-navi .ui-lang-a[data-to=en] .ui-btn-link .o {
        border: 1px solid transparent
    }

    [lang=en] .site-navi .ui-lang-a[data-to=en] .ui-btn-link .o:before {
        opacity: 0
    }

    [lang=en] .site-navi .ui-lang-a[data-to=en] .ui-btn-link,
    [lang=en] .ui-btn-link[data-to=en] .o,
    [lang=en] .ui-lang-a[data-to=en] .o {
        border: 1px solid transparent
    }

    [lang=en] .ui-btn-link[data-to=en],
    [lang=en] .ui-lang-a[data-to=en] {
        pointer-events: none
    }

    [lang=ja] .site-navi .ui-lang-a[data-to=ja] .ui-btn-link .t {
        color: var(--col-white)
    }

    [lang=ja] .site-navi .ui-lang-a[data-to=ja] .ui-btn-link .o {
        border: 1px solid transparent
    }

    [lang=ja] .site-navi .ui-lang-a[data-to=ja] .ui-btn-link .o:before {
        opacity: 0
    }

    [lang=ja] .site-navi .ui-lang-a[data-to=ja] .ui-btn-link .o,
    [lang=ja] .ui-btn-link[data-to=ja] .o,
    [lang=ja] .ui-lang-a[data-to=ja] .o {
        border: 1px solid transparent
    }

    [lang=ja] .ui-btn-link[data-to=ja],
    [lang=ja] .ui-lang-a[data-to=ja] {
        pointer-events: none
    }

    .ui-btn-link {
        border-radius: 1em;
        overflow: hidden
    }

    .ui-btn-link .o {
        border-radius: 1em;
        overflow: visible;
        border: 1px solid var(--col-black);
        transition: border .3s
    }

    .ui-btn-link .o:after,
    .ui-btn-link .o:before {
        content: "";
        display: block;
        width: 100%;
        height: 100%;
        position: absolute;
        top: 0;
        left: 0;
        border-radius: 1em;
        transition: transform .3s, background .3s
    }

    .ui-btn-link {
        min-width: 38px;
        min-height: 20px;
        text-align: center
    }

    .ui-btn-link .o,
    .ui-btn-link .t {
        line-height: auto;
        height: auto;
        min-width: 38px;
        min-height: 20px
    }

    .ui-btn-link .t {
        z-index: 2;
        position: relative;
        transition: transform .8s cubic-bezier(.32, .94, .6, 1), color .3s;
        padding: 0 .5em;
        display: flex;
        justify-content: center;
        align-items: center
    }

    .site-navi-head .ui-btn-link {
        min-width: 58px;
        min-height: 20px;
        text-align: center
    }

    .site-navi-head .ui-btn-link .o {
        min-height: 20px
    }

    @media (min-width:1680px) {

        .ui-btn-link,
        .ui-btn-link .o,
        .ui-btn-link .t {
            min-width: 50px;
            min-height: 27px
        }

        .site-navi-head .ui-btn-link {
            min-width: 84px;
            min-height: 27px
        }

        .site-navi-head .ui-btn-link .o {
            min-height: 27px
        }
    }

    .ui-btn-link .o:before {
        z-index: 0
    }

    .ui-btn-link .o:after {
        z-index: 1;
        transform: scaleY(0);
        transform-origin: top
    }

    .ui-btn-link .o:before {
        background-color: var(--col-white)
    }

    .ui-btn-link .o:after {
        background-color: var(--col-black)
    }

    html[data-theme=dark] .ui-btn-theme .t[data-to=light],
    html[data-theme=light] .ui-btn-theme .t[data-to=dark] {
        display: none
    }

    .site-navi-head .ui-btn-link .t {
        color: var(--col-white)
    }

    .site-navi-head .ui-btn-link .o:before {
        visibility: visible;
        background-color: var(--col-black)
    }

    .site-navi-head .ui-btn-link .o:after {
        visibility: visible;
        background-color: var(--col-white)
    }

    [data-page-theme=dark] .ui-btn-link .t {
        color: var(--col-white)
    }

    [data-page-theme=dark] .ui-btn-link .o {
        border: 1px solid var(--col-white)
    }

    [data-page-theme=dark] .ui-btn-link .o:before {
        background-color: var(--col-black)
    }

    [data-page-theme=dark] .ui-btn-link .o:after {
        background-color: var(--col-white)
    }

    .ui-btn-link-re .t {
        color: var(--col-white)
    }

    .ui-btn-link-re .o {
        border: 1px solid var(--col-white)
    }

    .ui-btn-link-re .o:before {
        background-color: var(--col-black)
    }

    .ui-btn-link-re .o:after {
        background-color: var(--col-white)
    }

    .is-menu-opened.has-scrollover-navi .site-navi-head .ui-btn-link .t {
        color: var(--col-black)
    }

    .is-menu-opened.has-scrollover-navi .site-navi-head .ui-btn-link .o {
        border: 1px solid var(--col-black)
    }

    .is-menu-opened.has-scrollover-navi .site-navi-head .ui-btn-link .o:before {
        background: var(--col-black)
    }

    .is-menu-opened.has-scrollover-navi .site-navi-head .ui-btn-link .o:after {
        transform: scaleY(1);
        transform-origin: bottom
    }

    .is-desktop .site-lang:hover .ui-btn-link .o:after,
    .is-desktop .site-lang:hover .ui-btn-link .o:before,
    .is-desktop .team-li.toggle:hover .ui-btn-link .o:after,
    .is-desktop .team-li.toggle:hover .ui-btn-link .o:before,
    .is-desktop .ui-btn-link:hover .o:after,
    .is-desktop .ui-btn-link:hover .o:before,
    .is-desktop .ui-lang-a:hover .ui-btn-link .o:after,
    .is-desktop .ui-lang-a:hover .ui-btn-link .o:before {
        visibility: visible
    }

    .is-desktop .site-lang:hover .ui-btn-link .t,
    .is-desktop .team-li.toggle:hover .ui-btn-link .t,
    .is-desktop .ui-lang-a:hover .ui-btn-link .t {
        color: var(--col-white)
    }

    .is-desktop .site-lang:hover .ui-btn-link .o,
    .is-desktop .team-li.toggle:hover .ui-btn-link .o,
    .is-desktop .ui-lang-a:hover .ui-btn-link .o {
        border: 1px solid var(--col-black)
    }

    .is-desktop .site-lang:hover .ui-btn-link .o:before,
    .is-desktop .team-li.toggle:hover .ui-btn-link .o:before,
    .is-desktop .ui-lang-a:hover .ui-btn-link .o:before {
        background: var(--col-black)
    }

    .is-desktop .site-lang:hover .ui-btn-link .o:after,
    .is-desktop .team-li.toggle:hover .ui-btn-link .o:after,
    .is-desktop .ui-lang-a:hover .ui-btn-link .o:after {
        transform: scaleY(1);
        transform-origin: bottom
    }

    .is-desktop .ui-btn-link-re:hover .t,
    .is-desktop .ui-lang-a:hover .ui-btn-link-re .t,
    .is-desktop [data-page-theme=dark] .site-lang:hover .ui-btn-link .t {
        color: var(--col-black)
    }

    .is-desktop .ui-btn-link-re:hover .o,
    .is-desktop .ui-lang-a:hover .ui-btn-link-re .o,
    .is-desktop [data-page-theme=dark] .site-lang:hover .ui-btn-link .o {
        border: 1px solid var(--col-white)
    }

    .is-desktop .ui-btn-link-re:hover .o:before,
    .is-desktop .ui-lang-a:hover .ui-btn-link-re .o:before,
    .is-desktop [data-page-theme=dark] .site-lang:hover .ui-btn-link .o:before {
        visibility: visible;
        background: var(--col-white)
    }

    .is-desktop .ui-btn-link-re:hover .o:after,
    .is-desktop .ui-lang-a:hover .ui-btn-link-re .o:after,
    .is-desktop [data-page-theme=dark] .site-lang:hover .ui-btn-link .o:after {
        visibility: visible;
        transform: scaleY(1);
        transform-origin: bottom
    }

    .ui-btn-toggle {
        width: var(--gw);
        height: var(--gw);
        display: flex;
        justify-content: center;
        align-items: center;
        transition: all .6s;
        min-width: 3.75em
    }

    .ui-btn-toggle .ui-btn-link .t {
        width: 100%;
        height: 100%
    }

    .ui-btn-toggle .ui-btn-link .t-close {
        position: absolute;
        top: 0;
        left: 0;
        transform: translateY(100%)
    }

    .ui-btn-toggle .ui-btn-link .o {
        width: 100%
    }

    .is-toggle-opened .ui-btn-toggle .ui-btn-link .t-open {
        transform: translateY(-100%)
    }

    .is-toggle-opened .ui-btn-toggle .ui-btn-link .t-close {
        transform: translate(0)
    }

    .ui-btn[target=_blank] .ui-btn-arrow {
        transform: rotate(-45deg)
    }

    .ui-btn.ui-btn-backto-top .ui-btn-arrow {
        transform: rotate(-90deg)
    }

    .ui-btn-backto-top * {
        pointer-events: none
    }

    .ui-btn-arrow {
        position: relative;
        border-radius: 100%;
        width: var(--gw);
        height: var(--gw);
        color: var(--col-white);
        overflow: hidden
    }

    .ui-btn-arrow .b {
        position: absolute;
        top: 0;
        left: 0;
        background: var(--col-black);
        width: 100%;
        height: 100%;
        border-radius: 100%
    }

    .ui-btn-arrow .o {
        width: var(--gw);
        height: var(--gw);
        z-index: 2;
        position: relative;
        display: flex;
        justify-content: center;
        align-items: center
    }

    .ui-btn-arrow .i {
        line-height: 1.2;
        position: relative;
        z-index: 2
    }

    .ui-btn-arrow * {
        pointer-events: none
    }

    .research-a:hover .ui-btn-arrow .b,
    .ui-btn:hover .ui-btn-arrow .b {
        transform: scale(.6)
    }

    .ui-btn-circle-wrap {
        display: flex;
        justify-content: center;
        align-items: center
    }

    .ui-btn-circle-pivot {
        cursor: pointer
    }

    .ui-btn-circle {
        width: calc(var(--gw)*2);
        height: calc(var(--gw)*2);
        display: block;
        border-radius: 100%;
        font-weight: 100;
        text-transform: uppercase
    }

    .ui-btn-circle * {
        pointer-events: none
    }

    .ui-btn-circle-origin {
        width: 100%;
        height: 100%;
        position: relative;
        display: flex;
        justify-content: center;
        align-items: center
    }

    .ui-btn-circle .txt {
        transition: color .6s cubic-bezier(.32, .94, .6, 1);
        position: relative;
        z-index: 2;
        color: var(--col-white)
    }

    .ui-btn-circle.ui-link-underline .u {
        background: var(--col-white)
    }

    .ui-btn-circle .b,
    .ui-btn-circle .f {
        border-radius: 100%;
        width: 100%;
        height: 100%;
        position: absolute;
        top: 0;
        left: 0
    }

    .ui-btn-circle .f {
        z-index: 1;
        transform: scale(0);
        background: var(--col-orange)
    }

    .ui-btn-circle .b,
    .ui-btn-circle .f {
        transition: transform .4s cubic-bezier(.32, .94, .6, 1)
    }

    .ui-btn-circle .b {
        z-index: 0;
        background: var(--col-black)
    }

    .site-navi-ul .o,
    .ui-link-underline .o {
        position: relative
    }

    .site-navi-ul .u,
    .ui-link-underline .u {
        transform: scaleX(0);
        transform-origin: right;
        transition: background .3s, transform .3s cubic-bezier(.32, .94, .6, 1);
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100%;
        height: 1px
    }

    .site-navi-ul .u div,
    .ui-link-underline .u {
        background: var(--col-black)
    }

    .site-navi-ul .u div {
        width: 100%;
        height: 100%
    }

    .site-navi-ul .u {
        left: 1px;
        width: calc(100% - 1px)
    }

    .ui-link-underline .u {
        transform: scaleX(0);
        transform-origin: left
    }

    .ui-link-underline.re .u {
        transform: scaleX(0) !important;
        transform-origin: right
    }

    .is-desktop .site-navi-ul a:hover .u {
        transform: scaleX(1);
        transform-origin: left
    }

    .is-desktop .ui-btn-circle-pivot:hover .ui-link-underline .u,
    .is-desktop .ui-link-underline:hover .u {
        transform: scaleX(0) !important;
        transform-origin: right
    }

    .is-desktop .ui-btn-circle-pivot:hover .ui-link-underline.re .u,
    .is-desktop .ui-link-underline.re:hover .u {
        transform: scaleX(1) !important;
        transform-origin: left
    }

    .ui-link {
        height: calc(var(--gw)*2);
        justify-content: center;
        text-transform: uppercase;
        font-weight: 100
    }

    .ui-btn,
    .ui-link {
        display: flex;
        align-items: center
    }

    .ui-btn-r {
        display: flex;
        justify-content: flex-end
    }

    .ui-btn-txt {
        min-width: 6em;
        font-weight: 100;
        padding-right: 1.5em
    }

    .ui-link-table {
        display: flex;
        align-items: center;
        text-transform: uppercase
    }

    .ui-link-table .th {
        padding-right: .75em
    }

    .ui-link-table .td {
        font-weight: 100
    }

    .ui-cursor {
        position: fixed;
        width: calc(var(--gw));
        height: calc(var(--gw));
        border-radius: 100%;
        top: 0;
        left: 0;
        will-change: transform;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none
    }

    .ui-cursor,
    .ui-cursor * {
        pointer-events: none
    }

    .ui-cursor-body {
        transform: translate(-50%, -50%) scale(0);
        width: 100%;
        height: 100%;
        position: relative
    }

    .ui-cursor-text * {
        z-index: 0
    }

    .ui-cursor-text {
        text-transform: uppercase;
        position: absolute;
        width: 100%;
        height: 100%;
        z-index: 2;
        text-align: center
    }

    .ui-cursor-text .o {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%)
    }

    .ui-cursor-text .t {
        color: var(--col-white);
        transition: transform .5s;
        transform: translateY(100%);
        line-height: 1
    }

    .ui-cursor-bg {
        top: 0;
        left: 0;
        position: absolute
    }

    .ui-cursor-bg,
    .ui-cursor-bg .b {
        border-radius: 100%;
        width: 100%;
        height: 100%
    }

    .ui-cursor-bg .b {
        background: var(--col-orange)
    }

    .ui-cursor-bg .b,
    .ui-cursor svg {
        transform: scale(.5)
    }

    .ui-cursor path {
        fill: #fe4249
    }

    [data-cursor-type=drag] .ui-cursor-bg .b {
        transform: scale(2)
    }

    [data-cursor-type=drag] .ui-cursor-text[data-c=drag] .o:first-child .t {
        transform: translate(0)
    }

    [data-cursor-type=click] .ui-cursor-bg .b {
        transform: scale(2)
    }

    [data-cursor-type=click] .ui-cursor-text[data-c=click] .o:first-child .t {
        transform: translate(0)
    }

    [data-cursor-type=explore] .ui-cursor-bg .b {
        transform: scale(2)
    }

    [data-cursor-type=explore] .ui-cursor-text[data-c=explore] .o:first-child .t {
        transform: translate(0)
    }

    [data-cursor-type=next] .ui-cursor-bg .b {
        transform: scale(2)
    }

    [data-cursor-type=next] .ui-cursor-text[data-c=next] .o:first-child .t {
        transform: translate(0)
    }

    [data-cursor-type=copy] .ui-cursor-bg .b {
        transform: scale(2)
    }

    [data-cursor-type=copy] .ui-cursor-text[data-c=copy] .o:first-child .t {
        transform: translate(0)
    }

    .is-dragging[data-cursor-type=drag] .ui-cursor-bg .b {
        transform: scale(1)
    }

    [data-cursor-type=a] .ui-cursor-bg .b,
    [data-cursor-type=btn] .ui-cursor-bg .b,
    [data-cursor-type=circle] .ui-cursor-bg .b,
    [data-cursor-type=link] .ui-cursor-bg .b,
    [data-cursor-type=menu] .ui-cursor-bg .b,
    [data-cursor-type=team] .ui-cursor-bg .b,
    [data-cursor-type=thumb] .ui-cursor-bg .b {
        transform: scale(.1)
    }

    [data-cursor-type=content] .ui-cursor {
        z-index: 0
    }

    [data-cursor-type=contact] .ui-cursor-bg .b,
    [data-cursor-type=content] .ui-cursor-bg .b,
    [data-cursor-type=projects] .ui-cursor-bg .b,
    [data-cursor-type=research] .ui-cursor-bg .b {
        transform: scale(.1)
    }

    [data-bg=dark] {
        background-color: var(--col-black)
    }

    [data-bg=dark],
    [data-bg=dark] a {
        color: var(--col-white)
    }

    [data-bg=dark] .border .b {
        background: var(--col-white)
    }

    [data-bg=dark] .border .num {
        color: var(--col-white)
    }

    [data-theme=light] [data-bg=dark] {
        color: var(--col-black);
        background-color: var(--col-white)
    }

    [data-theme=light] [data-bg=dark] a {
        color: var(--col-black)
    }

    [data-theme=light] [data-bg=dark] .border .b {
        background: var(--col-black)
    }

    [data-theme=light] [data-bg=dark] .border .num {
        color: var(--col-black)
    }

    [data-theme=light] .lead-box,
    [data-theme=light] .page-title-support {
        opacity: .8
    }

    [data-theme=light] .border,
    [data-theme=light] .border.sub {
        opacity: .3
    }

    [data-theme=light] .ui-btn-link-re .t,
    [data-theme=light] .ui-cursor-text .t {
        color: var(--col-black)
    }

    [data-theme=light] .ui-btn-link-re .o {
        border: 1px solid var(--col-black)
    }

    [data-theme=light] .ui-btn-link-re .o:before {
        background-color: var(--col-white)
    }

    [data-theme=light] .ui-btn-link-re .o:after {
        background-color: var(--col-black)
    }

    [data-theme=light] [data-page-theme=dark] .ui-btn-link .t {
        color: var(--col-black)
    }

    [data-theme=light] [data-page-theme=dark] .ui-btn-link .o {
        border: 1px solid var(--col-black)
    }

    [data-theme=light] [data-page-theme=dark] .ui-btn-link .o:before {
        visibility: hidden;
        background-color: var(--col-white)
    }

    [data-theme=light] [data-page-theme=dark] .ui-btn-link .o:after {
        visibility: hidden;
        background-color: var(--col-black)
    }

    [data-theme=light] .ui-btn-link-re:hover .t,
    [data-theme=light] [data-page-theme=dark] .site-lang:hover .ui-btn-link .t {
        color: var(--col-white)
    }

    [data-theme=light] .ui-btn-link-re:hover .o,
    [data-theme=light] [data-page-theme=dark] .site-lang:hover .ui-btn-link .o {
        border: 1px solid var(--col-black)
    }

    [data-theme=light] .ui-btn-link-re:hover .o:before,
    [data-theme=light] [data-page-theme=dark] .site-lang:hover .ui-btn-link .o:before {
        visibility: visible;
        background: var(--col-black)
    }

    [data-theme=light] .ui-btn-link-re:hover .o:after,
    [data-theme=light] [data-page-theme=dark] .site-lang:hover .ui-btn-link .o:after {
        visibility: visible;
        transform: scaleY(1);
        transform-origin: bottom
    }

    [data-theme=light] .site-navi-ul a {
        color: var(--col-black)
    }

    [data-theme=light] .site-navi-bg div {
        background: var(--col-white)
    }

    [data-theme=light] .site-navi-lang .ui-btn-link.diseble .t {
        color: var(--col-black)
    }

    .is-menu-opened.has-scrollover-navi[data-theme=light] .site-navi-ul .u div {
        background: var(--col-black)
    }

    .is-menu-opened.has-scrollover-navi[data-theme=light] .site-navi,
    .is-menu-opened.has-scrollover-navi[data-theme=light] .site-navi a {
        color: var(--col-black)
    }

    [data-page-theme=dark] .page-origin,
    [data-page-theme=dark] .page-origin a,
    [data-page-theme=dark] .site-name,
    [data-page-theme=dark] .site-navi a {
        color: var(--col-white)
    }

    [data-theme=light][data-page-theme=dark] {
        background-color: var(--col-white)
    }

    [data-theme=light][data-page-theme=dark] .page-origin,
    [data-theme=light][data-page-theme=dark] .page-origin a,
    [data-theme=light][data-page-theme=dark] .site-name,
    [data-theme=light][data-page-theme=dark] .site-navi a {
        color: var(--col-black)
    }

    [data-theme=light][data-page-theme=dark] .slide-scroll-map-li>div,
    [data-theme=light][data-page-theme=dark] .slide-scroll-thumb .pivot {
        border: 1px solid var(--col-black)
    }

    [data-theme=light][data-page-theme=dark] .slide-scroll-map-li>div>div {
        background-color: var(--col-black)
    }

    [data-bg=dark] .ui-btn-arrow,
    [data-page-theme=dark] .ui-btn-arrow,
    [data-scheme=dark] .ui-btn-arrow {
        color: var(--col-black)
    }

    [data-bg=dark] .site-navi-ul .u div,
    [data-bg=dark] .ui-btn-arrow .b,
    [data-bg=dark] .ui-link-underline .u,
    [data-page-theme=dark] .site-navi-ul .u div,
    [data-page-theme=dark] .ui-btn-arrow .b,
    [data-page-theme=dark] .ui-link-underline .u,
    [data-scheme=dark] .site-navi-ul .u div,
    [data-scheme=dark] .ui-btn-arrow .b,
    [data-scheme=dark] .ui-link-underline .u {
        background: var(--col-white)
    }

    [data-bg=dark] .ui-btn-circle .txt,
    [data-page-theme=dark] .ui-btn-circle .txt,
    [data-scheme=dark] .ui-btn-circle .txt {
        color: var(--col-black)
    }

    [data-bg=dark] .ui-btn-circle.ui-link-underline .u,
    [data-page-theme=dark] .ui-btn-circle.ui-link-underline .u,
    [data-scheme=dark] .ui-btn-circle.ui-link-underline .u {
        background: var(--col-black)
    }

    [data-bg=dark] .ui-btn-circle .b,
    [data-page-theme=dark] .ui-btn-circle .b,
    [data-scheme=dark] .ui-btn-circle .b {
        background: var(--col-white)
    }

    [data-theme=light] [data-bg=dark] .ui-btn-arrow,
    [data-theme=light][data-page-theme=dark] .ui-btn-arrow {
        color: var(--col-white)
    }

    [data-theme=light] [data-bg=dark] .site-navi-ul .u div,
    [data-theme=light] [data-bg=dark] .ui-btn-arrow .b,
    [data-theme=light] [data-bg=dark] .ui-link-underline .u,
    [data-theme=light][data-page-theme=dark] .site-navi-ul .u div,
    [data-theme=light][data-page-theme=dark] .ui-btn-arrow .b,
    [data-theme=light][data-page-theme=dark] .ui-link-underline .u {
        background: var(--col-black)
    }

    [data-theme=light] [data-bg=dark] .ui-btn-circle .txt,
    [data-theme=light][data-page-theme=dark] .ui-btn-circle .txt {
        color: var(--col-white)
    }

    [data-theme=light] [data-bg=dark] .ui-btn-circle.ui-link-underline .u,
    [data-theme=light][data-page-theme=dark] .ui-btn-circle.ui-link-underline .u {
        background: var(--col-white)
    }

    [data-theme=light] [data-bg=dark] .ui-btn-circle .b,
    [data-theme=light][data-page-theme=dark] .ui-btn-circle .b {
        background: var(--col-black)
    }

    .css-drag:after {
        content: "DRAG";
        display: block
    }

    .is-any.is-ready {
        overflow: visible;
        overflow-x: hidden
    }

    .is-any {
        width: 100vw
    }

    .is-any .css-drag:after {
        content: "SWIPE";
        display: block
    }

    .is-any .slide-plane-title {
        text-indent: -9999px
    }

    .is-any .hide-any,
    .is-any .ui-cursor {
        display: none
    }

    .is-any .site-window,
    .is-any body {
        width: 100vw;
        overflow-x: hidden
    }

    .is-any body {
        height: 100%
    }

    .is-any .js-mh {
        min-height: 0 !important
    }

    .is-any .site-name,
    .is-any .site-navi {
        position: fixed
    }

    .is-any .slide-plane .slide-plane-parts .t {
        transform: translate(0)
    }

    .is-any .slide-plane-parts .t {
        align-items: baseline
    }

    .is-any .slide-plane.even {
        margin-bottom: 0
    }

    .is-any .slide-plane.odd {
        margin-top: 0
    }

    .is-any .site-name,
    .is-any .site-navi {
        transition-duration: .4s
    }

    .is-any .section-gallery .section-big-title {
        position: absolute;
        top: 0;
        text-indent: -9999px
    }

    .is-any .drag-slide-hidden {
        position: relative;
        width: 100%;
        height: 100%;
        overflow: hidden
    }

    .is-any .drag-slide-wrap {
        position: relative;
        top: 0;
        overflow: scroll;
        display: flex;
        align-items: center;
        width: 100%;
        height: 100%;
        padding-bottom: 20px;
        transform: translateY(20px);
        -webkit-overflow-scrolling: touch
    }

    .is-any .drag-slide-body {
        margin-top: -20px;
        flex-wrap: nowrap;
        width: auto
    }

    .is-any [data-section-type=img-slider] .drag-slide-hidden {
        margin-top: -20px
    }

    .is-any [data-section-type=img-slider] .drag-slide-wrap {
        transform: translateY(20px)
    }

    .is-any [data-section-type=img-slider] .drag-slide-body {
        margin-top: 0
    }

    [data-page-name=archive-project] {
        overflow: hidden !important
    }

    [data-page-name=archive-project] .site-window,
    [data-page-name=archive-project] body {
        overflow: hidden
    }

    @media (max-width:1024px) {
        .spr[data-tab="0"] {
            height: calc(var(--gw)*0)
        }

        .spr[data-tab=".5"] {
            height: calc(var(--gw)*0.5)
        }

        .spr[data-tab="1"] {
            height: calc(var(--gw)*1)
        }

        .spr[data-tab="1.5"] {
            height: calc(var(--gw)*1.5)
        }

        .spr[data-tab="2"] {
            height: calc(var(--gw)*2)
        }

        .spr[data-tab="2.5"] {
            height: calc(var(--gw)*2.5)
        }

        .spr[data-tab="3"] {
            height: calc(var(--gw)*3)
        }

        .spr[data-tab="3.5"] {
            height: calc(var(--gw)*3.5)
        }

        .spr[data-tab="4"] {
            height: calc(var(--gw)*4)
        }

        .spr[data-tab="4.5"] {
            height: calc(var(--gw)*4.5)
        }

        .spr[data-tab="5"] {
            height: calc(var(--gw)*5)
        }

        .spr[data-tab="5.5"] {
            height: calc(var(--gw)*5.5)
        }

        .spr[data-tab="6"] {
            height: calc(var(--gw)*6)
        }

        .spr[data-tab="6.5"] {
            height: calc(var(--gw)*6.5)
        }

        .spr[data-tab="7"] {
            height: calc(var(--gw)*7)
        }

        .spr[data-tab="7.5"] {
            height: calc(var(--gw)*7.5)
        }

        .spr[data-tab="8"] {
            height: calc(var(--gw)*8)
        }

        .spr[data-tab="8.5"] {
            height: calc(var(--gw)*8.5)
        }

        .spr[data-tab="9"] {
            height: calc(var(--gw)*9)
        }

        .spr[data-tab="9.5"] {
            height: calc(var(--gw)*9.5)
        }

        .spr[data-tab="10"] {
            height: calc(var(--gw)*10)
        }

        .pickup-control,
        .ui-btn-arrow,
        .ui-btn-arrow .o {
            width: 4em;
            height: 4em
        }

        .ui-btn-circle {
            width: 8em;
            height: 8em
        }

        .section-title-support .ui-link {
            max-width: 9999px
        }

        .site-lang {
            right: 9em
        }

        .site-navi {
            width: auto
        }

        .section-title-headline,
        .section-title-support,
        .title-flex {
            height: auto;
            height: 8em
        }

        .footer-flex {
            padding-top: 8em
        }

        .mq-wrap {
            height: 24em
        }

        .page-title .l.even,
        .page-title .l.odd {
            text-align: center;
            flex-wrap: wrap
        }

        .single-footer .page-title .w .o,
        .single-header .page-title .w .o {
            margin-right: -.125em;
            margin-left: -.125em
        }

        .single-footer .page-title .s,
        .single-header .page-title .s {
            display: none
        }

        .single-footer .page-title .l.even,
        .single-footer .page-title .l.odd,
        .single-header .page-title .l.even,
        .single-header .page-title .l.odd {
            height: auto;
            margin-bottom: 0
        }

        .footer-title .page-title .l,
        .single-header .page-title .l {
            justify-content: center
        }

        .page-title .l.even.last,
        .page-title .l.odd.last {
            margin-bottom: 0
        }

        .page-header .lead-box {
            top: auto;
            bottom: calc(var(--gw)*2);
            left: calc(var(--gw)*1)
        }

        .pickup-ul {
            width: calc(var(--gw)*6);
            height: calc(var(--gw)*6*4/3);
            border-radius: calc(var(--gw)*6*0.5);
            overflow: hidden
        }

        .logo-split-title .lead-box {
            width: 100%
        }

        .logo-split-past-wrap {
            padding-top: 50vh;
            padding-bottom: 50vh
        }
    }

    @media (max-width:768px) {
        .spr[data-tab-vr="0"] {
            height: calc(var(--gw)*0)
        }

        .spr[data-tab-vr=".5"] {
            height: calc(var(--gw)*0.5)
        }

        .spr[data-tab-vr="1"] {
            height: calc(var(--gw)*1)
        }

        .spr[data-tab-vr="1.5"] {
            height: calc(var(--gw)*1.5)
        }

        .spr[data-tab-vr="2"] {
            height: calc(var(--gw)*2)
        }

        .spr[data-tab-vr="2.5"] {
            height: calc(var(--gw)*2.5)
        }

        .spr[data-tab-vr="3"] {
            height: calc(var(--gw)*3)
        }

        .spr[data-tab-vr="3.5"] {
            height: calc(var(--gw)*3.5)
        }

        .spr[data-tab-vr="4"] {
            height: calc(var(--gw)*4)
        }

        .spr[data-tab-vr="4.5"] {
            height: calc(var(--gw)*4.5)
        }

        .spr[data-tab-vr="5"] {
            height: calc(var(--gw)*5)
        }

        .spr[data-tab-vr="5.5"] {
            height: calc(var(--gw)*5.5)
        }

        .spr[data-tab-vr="6"] {
            height: calc(var(--gw)*6)
        }

        .spr[data-tab-vr="6.5"] {
            height: calc(var(--gw)*6.5)
        }

        .spr[data-tab-vr="7"] {
            height: calc(var(--gw)*7)
        }

        .spr[data-tab-vr="7.5"] {
            height: calc(var(--gw)*7.5)
        }

        .spr[data-tab-vr="8"] {
            height: calc(var(--gw)*8)
        }

        .spr[data-tab-vr="8.5"] {
            height: calc(var(--gw)*8.5)
        }

        .spr[data-tab-vr="9"] {
            height: calc(var(--gw)*9)
        }

        .spr[data-tab-vr="9.5"] {
            height: calc(var(--gw)*9.5)
        }

        .spr[data-tab-vr="10"] {
            height: calc(var(--gw)*10)
        }

        .site-navi-body,
        .site-navi-head a {
            padding: 0 2em
        }

        .site-navi-lang {
            height: 6em
        }

        .site-navi-head .ui-btn-link,
        .site-navi-head .ui-btn-link .o,
        .site-navi-head .ui-btn-link .t,
        .ui-btn-link,
        .ui-btn-link .o,
        .ui-btn-link .t {
            min-height: 22px
        }

        .features-n {
            width: 4em;
            left: -4em
        }

        .page-title,
        .single-header .page-title {
            padding: 0 var(--gw)
        }

        .pickup-ul {
            height: calc(var(--gw)*8*4/3);
            border-radius: calc(var(--gw)*8*0.5)
        }

        .pickup-ul,
        .slide-a {
            width: calc(var(--gw)*8)
        }

        .slide-a,
        .slide-plane {
            height: calc(var(--gw)*8*1.5)
        }

        .slide-plane {
            padding: 0 calc(var(--gw)*1)
        }

        .slide-plane.even {
            margin-bottom: calc(var(--gw)*1*2)
        }

        .slide-plane.odd {
            margin-top: calc(var(--gw)*1*2)
        }

        .slide-plane-parts {
            width: 100%
        }

        .slide-scroll-thumb .pivot {
            height: 50% !important
        }

        .grid-img-li .caption {
            display: none
        }

        .grid-title {
            order: 1;
            padding-top: 8em;
            padding-bottom: 8em
        }

        .grid-top {
            order: 2
        }

        .research-li {
            margin-top: calc(var(--gw)*-1)
        }

        .grid {
            width: 100vw;
            margin: 0 calc(var(--gw)*-1);
            padding-right: var(--gw);
            padding-left: var(--gw);
            height: auto !important
        }

        .grid-img {
            display: flex;
            align-items: center;
            flex-wrap: wrap
        }

        .grid-img-li {
            position: relative;
            left: 0 !important;
            top: 0 !important;
            width: calc(50vw - var(--gw)*1) !important;
            height: calc(37.5vw - var(--gw)*1*3/4) !important
        }

        .grid-img-li.grid-img-li-lead {
            height: auto !important;
            padding-top: 4em
        }

        .thin {
            padding: 0 calc(var(--gw)*3)
        }

        .inner {
            padding: 0 calc(var(--gw)*2)
        }

        .section-editor {
            padding: 0 calc(var(--gw)*5)
        }

        .col-wrap[data-col="3"] .col,
        .col-wrap[data-col="4"] .col {
            width: 50%
        }

        .drag-slide:first-child .slide-o {
            padding-left: calc(var(--gw)*3)
        }

        .drag-slide .slide-o {
            padding-left: calc(var(--gw)*3*0.5);
            padding-right: calc(var(--gw)*3*0.5)
        }

        .logo-split-title {
            display: block;
            margin-right: calc(var(--gw)*-0.5);
            margin-left: calc(var(--gw)*-0.5)
        }

        .logo-split-title .col {
            width: 50%;
            padding-right: calc(var(--gw)*0.5);
            padding-left: calc(var(--gw)*0.5)
        }

        .logo-split-title .clock {
            justify-content: end;
            padding-bottom: 1em
        }

        .editor.tx-c,
        .partner {
            text-align: left
        }

        .editor.br br {
            display: none
        }

        .logo-split-ul {
            width: calc(var(--gw)*18);
            height: calc(var(--gw)*18*0.42292)
        }

        .logo-split.bg-img .img {
            background-size: calc(var(--gw)*18) calc(var(--gw)*18*0.42292)
        }

        .logo-split-li:nth-child(0) .img {
            background-position-y: calc(var(--gw)*18*0.42292/12*1)
        }

        .logo-split-li:first-child .img {
            background-position-y: calc(var(--gw)*18*0.42292/12*0)
        }

        .logo-split-li:nth-child(2) .img {
            background-position-y: calc(var(--gw)*18*0.42292/12*-1)
        }

        .logo-split-li:nth-child(3) .img {
            background-position-y: calc(var(--gw)*18*0.42292/12*-2)
        }

        .logo-split-li:nth-child(4) .img {
            background-position-y: calc(var(--gw)*18*0.42292/12*-3)
        }

        .logo-split-li:nth-child(5) .img {
            background-position-y: calc(var(--gw)*18*0.42292/12*-4)
        }

        .logo-split-li:nth-child(6) .img {
            background-position-y: calc(var(--gw)*18*0.42292/12*-5)
        }

        .logo-split-li:nth-child(7) .img {
            background-position-y: calc(var(--gw)*18*0.42292/12*-6)
        }

        .logo-split-li:nth-child(8) .img {
            background-position-y: calc(var(--gw)*18*0.42292/12*-7)
        }

        .logo-split-li:nth-child(9) .img {
            background-position-y: calc(var(--gw)*18*0.42292/12*-8)
        }

        .logo-split-li:nth-child(10) .img {
            background-position-y: calc(var(--gw)*18*0.42292/12*-9)
        }

        .logo-split-li:nth-child(11) .img {
            background-position-y: calc(var(--gw)*18*0.42292/12*-10)
        }

        .logo-split-li:nth-child(12) .img {
            background-position-y: calc(var(--gw)*18*0.42292/12*-11)
        }

        [data-shown="1"] .logo-split-li:nth-child(0) {
            transform: translate(0);
            transition-delay: 0s
        }

        .logo-split-li[data-n="0"] .img {
            background-position-x: calc(var(--gw)*18/9*0)
        }

        .is-update .logo-split-li[data-n="0"] .img {
            background-position-x: calc(var(--gw)*18 + var(--gw)*18/9*0);
            transition-duration: 2s;
            transition-timing-function: cubic-bezier(.66, 0, .34, 1)
        }

        [data-shown="1"] .logo-split-li:first-child {
            transform: translate(0);
            transition-delay: .06s
        }

        .logo-split-li[data-n="1"] .img {
            background-position-x: calc(var(--gw)*18/9*1)
        }

        .is-update .logo-split-li[data-n="1"] .img {
            background-position-x: calc(var(--gw)*18 + var(--gw)*18/9*1);
            transition-duration: 2s;
            transition-timing-function: cubic-bezier(.66, 0, .34, 1)
        }

        [data-shown="1"] .logo-split-li:nth-child(2) {
            transform: translate(0);
            transition-delay: .12s
        }

        .logo-split-li[data-n="2"] .img {
            background-position-x: calc(var(--gw)*18/9*2)
        }

        .is-update .logo-split-li[data-n="2"] .img {
            background-position-x: calc(var(--gw)*18 + var(--gw)*18/9*2);
            transition-duration: 2s;
            transition-timing-function: cubic-bezier(.66, 0, .34, 1)
        }

        [data-shown="1"] .logo-split-li:nth-child(3) {
            transform: translate(0);
            transition-delay: .18s
        }

        .logo-split-li[data-n="3"] .img {
            background-position-x: calc(var(--gw)*18/9*3)
        }

        .is-update .logo-split-li[data-n="3"] .img {
            background-position-x: calc(var(--gw)*18 + var(--gw)*18/9*3);
            transition-duration: 2s;
            transition-timing-function: cubic-bezier(.66, 0, .34, 1)
        }

        [data-shown="1"] .logo-split-li:nth-child(4) {
            transform: translate(0);
            transition-delay: .24s
        }

        .logo-split-li[data-n="4"] .img {
            background-position-x: calc(var(--gw)*18/9*4)
        }

        .is-update .logo-split-li[data-n="4"] .img {
            background-position-x: calc(var(--gw)*18 + var(--gw)*18/9*4);
            transition-duration: 2s;
            transition-timing-function: cubic-bezier(.66, 0, .34, 1)
        }

        [data-shown="1"] .logo-split-li:nth-child(5) {
            transform: translate(0);
            transition-delay: .3s
        }

        .logo-split-li[data-n="5"] .img {
            background-position-x: calc(var(--gw)*18/9*5)
        }

        .is-update .logo-split-li[data-n="5"] .img {
            background-position-x: calc(var(--gw)*18 + var(--gw)*18/9*5);
            transition-duration: 2s;
            transition-timing-function: cubic-bezier(.66, 0, .34, 1)
        }

        [data-shown="1"] .logo-split-li:nth-child(6) {
            transform: translate(0);
            transition-delay: .36s
        }

        .logo-split-li[data-n="6"] .img {
            background-position-x: calc(var(--gw)*18/9*6)
        }

        .is-update .logo-split-li[data-n="6"] .img {
            background-position-x: calc(var(--gw)*18 + var(--gw)*18/9*6);
            transition-duration: 2s;
            transition-timing-function: cubic-bezier(.66, 0, .34, 1)
        }

        [data-shown="1"] .logo-split-li:nth-child(7) {
            transform: translate(0);
            transition-delay: .42s
        }

        .logo-split-li[data-n="7"] .img {
            background-position-x: calc(var(--gw)*18/9*7)
        }

        .is-update .logo-split-li[data-n="7"] .img {
            background-position-x: calc(var(--gw)*18 + var(--gw)*18/9*7);
            transition-duration: 2s;
            transition-timing-function: cubic-bezier(.66, 0, .34, 1)
        }

        [data-shown="1"] .logo-split-li:nth-child(8) {
            transform: translate(0);
            transition-delay: .48s
        }

        .logo-split-li[data-n="8"] .img {
            background-position-x: calc(var(--gw)*18/9*8)
        }

        .is-update .logo-split-li[data-n="8"] .img {
            background-position-x: calc(var(--gw)*18 + var(--gw)*18/9*8);
            transition-duration: 2s;
            transition-timing-function: cubic-bezier(.66, 0, .34, 1)
        }

        [data-shown="1"] .logo-split-li:nth-child(9) {
            transform: translate(0);
            transition-delay: .54s
        }

        .logo-split-li[data-n="9"] .img {
            background-position-x: calc(var(--gw)*18/9*9)
        }

        .is-update .logo-split-li[data-n="9"] .img {
            background-position-x: calc(var(--gw)*18 + var(--gw)*18/9*9);
            transition-duration: 2s;
            transition-timing-function: cubic-bezier(.66, 0, .34, 1)
        }

        [data-shown="1"] .logo-split-li:nth-child(10) {
            transform: translate(0);
            transition-delay: .6s
        }

        .logo-split-li[data-n="10"] .img {
            background-position-x: calc(var(--gw)*18/9*10)
        }

        .is-update .logo-split-li[data-n="10"] .img {
            background-position-x: calc(var(--gw)*18 + var(--gw)*18/9*10);
            transition-duration: 2s;
            transition-timing-function: cubic-bezier(.66, 0, .34, 1)
        }

        [data-shown="1"] .logo-split-li:nth-child(11) {
            transform: translate(0);
            transition-delay: .66s
        }

        .logo-split-li[data-n="11"] .img {
            background-position-x: calc(var(--gw)*18/9*11)
        }

        .is-update .logo-split-li[data-n="11"] .img {
            background-position-x: calc(var(--gw)*18 + var(--gw)*18/9*11);
            transition-duration: 2s;
            transition-timing-function: cubic-bezier(.66, 0, .34, 1)
        }

        [data-shown="1"] .logo-split-li:nth-child(12) {
            transform: translate(0);
            transition-delay: .72s
        }

        .logo-split-li[data-n="12"] .img {
            background-position-x: calc(var(--gw)*18/9*12)
        }

        .is-update .logo-split-li[data-n="12"] .img {
            background-position-x: calc(var(--gw)*18 + var(--gw)*18/9*12);
            transition-duration: 2s;
            transition-timing-function: cubic-bezier(.66, 0, .34, 1)
        }

        .team-name {
            font-family: everett, sans-serif;
            padding-bottom: .25em
        }

        .team-name,
        .team-name .o,
        .team-name .t {
            line-height: 1
        }

        .team-post {
            text-transform: unset
        }

        .team-li.toggle .inner {
            padding-bottom: 3em;
            padding-top: 3em
        }

        .team-li .ui-btn-toggle {
            top: 3.5em;
            right: calc(var(--gw)*3)
        }

        .section-career .col-wrap,
        .team-li .col-wrap {
            display: block;
            margin: 0
        }

        .section-career .col-wrap .col,
        .team-li .col-wrap .col {
            width: 100%;
            padding: 0
        }

        .slide-img {
            height: 30vh !important
        }

        .section-gallery {
            height: calc(30vh + 16em)
        }

        .section-gallery .section-big-title {
            text-indent: -9999px
        }

        .team-post {
            font-weight: 100
        }

        .career-name {
            padding-bottom: 1em
        }

        .career-name .o {
            display: inline-block
        }

        .career-name .o .t {
            padding-right: .25em
        }

        .career-name .o .t:after {
            content: "/"
        }

        .career-name .o:last-child .t:after {
            display: none
        }

        [data-page-type="404"] .slide-a {
            width: calc(var(--gw)*22);
            height: calc(var(--gw)*22*0.42292)
        }

        [data-page-type="404"] .slide-plane {
            padding: 0 calc(var(--gw)*1)
        }

        [data-page-type="404"] .slide-plane.odd {
            margin-top: 0;
            margin-bottom: calc(var(--gw)*22*0.42292*0.5)
        }

        [data-page-type="404"] .slide-plane.even {
            margin-bottom: 0;
            margin-top: calc(var(--gw)*22*0.42292*0.5)
        }

        .logo-split-past .logo-split-ul {
            width: calc(var(--gw)*22);
            height: calc(var(--gw)*22*0.42292)
        }

        .logo-split-past .img {
            background-size: calc(var(--gw)*22) calc(var(--gw)*22*0.42292)
        }

        .logo-split-past .logo-split-li:nth-child(0) .img {
            background-position-y: calc(var(--gw)*22*0.42292/12*1)
        }

        .logo-split-past .logo-split-li:first-child .img {
            background-position-y: calc(var(--gw)*22*0.42292/12*0)
        }

        .logo-split-past .logo-split-li:nth-child(2) .img {
            background-position-y: calc(var(--gw)*22*0.42292/12*-1)
        }

        .logo-split-past .logo-split-li:nth-child(3) .img {
            background-position-y: calc(var(--gw)*22*0.42292/12*-2)
        }

        .logo-split-past .logo-split-li:nth-child(4) .img {
            background-position-y: calc(var(--gw)*22*0.42292/12*-3)
        }

        .logo-split-past .logo-split-li:nth-child(5) .img {
            background-position-y: calc(var(--gw)*22*0.42292/12*-4)
        }

        .logo-split-past .logo-split-li:nth-child(6) .img {
            background-position-y: calc(var(--gw)*22*0.42292/12*-5)
        }

        .logo-split-past .logo-split-li:nth-child(7) .img {
            background-position-y: calc(var(--gw)*22*0.42292/12*-6)
        }

        .logo-split-past .logo-split-li:nth-child(8) .img {
            background-position-y: calc(var(--gw)*22*0.42292/12*-7)
        }

        .logo-split-past .logo-split-li:nth-child(9) .img {
            background-position-y: calc(var(--gw)*22*0.42292/12*-8)
        }

        .logo-split-past .logo-split-li:nth-child(10) .img {
            background-position-y: calc(var(--gw)*22*0.42292/12*-9)
        }

        .logo-split-past .logo-split-li:nth-child(11) .img {
            background-position-y: calc(var(--gw)*22*0.42292/12*-10)
        }

        .logo-split-past .logo-split-li:nth-child(12) .img {
            background-position-y: calc(var(--gw)*22*0.42292/12*-11)
        }

        .logo-split-past [data-shown="1"] .logo-split-li:nth-child(0) {
            transform: translate(0);
            transition-delay: 0s
        }

        .logo-split-past .logo-split-li[data-n="0"] .img {
            background-position-x: calc(var(--gw)*22/9*0)
        }

        .logo-split-past [data-shown="1"] .logo-split-li:first-child {
            transform: translate(0);
            transition-delay: .06s
        }

        .logo-split-past .logo-split-li[data-n="1"] .img {
            background-position-x: calc(var(--gw)*22/9*1)
        }

        .logo-split-past [data-shown="1"] .logo-split-li:nth-child(2) {
            transform: translate(0);
            transition-delay: .12s
        }

        .logo-split-past .logo-split-li[data-n="2"] .img {
            background-position-x: calc(var(--gw)*22/9*2)
        }

        .logo-split-past [data-shown="1"] .logo-split-li:nth-child(3) {
            transform: translate(0);
            transition-delay: .18s
        }

        .logo-split-past .logo-split-li[data-n="3"] .img {
            background-position-x: calc(var(--gw)*22/9*3)
        }

        .logo-split-past [data-shown="1"] .logo-split-li:nth-child(4) {
            transform: translate(0);
            transition-delay: .24s
        }

        .logo-split-past .logo-split-li[data-n="4"] .img {
            background-position-x: calc(var(--gw)*22/9*4)
        }

        .logo-split-past [data-shown="1"] .logo-split-li:nth-child(5) {
            transform: translate(0);
            transition-delay: .3s
        }

        .logo-split-past .logo-split-li[data-n="5"] .img {
            background-position-x: calc(var(--gw)*22/9*5)
        }

        .logo-split-past [data-shown="1"] .logo-split-li:nth-child(6) {
            transform: translate(0);
            transition-delay: .36s
        }

        .logo-split-past .logo-split-li[data-n="6"] .img {
            background-position-x: calc(var(--gw)*22/9*6)
        }

        .logo-split-past [data-shown="1"] .logo-split-li:nth-child(7) {
            transform: translate(0);
            transition-delay: .42s
        }

        .logo-split-past .logo-split-li[data-n="7"] .img {
            background-position-x: calc(var(--gw)*22/9*7)
        }

        .logo-split-past [data-shown="1"] .logo-split-li:nth-child(8) {
            transform: translate(0);
            transition-delay: .48s
        }

        .logo-split-past .logo-split-li[data-n="8"] .img {
            background-position-x: calc(var(--gw)*22/9*8)
        }

        .logo-split-past [data-shown="1"] .logo-split-li:nth-child(9) {
            transform: translate(0);
            transition-delay: .54s
        }

        .logo-split-past .logo-split-li[data-n="9"] .img {
            background-position-x: calc(var(--gw)*22/9*9)
        }

        .logo-split-past [data-shown="1"] .logo-split-li:nth-child(10) {
            transform: translate(0);
            transition-delay: .6s
        }

        .logo-split-past .logo-split-li[data-n="10"] .img {
            background-position-x: calc(var(--gw)*22/9*10)
        }

        .logo-split-past [data-shown="1"] .logo-split-li:nth-child(11) {
            transform: translate(0);
            transition-delay: .66s
        }

        .logo-split-past .logo-split-li[data-n="11"] .img {
            background-position-x: calc(var(--gw)*22/9*11)
        }

        .logo-split-past [data-shown="1"] .logo-split-li:nth-child(12) {
            transform: translate(0);
            transition-delay: .72s
        }

        .logo-split-past .logo-split-li[data-n="12"] .img {
            background-position-x: calc(var(--gw)*22/9*12)
        }
    }

    [data-bg=dark] {
        background-color: var(--col-black)
    }

    [data-bg=dark],
    [data-bg=dark] a {
        color: var(--col-white)
    }

    [data-bg=dark] .border .b {
        background: var(--col-white)
    }

    [data-bg=dark] .border .num {
        color: var(--col-white)
    }

    [data-theme=light] [data-bg=dark] {
        color: var(--col-black);
        background-color: var(--col-white)
    }

    [data-theme=light] [data-bg=dark] a {
        color: var(--col-black)
    }

    [data-theme=light] [data-bg=dark] .border .b {
        background: var(--col-black)
    }

    [data-theme=light] [data-bg=dark] .border .num {
        color: var(--col-black)
    }

    [data-theme=light] .lead-box,
    [data-theme=light] .page-title-support {
        opacity: .8
    }

    [data-theme=light] .border,
    [data-theme=light] .border.sub {
        opacity: .3
    }

    [data-theme=light] .ui-btn-link-re .t,
    [data-theme=light] .ui-cursor-text .t {
        color: var(--col-black)
    }

    [data-theme=light] .ui-btn-link-re .o {
        border: 1px solid var(--col-black)
    }

    [data-theme=light] .ui-btn-link-re .o:before {
        background-color: var(--col-white)
    }

    [data-theme=light] .ui-btn-link-re .o:after {
        background-color: var(--col-black)
    }

    [data-theme=light] [data-page-theme=dark] .ui-btn-link .t {
        color: var(--col-black)
    }

    [data-theme=light] [data-page-theme=dark] .ui-btn-link .o {
        border: 1px solid var(--col-black)
    }

    [data-theme=light] [data-page-theme=dark] .ui-btn-link .o:before {
        visibility: hidden;
        background-color: var(--col-white)
    }

    [data-theme=light] [data-page-theme=dark] .ui-btn-link .o:after {
        visibility: hidden;
        background-color: var(--col-black)
    }

    [data-theme=light] .ui-btn-link-re:hover .t,
    [data-theme=light] [data-page-theme=dark] .site-lang:hover .ui-btn-link .t {
        color: var(--col-white)
    }

    [data-theme=light] .ui-btn-link-re:hover .o,
    [data-theme=light] [data-page-theme=dark] .site-lang:hover .ui-btn-link .o {
        border: 1px solid var(--col-black)
    }

    [data-theme=light] .ui-btn-link-re:hover .o:before,
    [data-theme=light] [data-page-theme=dark] .site-lang:hover .ui-btn-link .o:before {
        visibility: visible;
        background: var(--col-black)
    }

    [data-theme=light] .ui-btn-link-re:hover .o:after,
    [data-theme=light] [data-page-theme=dark] .site-lang:hover .ui-btn-link .o:after {
        visibility: visible;
        transform: scaleY(1);
        transform-origin: bottom
    }

    [data-theme=light] .site-navi-ul a {
        color: var(--col-black)
    }

    [data-theme=light] .site-navi-bg div {
        background: var(--col-white)
    }

    [data-theme=light] .site-navi-lang .ui-btn-link.diseble .t {
        color: var(--col-black)
    }

    .is-menu-opened.has-scrollover-navi[data-theme=light] .site-navi-ul .u div {
        background: var(--col-black)
    }

    .is-menu-opened.has-scrollover-navi[data-theme=light] .site-navi,
    .is-menu-opened.has-scrollover-navi[data-theme=light] .site-navi a {
        color: var(--col-black)
    }

    [data-page-theme=dark] .page-origin,
    [data-page-theme=dark] .page-origin a,
    [data-page-theme=dark] .site-name,
    [data-page-theme=dark] .site-navi a {
        color: var(--col-white)
    }

    [data-theme=light][data-page-theme=dark] {
        background-color: var(--col-white)
    }

    [data-theme=light][data-page-theme=dark] .page-origin,
    [data-theme=light][data-page-theme=dark] .page-origin a,
    [data-theme=light][data-page-theme=dark] .site-name,
    [data-theme=light][data-page-theme=dark] .site-navi a {
        color: var(--col-black)
    }

    [data-theme=light][data-page-theme=dark] .slide-scroll-map-li>div,
    [data-theme=light][data-page-theme=dark] .slide-scroll-thumb .pivot {
        border: 1px solid var(--col-black)
    }

    [data-theme=light][data-page-theme=dark] .slide-scroll-map-li>div>div {
        background-color: var(--col-black)
    }

    [data-bg=dark] .ui-btn-arrow,
    [data-page-theme=dark] .ui-btn-arrow,
    [data-scheme=dark] .ui-btn-arrow {
        color: var(--col-black)
    }

    [data-bg=dark] .site-navi-ul .u div,
    [data-bg=dark] .ui-btn-arrow .b,
    [data-bg=dark] .ui-link-underline .u,
    [data-page-theme=dark] .site-navi-ul .u div,
    [data-page-theme=dark] .ui-btn-arrow .b,
    [data-page-theme=dark] .ui-link-underline .u,
    [data-scheme=dark] .site-navi-ul .u div,
    [data-scheme=dark] .ui-btn-arrow .b,
    [data-scheme=dark] .ui-link-underline .u {
        background: var(--col-white)
    }

    [data-bg=dark] .ui-btn-circle .txt,
    [data-page-theme=dark] .ui-btn-circle .txt,
    [data-scheme=dark] .ui-btn-circle .txt {
        color: var(--col-black)
    }

    [data-bg=dark] .ui-btn-circle.ui-link-underline .u,
    [data-page-theme=dark] .ui-btn-circle.ui-link-underline .u,
    [data-scheme=dark] .ui-btn-circle.ui-link-underline .u {
        background: var(--col-black)
    }

    [data-bg=dark] .ui-btn-circle .b,
    [data-page-theme=dark] .ui-btn-circle .b,
    [data-scheme=dark] .ui-btn-circle .b {
        background: var(--col-white)
    }

    [data-theme=light] [data-bg=dark] .ui-btn-arrow,
    [data-theme=light][data-page-theme=dark] .ui-btn-arrow {
        color: var(--col-white)
    }

    [data-theme=light] [data-bg=dark] .site-navi-ul .u div,
    [data-theme=light] [data-bg=dark] .ui-btn-arrow .b,
    [data-theme=light] [data-bg=dark] .ui-link-underline .u,
    [data-theme=light][data-page-theme=dark] .site-navi-ul .u div,
    [data-theme=light][data-page-theme=dark] .ui-btn-arrow .b,
    [data-theme=light][data-page-theme=dark] .ui-link-underline .u {
        background: var(--col-black)
    }

    [data-theme=light] [data-bg=dark] .ui-btn-circle .txt,
    [data-theme=light][data-page-theme=dark] .ui-btn-circle .txt {
        color: var(--col-white)
    }

    [data-theme=light] [data-bg=dark] .ui-btn-circle.ui-link-underline .u,
    [data-theme=light][data-page-theme=dark] .ui-btn-circle.ui-link-underline .u {
        background: var(--col-white)
    }

    [data-theme=light] [data-bg=dark] .ui-btn-circle .b,
    [data-theme=light][data-page-theme=dark] .ui-btn-circle .b {
        background: var(--col-black)
    }

    @media (max-width:640px),
    (orientation:landscape) and (max-width:900px) {
        .spr[data-n="0"] {
            height: 0
        }

        .spr[data-n=".5"] {
            height: 10px
        }

        .spr[data-n="1"] {
            height: 20px
        }

        .spr[data-n="1.5"] {
            height: 30px
        }

        .spr[data-n="2"] {
            height: 40px
        }

        .spr[data-n="2.5"] {
            height: 50px
        }

        .spr[data-n="3"] {
            height: 60px
        }

        .spr[data-n="3.5"] {
            height: 70px
        }

        .spr[data-n="4"] {
            height: 80px
        }

        .spr[data-n="4.5"] {
            height: 90px
        }

        .spr[data-n="5"] {
            height: 100px
        }

        .spr[data-n="5.5"] {
            height: 110px
        }

        .spr[data-n="6"] {
            height: 120px
        }

        .spr[data-n="6.5"] {
            height: 130px
        }

        .spr[data-n="7"] {
            height: 140px
        }

        .spr[data-n="7.5"] {
            height: 150px
        }

        .spr[data-n="8"] {
            height: 160px
        }

        .spr[data-n="8.5"] {
            height: 170px
        }

        .spr[data-n="9"] {
            height: 180px
        }

        .spr[data-n="9.5"] {
            height: 190px
        }

        .spr[data-n="10"] {
            height: 200px
        }

        .spr[data-mob="0"] {
            height: 0
        }

        .spr[data-mob=".5"] {
            height: 10px
        }

        .spr[data-mob="1"] {
            height: 20px
        }

        .spr[data-mob="1.5"] {
            height: 30px
        }

        .spr[data-mob="2"] {
            height: 40px
        }

        .spr[data-mob="2.5"] {
            height: 50px
        }

        .spr[data-mob="3"] {
            height: 60px
        }

        .spr[data-mob="3.5"] {
            height: 70px
        }

        .spr[data-mob="4"] {
            height: 80px
        }

        .spr[data-mob="4.5"] {
            height: 90px
        }

        .spr[data-mob="5"] {
            height: 100px
        }

        .spr[data-mob="5.5"] {
            height: 110px
        }

        .spr[data-mob="6"] {
            height: 120px
        }

        .spr[data-mob="6.5"] {
            height: 130px
        }

        .spr[data-mob="7"] {
            height: 140px
        }

        .spr[data-mob="7.5"] {
            height: 150px
        }

        .spr[data-mob="8"] {
            height: 160px
        }

        .spr[data-mob="8.5"] {
            height: 170px
        }

        .spr[data-mob="9"] {
            height: 180px
        }

        .spr[data-mob="9.5"] {
            height: 190px
        }

        .spr[data-mob="10"] {
            height: 200px
        }

        .features-a:last-child .border,
        .features-n,
        .hide-m,
        .parts-t1,
        .section-sitemap .footer-header .title-td-right,
        .section-sitemap .title-td-left,
        .single-footer .footer-header .title-td-right,
        .single-footer .title-td-left,
        .slide-plane-t .parentheses {
            display: none
        }

        .has-scrollover-dark .site-name {
            color: var(--col-back)
        }

        .has-scrollover-footer .site-name,
        .has-scrollover-footer .site-navi {
            transform: translateY(0)
        }

        .site-name {
            padding: 0 20px;
            height: 70px;
            margin-top: 0;
            display: flex;
            align-items: center
        }

        .site-lang {
            width: 70px;
            right: 90px
        }

        .site-lang,
        .site-navi-head a,
        .site-navi-lang {
            height: 70px
        }

        .has-scrollover-navi .site-navi,
        .site-navi {
            transform: translate(35px)
        }

        .site-navi-body {
            width: 180px;
            pointer-events: none
        }

        .site-navi-body,
        .site-navi-head a {
            padding: 0
        }

        .site-navi-lang {
            padding: 0 2em
        }

        .site-navi-ul a {
            padding: .25em 2em
        }

        .page-content .site-lang,
        [lang=en] .site-navi-lang .ui-btn-link[data-to=en],
        [lang=ja] .site-navi-lang .ui-btn-link[data-to=ja] {
            display: none
        }

        .site-navi-head .ui-btn-link,
        .site-navi-head .ui-btn-link .t {
            width: 70px
        }

        .site-navi-bg div {
            border-radius: 1em
        }

        .site-navi {
            pointer-events: auto
        }

        .site-navi-ul .active .u,
        .site-navi-ul .u {
            transform: scaleX(0);
            transform-origin: right
        }

        .site-navi-head {
            pointer-events: auto;
            opacity: 1;
            transform: scale(1)
        }

        .site-navi-lang .t,
        .site-navi-ul .t {
            opacity: 0;
            transform: translateY(100%)
        }

        .is-menu-opened .site-navi {
            pointer-events: auto
        }

        .is-menu-opened .site-navi-ul .active .u {
            transform: scaleX(1);
            transform-origin: left;
            transition: background .4s, transform .6s cubic-bezier(.32, .94, .6, 1)
        }

        .is-menu-opened .site-navi-ul .u div {
            background: var(--col-white)
        }

        .is-menu-opened .site-navi {
            transform: translate(0)
        }

        .is-menu-opened .site-navi,
        .is-menu-opened .site-navi a {
            color: var(--col-white)
        }

        .is-menu-opened .site-navi-lang {
            pointer-events: auto;
            opacity: 1
        }

        .is-menu-opened .site-navi-bg,
        .is-menu-opened .site-navi-body,
        .is-menu-opened .site-navi-head {
            pointer-events: auto;
            opacity: 1;
            transform: scale(1)
        }

        .is-menu-opened .site-navi-ul li:nth-child(0) .t {
            transition-delay: 0s
        }

        .is-menu-opened .site-navi-ul li:first-child .t {
            transition-delay: .05s
        }

        .is-menu-opened .site-navi-ul li:nth-child(2) .t {
            transition-delay: .1s
        }

        .is-menu-opened .site-navi-ul li:nth-child(3) .t {
            transition-delay: .15s
        }

        .is-menu-opened .site-navi-ul li:nth-child(4) .t {
            transition-delay: .2s
        }

        .is-menu-opened .site-navi-ul li:nth-child(5) .t {
            transition-delay: .25s
        }

        .is-menu-opened .site-navi-lang .o {
            opacity: 1
        }

        .is-menu-opened .site-navi-lang .t,
        .is-menu-opened .site-navi-ul .t {
            opacity: 1;
            transform: translate(0)
        }

        .is-menu-opened .site-navi-head .ui-btn-link .t {
            color: var(--col-black)
        }

        .is-menu-opened .site-navi-head .ui-btn-link .o {
            border: 1px solid var(--col-white)
        }

        .is-menu-opened .site-navi-head .ui-btn-link .o:before {
            background: var(--col-white)
        }

        .is-menu-opened .site-navi-head .ui-btn-link .o:after {
            transform: scaleY(1);
            transform-origin: bottom
        }

        .is-menu-opened[data-page-theme=dark] .site-navi-head .ui-btn-link .t {
            color: var(--col-black)
        }

        .is-menu-opened[data-page-theme=dark] .site-navi-head .ui-btn-link .o {
            border: 1px solid var(--col-white)
        }

        .is-menu-opened[data-page-theme=dark] .site-navi-head .ui-btn-link .o:before {
            background: var(--col-white)
        }

        .is-menu-opened[data-page-theme=dark] .site-navi-head .ui-btn-link .o:after {
            transform: scaleY(0);
            transform-origin: bottom
        }

        .section-title-headline,
        .section-title-support,
        .title-flex {
            height: 120px
        }

        .footer-flex {
            padding-top: 120px
        }

        .mq-wrap {
            height: auto
        }

        .page-title,
        [data-size=large] .page-title {
            padding: 0 20px
        }

        .page-title.page-home-title .l1 {
            text-align: left;
            justify-content: flex-start
        }

        .page-title.page-home-title .l2 {
            text-align: center;
            justify-content: center
        }

        .page-title.page-home-title .l3 {
            text-align: right;
            justify-content: flex-end
        }

        [data-page-type=home] .page-header {
            height: auto !important
        }

        .body,
        .thin {
            padding: 0 20px
        }

        .p1 {
            text-align: left
        }

        .features-h {
            max-width: 9999px
        }

        .features-h-wrap {
            padding: 0
        }

        .features-t {
            text-align: center
        }

        .features-t.flip-b {
            display: none
        }

        .features-a {
            padding-top: 2em;
            padding-bottom: 1.8em
        }

        .section-sitemap .footer-header .title-td,
        .single-footer .title-td {
            width: 100%
        }

        .section-sitemap .title-td,
        .single-footer .footer-flex .title-td {
            width: auto
        }

        .page-title-pivot {
            height: auto;
            padding-top: 160px
        }

        .page-title {
            padding: 0 20px
        }

        .single-header .page-title {
            padding: 0
        }

        .footer-title-body {
            margin-right: -20px;
            margin-left: -20px
        }

        .page-title-pivot>.in {
            height: auto
        }

        .indent,
        .lead-body .w:first-child {
            text-indent: 3em
        }

        .page-header .lead-box {
            position: relative;
            top: auto;
            left: auto;
            bottom: auto;
            margin-top: 2em;
            width: 100%;
            padding: 0 20px
        }

        .page-header .lead-box .indent {
            text-indent: 3em !important
        }

        .pickup {
            position: relative;
            right: auto;
            left: auto;
            bottom: auto;
            width: 50vw;
            margin: 0 auto
        }

        .pickup-ul {
            width: 50vw;
            height: 70vw;
            border-radius: 50vw
        }

        .pickup-head {
            text-align: center;
            padding-bottom: 1em;
            font-weight: 100
        }

        .pickup-count {
            padding-top: 1em;
            position: relative;
            height: auto;
            bottom: auto;
            left: auto
        }

        .p1.js-split-w .s {
            display: none
        }

        .p1.js-split-w .w {
            padding-right: .25em
        }

        .section-concept .border .num {
            display: none
        }

        .col-wrap.description-sub,
        .logo-split-title {
            display: block;
            margin: 0
        }

        .editor.indent p {
            text-indent: 0
        }

        .col-wrap.description-sub .col,
        .logo-split-title .col {
            width: 100%;
            padding: 0
        }

        .setback {
            padding-left: 0
        }

        .lead-box .clock-tb,
        .logo-split-title .lead-box {
            font-family: lausanne, sans-serif;
            text-transform: unset;
            font-weight: 100;
            letter-spacing: -.01em
        }

        .clock-wrap .t {
            padding-top: 1px
        }

        .team-li .inner,
        .team-li.toggle .inner {
            padding-bottom: 2em;
            padding-top: 2em
        }

        .team-li .ui-btn-toggle {
            top: 35px;
            right: 0
        }

        .ui-btn-toggle {
            width: 70px;
            height: 70px
        }

        .col-wrap[data-col="3"],
        .col-wrap[data-col="4"] {
            width: 100%;
            display: block;
            margin-right: 0;
            margin-left: 0
        }

        .col-wrap[data-col="3"] .col,
        .col-wrap[data-col="4"] .col {
            width: 100%;
            padding-right: 0;
            padding-left: 0
        }

        .logo-split-ul {
            width: calc(100vw - 40px);
            height: calc(42.29167vw - 16.91667px)
        }

        .logo-split.bg-img .img {
            background-size: calc(100vw - 40px) calc(42.29167vw - 16.91667px)
        }

        .logo-split-n {
            position: relative;
            transform: translate(0);
            width: auto;
            height: auto
        }

        .logo-split-li:nth-child(0) .img {
            background-position-y: calc(3.52431vw - 1.40972px)
        }

        .logo-split-li:first-child .img {
            background-position-y: calc(0vw - 0px)
        }

        .logo-split-li:nth-child(2) .img {
            background-position-y: calc(-3.52431vw - -1.40972px)
        }

        .logo-split-li:nth-child(3) .img {
            background-position-y: calc(-7.04861vw - -2.81944px)
        }

        .logo-split-li:nth-child(4) .img {
            background-position-y: calc(-10.57292vw - -4.22917px)
        }

        .logo-split-li:nth-child(5) .img {
            background-position-y: calc(-14.09722vw - -5.63889px)
        }

        .logo-split-li:nth-child(6) .img {
            background-position-y: calc(-17.62153vw - -7.04861px)
        }

        .logo-split-li:nth-child(7) .img {
            background-position-y: calc(-21.14583vw - -8.45833px)
        }

        .logo-split-li:nth-child(8) .img {
            background-position-y: calc(-24.67014vw - -9.86806px)
        }

        .logo-split-li:nth-child(9) .img {
            background-position-y: calc(-28.19444vw - -11.27778px)
        }

        .logo-split-li:nth-child(10) .img {
            background-position-y: calc(-31.71875vw - -12.6875px)
        }

        .logo-split-li:nth-child(11) .img {
            background-position-y: calc(-35.24306vw - -14.09722px)
        }

        .logo-split-li:nth-child(12) .img {
            background-position-y: calc(-38.76736vw - -15.50694px)
        }

        [data-shown="1"] .logo-split-li:nth-child(0) {
            transform: translate(0);
            transition-delay: 0s
        }

        .logo-split-li[data-n="0"] .img {
            background-position-x: calc(0vw - 0px)
        }

        .is-update .logo-split-li[data-n="0"] .img {
            background-position-x: calc(100vw - 40px);
            transition-duration: 2s;
            transition-timing-function: cubic-bezier(.66, 0, .34, 1)
        }

        [data-shown="1"] .logo-split-li:first-child {
            transform: translate(0);
            transition-delay: .06s
        }

        .logo-split-li[data-n="1"] .img {
            background-position-x: calc(11.11111vw - 4.44444px)
        }

        .is-update .logo-split-li[data-n="1"] .img {
            background-position-x: calc(111.11111vw - 44.44444px);
            transition-duration: 2s;
            transition-timing-function: cubic-bezier(.66, 0, .34, 1)
        }

        [data-shown="1"] .logo-split-li:nth-child(2) {
            transform: translate(0);
            transition-delay: .12s
        }

        .logo-split-li[data-n="2"] .img {
            background-position-x: calc(22.22222vw - 8.88889px)
        }

        .is-update .logo-split-li[data-n="2"] .img {
            background-position-x: calc(122.22222vw - 48.88889px);
            transition-duration: 2s;
            transition-timing-function: cubic-bezier(.66, 0, .34, 1)
        }

        [data-shown="1"] .logo-split-li:nth-child(3) {
            transform: translate(0);
            transition-delay: .18s
        }

        .logo-split-li[data-n="3"] .img {
            background-position-x: calc(33.33333vw - 13.33333px)
        }

        .is-update .logo-split-li[data-n="3"] .img {
            background-position-x: calc(133.33333vw - 53.33333px);
            transition-duration: 2s;
            transition-timing-function: cubic-bezier(.66, 0, .34, 1)
        }

        [data-shown="1"] .logo-split-li:nth-child(4) {
            transform: translate(0);
            transition-delay: .24s
        }

        .logo-split-li[data-n="4"] .img {
            background-position-x: calc(44.44444vw - 17.77778px)
        }

        .is-update .logo-split-li[data-n="4"] .img {
            background-position-x: calc(144.44444vw - 57.77778px);
            transition-duration: 2s;
            transition-timing-function: cubic-bezier(.66, 0, .34, 1)
        }

        [data-shown="1"] .logo-split-li:nth-child(5) {
            transform: translate(0);
            transition-delay: .3s
        }

        .logo-split-li[data-n="5"] .img {
            background-position-x: calc(55.55556vw - 22.22222px)
        }

        .is-update .logo-split-li[data-n="5"] .img {
            background-position-x: calc(155.55556vw - 62.22222px);
            transition-duration: 2s;
            transition-timing-function: cubic-bezier(.66, 0, .34, 1)
        }

        [data-shown="1"] .logo-split-li:nth-child(6) {
            transform: translate(0);
            transition-delay: .36s
        }

        .logo-split-li[data-n="6"] .img {
            background-position-x: calc(66.66667vw - 26.66667px)
        }

        .is-update .logo-split-li[data-n="6"] .img {
            background-position-x: calc(166.66667vw - 66.66667px);
            transition-duration: 2s;
            transition-timing-function: cubic-bezier(.66, 0, .34, 1)
        }

        [data-shown="1"] .logo-split-li:nth-child(7) {
            transform: translate(0);
            transition-delay: .42s
        }

        .logo-split-li[data-n="7"] .img {
            background-position-x: calc(77.77778vw - 31.11111px)
        }

        .is-update .logo-split-li[data-n="7"] .img {
            background-position-x: calc(177.77778vw - 71.11111px);
            transition-duration: 2s;
            transition-timing-function: cubic-bezier(.66, 0, .34, 1)
        }

        [data-shown="1"] .logo-split-li:nth-child(8) {
            transform: translate(0);
            transition-delay: .48s
        }

        .logo-split-li[data-n="8"] .img {
            background-position-x: calc(88.88889vw - 35.55556px)
        }

        .is-update .logo-split-li[data-n="8"] .img {
            background-position-x: calc(188.88889vw - 75.55556px);
            transition-duration: 2s;
            transition-timing-function: cubic-bezier(.66, 0, .34, 1)
        }

        [data-shown="1"] .logo-split-li:nth-child(9) {
            transform: translate(0);
            transition-delay: .54s
        }

        .logo-split-li[data-n="9"] .img {
            background-position-x: calc(100vw - 40px)
        }

        .is-update .logo-split-li[data-n="9"] .img {
            background-position-x: calc(200vw - 80px);
            transition-duration: 2s;
            transition-timing-function: cubic-bezier(.66, 0, .34, 1)
        }

        [data-shown="1"] .logo-split-li:nth-child(10) {
            transform: translate(0);
            transition-delay: .6s
        }

        .logo-split-li[data-n="10"] .img {
            background-position-x: calc(111.11111vw - 44.44444px)
        }

        .is-update .logo-split-li[data-n="10"] .img {
            background-position-x: calc(211.11111vw - 84.44444px);
            transition-duration: 2s;
            transition-timing-function: cubic-bezier(.66, 0, .34, 1)
        }

        [data-shown="1"] .logo-split-li:nth-child(11) {
            transform: translate(0);
            transition-delay: .66s
        }

        .logo-split-li[data-n="11"] .img {
            background-position-x: calc(122.22222vw - 48.88889px)
        }

        .is-update .logo-split-li[data-n="11"] .img {
            background-position-x: calc(222.22222vw - 88.88889px);
            transition-duration: 2s;
            transition-timing-function: cubic-bezier(.66, 0, .34, 1)
        }

        [data-shown="1"] .logo-split-li:nth-child(12) {
            transform: translate(0);
            transition-delay: .72s
        }

        .logo-split-li[data-n="12"] .img {
            background-position-x: calc(133.33333vw - 53.33333px)
        }

        .is-update .logo-split-li[data-n="12"] .img {
            background-position-x: calc(233.33333vw - 93.33333px);
            transition-duration: 2s;
            transition-timing-function: cubic-bezier(.66, 0, .34, 1)
        }

        .parts,
        .slide-scroll-control {
            height: 70px
        }

        .slide-scroll-map-li>div {
            opacity: .2
        }

        .slide-a {
            width: 50vw;
            height: 75vw
        }

        .slide-plane {
            height: 75vw;
            padding: 0 calc(var(--gw)*1*2)
        }

        .slide-scroll-thumb .pivot {
            height: 50% !important
        }

        .grid {
            width: 100vw;
            margin: 0 -20px;
            padding-right: 20px;
            padding-left: 20px;
            height: auto !important
        }

        .grid-img {
            display: flex;
            align-items: center;
            flex-wrap: wrap
        }

        .grid-img-li {
            position: relative;
            left: 0 !important;
            top: 0 !important;
            width: calc(50vw - 20px) !important;
            height: calc(37.5vw - 15px) !important
        }

        .grid-img-li.grid-img-li-lead {
            height: auto !important;
            padding-top: 2em;
            width: 100% !important
        }

        .border .num {
            height: 70px
        }

        .single-header {
            margin-bottom: -70px;
            padding-bottom: 70px
        }

        a,
        h1,
        h2,
        h3,
        h4,
        h5,
        html,
        p {
            letter-spacing: -.01em
        }

        .section-editor {
            padding: 0 20px
        }

        .section-media .col-wrap .col {
            padding: 10px
        }

        .section-media .col-wrap {
            margin: -10px
        }

        .inner {
            padding: 0
        }

        .slide-img {
            height: 25vh !important
        }

        .drag-slide:first-child .slide-o {
            padding-left: 20px
        }

        .drag-slide:last-child .slide-o {
            padding-right: 20px
        }

        .drag-slide .slide-o {
            padding-left: 10px;
            padding-right: 10px
        }

        .single-body .section-gallery {
            height: auto
        }

        [data-section-bg=dark][data-section-next-bg=dark],
        [data-section-next-type=shift] {
            margin-bottom: -60px
        }

        .section-partner .inf-wrap {
            margin-top: -1em
        }

        .inf-title {
            padding-bottom: .5em
        }

        [data-page-type="404"] .slide-a {
            width: calc(100vw - 40px);
            height: calc(42.29167vw - 16.91667px)
        }

        [data-page-type="404"] .slide-plane {
            padding: 0 20px
        }

        [data-page-type="404"] .slide-plane.odd {
            margin-top: 0;
            margin-bottom: calc(21.14583vw - 8.45833px)
        }

        [data-page-type="404"] .slide-plane.even {
            margin-bottom: 0;
            margin-top: calc(21.14583vw - 8.45833px)
        }

        [data-page-type="404"] .page-title {
            height: auto;
            padding-top: 160px
        }

        .logo-split-past .logo-split-ul {
            width: calc(100vw - 40px);
            height: calc(42.29167vw - 16.91667px)
        }

        .logo-split-past .img {
            background-size: calc(100vw - 40px) calc(42.29167vw - 16.91667px)
        }

        .logo-split-past .logo-split-li:nth-child(0) .img {
            background-position-y: calc(3.52431vw - 1.40972px)
        }

        .logo-split-past .logo-split-li:first-child .img {
            background-position-y: calc(0vw - 0px)
        }

        .logo-split-past .logo-split-li:nth-child(2) .img {
            background-position-y: calc(-3.52431vw - -1.40972px)
        }

        .logo-split-past .logo-split-li:nth-child(3) .img {
            background-position-y: calc(-7.04861vw - -2.81944px)
        }

        .logo-split-past .logo-split-li:nth-child(4) .img {
            background-position-y: calc(-10.57292vw - -4.22917px)
        }

        .logo-split-past .logo-split-li:nth-child(5) .img {
            background-position-y: calc(-14.09722vw - -5.63889px)
        }

        .logo-split-past .logo-split-li:nth-child(6) .img {
            background-position-y: calc(-17.62153vw - -7.04861px)
        }

        .logo-split-past .logo-split-li:nth-child(7) .img {
            background-position-y: calc(-21.14583vw - -8.45833px)
        }

        .logo-split-past .logo-split-li:nth-child(8) .img {
            background-position-y: calc(-24.67014vw - -9.86806px)
        }

        .logo-split-past .logo-split-li:nth-child(9) .img {
            background-position-y: calc(-28.19444vw - -11.27778px)
        }

        .logo-split-past .logo-split-li:nth-child(10) .img {
            background-position-y: calc(-31.71875vw - -12.6875px)
        }

        .logo-split-past .logo-split-li:nth-child(11) .img {
            background-position-y: calc(-35.24306vw - -14.09722px)
        }

        .logo-split-past .logo-split-li:nth-child(12) .img {
            background-position-y: calc(-38.76736vw - -15.50694px)
        }

        .logo-split-past [data-shown="1"] .logo-split-li:nth-child(0) {
            transform: translate(0);
            transition-delay: 0s
        }

        .logo-split-past .logo-split-li[data-n="0"] .img {
            background-position-x: calc(0vw - 0px)
        }

        .logo-split-past [data-shown="1"] .logo-split-li:first-child {
            transform: translate(0);
            transition-delay: .06s
        }

        .logo-split-past .logo-split-li[data-n="1"] .img {
            background-position-x: calc(11.11111vw - 4.44444px)
        }

        .logo-split-past [data-shown="1"] .logo-split-li:nth-child(2) {
            transform: translate(0);
            transition-delay: .12s
        }

        .logo-split-past .logo-split-li[data-n="2"] .img {
            background-position-x: calc(22.22222vw - 8.88889px)
        }

        .logo-split-past [data-shown="1"] .logo-split-li:nth-child(3) {
            transform: translate(0);
            transition-delay: .18s
        }

        .logo-split-past .logo-split-li[data-n="3"] .img {
            background-position-x: calc(33.33333vw - 13.33333px)
        }

        .logo-split-past [data-shown="1"] .logo-split-li:nth-child(4) {
            transform: translate(0);
            transition-delay: .24s
        }

        .logo-split-past .logo-split-li[data-n="4"] .img {
            background-position-x: calc(44.44444vw - 17.77778px)
        }

        .logo-split-past [data-shown="1"] .logo-split-li:nth-child(5) {
            transform: translate(0);
            transition-delay: .3s
        }

        .logo-split-past .logo-split-li[data-n="5"] .img {
            background-position-x: calc(55.55556vw - 22.22222px)
        }

        .logo-split-past [data-shown="1"] .logo-split-li:nth-child(6) {
            transform: translate(0);
            transition-delay: .36s
        }

        .logo-split-past .logo-split-li[data-n="6"] .img {
            background-position-x: calc(66.66667vw - 26.66667px)
        }

        .logo-split-past [data-shown="1"] .logo-split-li:nth-child(7) {
            transform: translate(0);
            transition-delay: .42s
        }

        .logo-split-past .logo-split-li[data-n="7"] .img {
            background-position-x: calc(77.77778vw - 31.11111px)
        }

        .logo-split-past [data-shown="1"] .logo-split-li:nth-child(8) {
            transform: translate(0);
            transition-delay: .48s
        }

        .logo-split-past .logo-split-li[data-n="8"] .img {
            background-position-x: calc(88.88889vw - 35.55556px)
        }

        .logo-split-past [data-shown="1"] .logo-split-li:nth-child(9) {
            transform: translate(0);
            transition-delay: .54s
        }

        .logo-split-past .logo-split-li[data-n="9"] .img {
            background-position-x: calc(100vw - 40px)
        }

        .logo-split-past [data-shown="1"] .logo-split-li:nth-child(10) {
            transform: translate(0);
            transition-delay: .6s
        }

        .logo-split-past .logo-split-li[data-n="10"] .img {
            background-position-x: calc(111.11111vw - 44.44444px)
        }

        .logo-split-past [data-shown="1"] .logo-split-li:nth-child(11) {
            transform: translate(0);
            transition-delay: .66s
        }

        .logo-split-past .logo-split-li[data-n="11"] .img {
            background-position-x: calc(122.22222vw - 48.88889px)
        }

        .logo-split-past [data-shown="1"] .logo-split-li:nth-child(12) {
            transform: translate(0);
            transition-delay: .72s
        }

        .logo-split-past .logo-split-li[data-n="12"] .img {
            background-position-x: calc(133.33333vw - 53.33333px)
        }
    }

    [data-bg=dark] {
        background-color: var(--col-black)
    }

    [data-bg=dark],
    [data-bg=dark] a {
        color: var(--col-white)
    }

    [data-bg=dark] .border .b {
        background: var(--col-white)
    }

    [data-bg=dark] .border .num {
        color: var(--col-white)
    }

    [data-theme=light] [data-bg=dark] {
        color: var(--col-black);
        background-color: var(--col-white)
    }

    [data-theme=light] [data-bg=dark] a {
        color: var(--col-black)
    }

    [data-theme=light] [data-bg=dark] .border .b {
        background: var(--col-black)
    }

    [data-theme=light] [data-bg=dark] .border .num {
        color: var(--col-black)
    }

    [data-theme=light] .lead-box,
    [data-theme=light] .page-title-support {
        opacity: .8
    }

    [data-theme=light] .border,
    [data-theme=light] .border.sub {
        opacity: .3
    }

    [data-theme=light] .ui-btn-link-re .t,
    [data-theme=light] .ui-cursor-text .t {
        color: var(--col-black)
    }

    [data-theme=light] .ui-btn-link-re .o {
        border: 1px solid var(--col-black)
    }

    [data-theme=light] .ui-btn-link-re .o:before {
        background-color: var(--col-white)
    }

    [data-theme=light] .ui-btn-link-re .o:after {
        background-color: var(--col-black)
    }

    [data-theme=light] [data-page-theme=dark] .ui-btn-link .t {
        color: var(--col-black)
    }

    [data-theme=light] [data-page-theme=dark] .ui-btn-link .o {
        border: 1px solid var(--col-black)
    }

    [data-theme=light] [data-page-theme=dark] .ui-btn-link .o:before {
        visibility: hidden;
        background-color: var(--col-white)
    }

    [data-theme=light] [data-page-theme=dark] .ui-btn-link .o:after {
        visibility: hidden;
        background-color: var(--col-black)
    }

    [data-theme=light] .ui-btn-link-re:hover .t,
    [data-theme=light] [data-page-theme=dark] .site-lang:hover .ui-btn-link .t {
        color: var(--col-white)
    }

    [data-theme=light] .ui-btn-link-re:hover .o,
    [data-theme=light] [data-page-theme=dark] .site-lang:hover .ui-btn-link .o {
        border: 1px solid var(--col-black)
    }

    [data-theme=light] .ui-btn-link-re:hover .o:before,
    [data-theme=light] [data-page-theme=dark] .site-lang:hover .ui-btn-link .o:before {
        visibility: visible;
        background: var(--col-black)
    }

    [data-theme=light] .ui-btn-link-re:hover .o:after,
    [data-theme=light] [data-page-theme=dark] .site-lang:hover .ui-btn-link .o:after {
        visibility: visible;
        transform: scaleY(1);
        transform-origin: bottom
    }

    [data-theme=light] .site-navi-ul a {
        color: var(--col-black)
    }

    [data-theme=light] .site-navi-bg div {
        background: var(--col-white)
    }

    [data-theme=light] .site-navi-lang .ui-btn-link.diseble .t {
        color: var(--col-black)
    }

    .is-menu-opened.has-scrollover-navi[data-theme=light] .site-navi-ul .u div {
        background: var(--col-black)
    }

    .is-menu-opened.has-scrollover-navi[data-theme=light] .site-navi,
    .is-menu-opened.has-scrollover-navi[data-theme=light] .site-navi a {
        color: var(--col-black)
    }

    [data-page-theme=dark] .page-origin,
    [data-page-theme=dark] .page-origin a,
    [data-page-theme=dark] .site-name,
    [data-page-theme=dark] .site-navi a {
        color: var(--col-white)
    }

    [data-theme=light][data-page-theme=dark] {
        background-color: var(--col-white)
    }

    [data-theme=light][data-page-theme=dark] .page-origin,
    [data-theme=light][data-page-theme=dark] .page-origin a,
    [data-theme=light][data-page-theme=dark] .site-name,
    [data-theme=light][data-page-theme=dark] .site-navi a {
        color: var(--col-black)
    }

    [data-theme=light][data-page-theme=dark] .slide-scroll-map-li>div,
    [data-theme=light][data-page-theme=dark] .slide-scroll-thumb .pivot {
        border: 1px solid var(--col-black)
    }

    [data-theme=light][data-page-theme=dark] .slide-scroll-map-li>div>div {
        background-color: var(--col-black)
    }

    [data-bg=dark] .ui-btn-arrow,
    [data-page-theme=dark] .ui-btn-arrow,
    [data-scheme=dark] .ui-btn-arrow {
        color: var(--col-black)
    }

    [data-bg=dark] .site-navi-ul .u div,
    [data-bg=dark] .ui-btn-arrow .b,
    [data-bg=dark] .ui-link-underline .u,
    [data-page-theme=dark] .site-navi-ul .u div,
    [data-page-theme=dark] .ui-btn-arrow .b,
    [data-page-theme=dark] .ui-link-underline .u,
    [data-scheme=dark] .site-navi-ul .u div,
    [data-scheme=dark] .ui-btn-arrow .b,
    [data-scheme=dark] .ui-link-underline .u {
        background: var(--col-white)
    }

    [data-bg=dark] .ui-btn-circle .txt,
    [data-page-theme=dark] .ui-btn-circle .txt,
    [data-scheme=dark] .ui-btn-circle .txt {
        color: var(--col-black)
    }

    [data-bg=dark] .ui-btn-circle.ui-link-underline .u,
    [data-page-theme=dark] .ui-btn-circle.ui-link-underline .u,
    [data-scheme=dark] .ui-btn-circle.ui-link-underline .u {
        background: var(--col-black)
    }

    [data-bg=dark] .ui-btn-circle .b,
    [data-page-theme=dark] .ui-btn-circle .b,
    [data-scheme=dark] .ui-btn-circle .b {
        background: var(--col-white)
    }

    [data-theme=light] [data-bg=dark] .ui-btn-arrow,
    [data-theme=light][data-page-theme=dark] .ui-btn-arrow {
        color: var(--col-white)
    }

    [data-theme=light] [data-bg=dark] .site-navi-ul .u div,
    [data-theme=light] [data-bg=dark] .ui-btn-arrow .b,
    [data-theme=light] [data-bg=dark] .ui-link-underline .u,
    [data-theme=light][data-page-theme=dark] .site-navi-ul .u div,
    [data-theme=light][data-page-theme=dark] .ui-btn-arrow .b,
    [data-theme=light][data-page-theme=dark] .ui-link-underline .u {
        background: var(--col-black)
    }

    [data-theme=light] [data-bg=dark] .ui-btn-circle .txt,
    [data-theme=light][data-page-theme=dark] .ui-btn-circle .txt {
        color: var(--col-white)
    }

    [data-theme=light] [data-bg=dark] .ui-btn-circle.ui-link-underline .u,
    [data-theme=light][data-page-theme=dark] .ui-btn-circle.ui-link-underline .u {
        background: var(--col-white)
    }

    [data-theme=light] [data-bg=dark] .ui-btn-circle .b,
    [data-theme=light][data-page-theme=dark] .ui-btn-circle .b {
        background: var(--col-black)
    }

    [data-bg=dark] {
        background-color: var(--col-black)
    }

    [data-bg=dark],
    [data-bg=dark] a {
        color: var(--col-white)
    }

    [data-bg=dark] .border .b {
        background: var(--col-white)
    }

    [data-bg=dark] .border .num {
        color: var(--col-white)
    }

    [data-theme=light] [data-bg=dark] {
        color: var(--col-black);
        background-color: var(--col-white)
    }

    [data-theme=light] [data-bg=dark] a {
        color: var(--col-black)
    }

    [data-theme=light] [data-bg=dark] .border .b {
        background: var(--col-black)
    }

    [data-theme=light] [data-bg=dark] .border .num {
        color: var(--col-black)
    }

    [data-theme=light] .lead-box,
    [data-theme=light] .page-title-support {
        opacity: .8
    }

    [data-theme=light] .border,
    [data-theme=light] .border.sub {
        opacity: .3
    }

    [data-theme=light] .ui-btn-link-re .t,
    [data-theme=light] .ui-cursor-text .t {
        color: var(--col-black)
    }

    [data-theme=light] .ui-btn-link-re .o {
        border: 1px solid var(--col-black)
    }

    [data-theme=light] .ui-btn-link-re .o:before {
        background-color: var(--col-white)
    }

    [data-theme=light] .ui-btn-link-re .o:after {
        background-color: var(--col-black)
    }

    [data-theme=light] [data-page-theme=dark] .ui-btn-link .t {
        color: var(--col-black)
    }

    [data-theme=light] [data-page-theme=dark] .ui-btn-link .o {
        border: 1px solid var(--col-black)
    }

    [data-theme=light] [data-page-theme=dark] .ui-btn-link .o:before {
        visibility: hidden;
        background-color: var(--col-white)
    }

    [data-theme=light] [data-page-theme=dark] .ui-btn-link .o:after {
        visibility: hidden;
        background-color: var(--col-black)
    }

    [data-theme=light] .ui-btn-link-re:hover .t,
    [data-theme=light] [data-page-theme=dark] .site-lang:hover .ui-btn-link .t {
        color: var(--col-white)
    }

    [data-theme=light] .ui-btn-link-re:hover .o,
    [data-theme=light] [data-page-theme=dark] .site-lang:hover .ui-btn-link .o {
        border: 1px solid var(--col-black)
    }

    [data-theme=light] .ui-btn-link-re:hover .o:before,
    [data-theme=light] [data-page-theme=dark] .site-lang:hover .ui-btn-link .o:before {
        visibility: visible;
        background: var(--col-black)
    }

    [data-theme=light] .ui-btn-link-re:hover .o:after,
    [data-theme=light] [data-page-theme=dark] .site-lang:hover .ui-btn-link .o:after {
        visibility: visible;
        transform: scaleY(1);
        transform-origin: bottom
    }

    [data-theme=light] .site-navi-ul a {
        color: var(--col-black)
    }

    [data-theme=light] .site-navi-bg div {
        background: var(--col-white)
    }

    [data-theme=light] .site-navi-lang .ui-btn-link.diseble .t {
        color: var(--col-black)
    }

    .is-menu-opened.has-scrollover-navi[data-theme=light] .site-navi-ul .u div {
        background: var(--col-black)
    }

    .is-menu-opened.has-scrollover-navi[data-theme=light] .site-navi,
    .is-menu-opened.has-scrollover-navi[data-theme=light] .site-navi a {
        color: var(--col-black)
    }

    [data-page-theme=dark] .page-origin,
    [data-page-theme=dark] .page-origin a,
    [data-page-theme=dark] .site-name,
    [data-page-theme=dark] .site-navi a {
        color: var(--col-white)
    }

    [data-theme=light][data-page-theme=dark] {
        background-color: var(--col-white)
    }

    [data-theme=light][data-page-theme=dark] .page-origin,
    [data-theme=light][data-page-theme=dark] .page-origin a,
    [data-theme=light][data-page-theme=dark] .site-name,
    [data-theme=light][data-page-theme=dark] .site-navi a {
        color: var(--col-black)
    }

    [data-theme=light][data-page-theme=dark] .slide-scroll-map-li>div,
    [data-theme=light][data-page-theme=dark] .slide-scroll-thumb .pivot {
        border: 1px solid var(--col-black)
    }

    [data-theme=light][data-page-theme=dark] .slide-scroll-map-li>div>div {
        background-color: var(--col-black)
    }

    [data-bg=dark] .ui-btn-arrow,
    [data-page-theme=dark] .ui-btn-arrow,
    [data-scheme=dark] .ui-btn-arrow {
        color: var(--col-black)
    }

    [data-bg=dark] .site-navi-ul .u div,
    [data-bg=dark] .ui-btn-arrow .b,
    [data-bg=dark] .ui-link-underline .u,
    [data-page-theme=dark] .site-navi-ul .u div,
    [data-page-theme=dark] .ui-btn-arrow .b,
    [data-page-theme=dark] .ui-link-underline .u,
    [data-scheme=dark] .site-navi-ul .u div,
    [data-scheme=dark] .ui-btn-arrow .b,
    [data-scheme=dark] .ui-link-underline .u {
        background: var(--col-white)
    }

    [data-bg=dark] .ui-btn-circle .txt,
    [data-page-theme=dark] .ui-btn-circle .txt,
    [data-scheme=dark] .ui-btn-circle .txt {
        color: var(--col-black)
    }

    [data-bg=dark] .ui-btn-circle.ui-link-underline .u,
    [data-page-theme=dark] .ui-btn-circle.ui-link-underline .u,
    [data-scheme=dark] .ui-btn-circle.ui-link-underline .u {
        background: var(--col-black)
    }

    [data-bg=dark] .ui-btn-circle .b,
    [data-page-theme=dark] .ui-btn-circle .b,
    [data-scheme=dark] .ui-btn-circle .b {
        background: var(--col-white)
    }

    [data-theme=light] [data-bg=dark] .ui-btn-arrow,
    [data-theme=light][data-page-theme=dark] .ui-btn-arrow {
        color: var(--col-white)
    }

    [data-theme=light] [data-bg=dark] .site-navi-ul .u div,
    [data-theme=light] [data-bg=dark] .ui-btn-arrow .b,
    [data-theme=light] [data-bg=dark] .ui-link-underline .u,
    [data-theme=light][data-page-theme=dark] .site-navi-ul .u div,
    [data-theme=light][data-page-theme=dark] .ui-btn-arrow .b,
    [data-theme=light][data-page-theme=dark] .ui-link-underline .u {
        background: var(--col-black)
    }

    [data-theme=light] [data-bg=dark] .ui-btn-circle .txt,
    [data-theme=light][data-page-theme=dark] .ui-btn-circle .txt {
        color: var(--col-white)
    }

    [data-theme=light] [data-bg=dark] .ui-btn-circle.ui-link-underline .u,
    [data-theme=light][data-page-theme=dark] .ui-btn-circle.ui-link-underline .u {
        background: var(--col-white)
    }

    [data-theme=light] [data-bg=dark] .ui-btn-circle .b,
    [data-theme=light][data-page-theme=dark] .ui-btn-circle .b {
        background: var(--col-black)
    }

    .w-300 {
        font-weight: 300
    }

    .w-400 {
        font-weight: 400
    }

    .w-500 {
        font-weight: 500
    }

    .w-600 {
        font-weight: 600
    }

    .w-700 {
        font-weight: 700
    }

    .w-800 {
        font-weight: 800
    }

    .tx-c {
        text-align: center
    }

    [class*=" i-"],
    [class^=i-] {
        font-family: i !important;
        speak: never;
        font-style: normal;
        font-weight: 400;
        font-variant: normal;
        text-transform: none;
        line-height: 1
    }

    .i-star:before {
        content: "\e901"
    }

    .i-arrow-right:before {
        content: "\e900"
    }

    .f-xxxs,
    .slide-plane-parts {
        font-size: .763vw
    }

    .border .y,
    .features-n,
    .lead-box,
    .logo-split-n,
    .single-info-body .editor,
    .single-info-head,
    .site-navi-ul .site-subnavi a,
    .ui-cursor-body,
    .ui-link-table,
    body .f-xxs {
        font-size: .833vw
    }

    .address,
    .ui-btn-arrow .i,
    .ui-btn-circle,
    .ui-btn-link,
    .ui-btn-txt,
    .ui-link,
    body .f-xs {
        font-size: .902vw
    }

    .star,
    body .f-s {
        font-size: .972vw
    }

    .site-navi-ul a,
    html {
        font-size: 1.041vw
    }

    .editor {
        font-size: 1.111vw
    }

    .career-name {
        font-size: 1.805vw
    }

    .logo-split-h,
    .partner-title {
        font-size: 2.083vw
    }

    .team-name {
        font-size: 2.9vw
    }

    .p1 {
        font-size: 3.125vw
    }

    .editor h3 {
        font-size: 4.166vw
    }

    .features-h .everett,
    .mq-e,
    .slide-plane-title .l.even {
        font-size: 6.25vw
    }

    .features-h,
    .features-h .gallery,
    .mq-g,
    .section-big-title,
    .slide-plane-title .l.odd {
        font-size: 7.25vw
    }

    .footer-title-a .s,
    .footer-title-a .w,
    .page-title .l.even {
        font-size: 9.722vw
    }

    .footer-title-a.gallery .w,
    .footer-title-a .w[data-w=IN],
    .page-title .l.odd {
        font-size: 11.277vw
    }

    .section-big-title {
        font-size: 12.083vw
    }

    .subpage-header .page-title .l.even {
        font-size: 10.416vw
    }

    .subpage-header .page-title .l.odd {
        font-size: 12.083vw
    }

    [lang=ja] .p1 {
        font-size: 2.5vw
    }

    [lang=ja] .editor {
        font-size: .972vw
    }

    @media (min-width:1680px) {

        .f-xxxs,
        .slide-plane-parts {
            font-size: .687vw
        }

        .border .y,
        .features-n,
        .lead-box,
        .logo-split-n,
        .single-info-body .editor,
        .single-info-head,
        .site-navi-ul .site-subnavi a,
        .ui-cursor-body,
        .ui-link-table,
        body .f-xxs {
            font-size: .75vw
        }

        .address,
        .ui-btn-arrow .i,
        .ui-btn-circle,
        .ui-btn-link,
        .ui-btn-txt,
        .ui-link,
        body .f-xs {
            font-size: .812vw
        }

        .star,
        body .f-s {
            font-size: .875vw
        }

        .site-navi-ul a,
        html {
            font-size: .937vw
        }

        .editor {
            font-size: 1vw
        }

        .career-name {
            font-size: 1.625vw
        }

        .logo-split-h,
        .partner-title {
            font-size: 1.875vw
        }

        .team-name {
            font-size: 2.61vw
        }

        .p1 {
            font-size: 2.812vw
        }

        .editor h3 {
            font-size: 3.75vw
        }

        .features-h .everett,
        .mq-e,
        .slide-plane-title .l.even {
            font-size: 5.625vw
        }

        .features-h,
        .features-h .gallery,
        .mq-g,
        .section-big-title,
        .slide-plane-title .l.odd {
            font-size: 6.524vw
        }

        .footer-title-a .s,
        .footer-title-a .w,
        .page-title .l.even {
            font-size: 8.75vw
        }

        .footer-title-a.gallery .w,
        .footer-title-a .w[data-w=IN],
        .page-title .l.odd {
            font-size: 10.149vw
        }

        .section-big-title {
            font-size: 10.875vw
        }

        .subpage-header .page-title .l.even {
            font-size: 9.375vw
        }

        .subpage-header .page-title .l.odd {
            font-size: 10.875vw
        }

        [lang=ja] .p1 {
            font-size: 2.25vw
        }

        [lang=ja] .editor {
            font-size: .875vw
        }
    }

    @media (max-width:1430px) {
        .lead-box {
            font-size: 12px
        }

        .address,
        .border .y,
        .f-xxxs,
        .features-n,
        .logo-split-n,
        .single-info-body .editor,
        .single-info-head,
        .site-navi-ul .site-subnavi a,
        .slide-plane-parts,
        .ui-btn-arrow .i,
        .ui-btn-circle,
        .ui-btn-link,
        .ui-btn-txt,
        .ui-cursor-body,
        .ui-link,
        .ui-link-table,
        body .f-xs,
        body .f-xxs {
            font-size: 13px
        }

        .star,
        body .f-s {
            font-size: 14px
        }

        .site-navi-ul a,
        html {
            font-size: 15px
        }

        .editor {
            font-size: 16px
        }

        [lang=ja] .editor {
            font-size: 14px
        }
    }

    @media (max-width:1024px) {

        .address,
        .border .y,
        .f-xxxs,
        .features-n,
        .lead-box,
        .logo-split-n,
        .single-info-body .editor,
        .single-info-head,
        .site-navi-ul .site-subnavi a,
        .slide-plane-parts,
        .ui-btn-arrow .i,
        .ui-btn-circle,
        .ui-btn-link,
        .ui-btn-txt,
        .ui-cursor-body,
        .ui-link,
        .ui-link-table,
        body .f-xs,
        body .f-xxs {
            font-size: 13px
        }

        .star,
        body .f-s {
            font-size: 14px
        }

        .site-navi-ul a,
        html {
            font-size: 15px
        }

        .editor {
            font-size: 16px
        }

        [lang=ja] .editor {
            font-size: 14px
        }

        .career-name {
            font-size: 26px
        }

        .logo-split-h,
        .partner-title {
            font-size: 30px
        }

        .team-name {
            font-size: 41.76px
        }

        .p1 {
            font-size: 45px
        }

        [lang=ja] .p1 {
            font-size: 36px
        }

        .editor h3 {
            font-size: 60px
        }

        .features-h .everett,
        .mq-e,
        .slide-plane-title .l.even {
            font-size: 75px
        }

        .features-h,
        .features-h .gallery,
        .mq-g,
        .section-big-title,
        .slide-plane-title .l.odd {
            font-size: 87px
        }

        .footer-title-a .s,
        .footer-title-a .w,
        .page-title .l.even {
            font-size: 105px
        }

        .footer-title-a.gallery .w,
        .footer-title-a .w[data-w=IN],
        .page-title .l.odd,
        .section-big-title {
            font-size: 121.8px
        }

        .subpage-header .page-title .l.even {
            font-size: 105px
        }

        .subpage-header .page-title .l.odd {
            font-size: 121.8px
        }
    }

    @media (max-width:768px) {

        .career-name,
        .team-name {
            font-size: 20px
        }

        .p1 {
            font-size: 45px
        }

        [lang=ja] .p1 {
            font-size: 36px
        }

        .editor h3 {
            font-size: 45px
        }

        .features-h .everett,
        .mq-e,
        .slide-plane-title .l.even {
            font-size: 60px
        }

        .features-h,
        .features-h .gallery,
        .mq-g,
        .section-big-title,
        .slide-plane-title .l.odd {
            font-size: 69.6px
        }

        .section-big-title {
            font-size: 87px
        }

        .footer-title-a .s,
        .footer-title-a .w,
        .page-title .l.even {
            font-size: 90px
        }

        .footer-title-a.gallery .w,
        .footer-title-a .w[data-w=IN],
        .page-title .l.odd {
            font-size: 104.4px
        }

        .subpage-header .page-title .l.even {
            font-size: 105px
        }

        .subpage-header .page-title .l.odd {
            font-size: 121.8px
        }

        .single-footer .page-title .l.even,
        .single-header .page-title .l.even {
            font-size: 75px
        }

        .single-footer .page-title .l.odd,
        .single-header .page-title .l.odd {
            font-size: 87px
        }
    }

    @media (max-width:640px) {
        .star {
            font-size: 12px
        }

        .address,
        .border .y,
        .editor,
        .f-xxxs,
        .features-n,
        .lead-box,
        .logo-split-n,
        .single-info-body .editor,
        .single-info-head,
        .site-navi-ul .site-subnavi a,
        .site-navi-ul a,
        .slide-plane-parts,
        .team-name,
        .ui-btn-arrow .i,
        .ui-btn-circle,
        .ui-btn-link,
        .ui-btn-txt,
        .ui-cursor-body,
        .ui-link,
        .ui-link-table,
        [lang=ja] .editor,
        body .f-s,
        body .f-xs,
        body .f-xxs,
        html {
            font-size: 14.5px
        }

        .logo-split-n {
            font-size: 14px
        }

        .career-name,
        .logo-split-h,
        .p1,
        .partner-title,
        [lang=ja] .p1 {
            font-size: 20px
        }

        .editor h3 {
            font-size: 30px
        }

        .features-h .everett,
        .mq-e,
        .slide-plane-title .l.even {
            font-size: 9.375vw
        }

        .features-h,
        .features-h .gallery,
        .mq-g,
        .section-big-title,
        .slide-plane-title .l.odd {
            font-size: 10.875vw
        }

        .footer-title-a .s,
        .footer-title-a .w,
        .page-title .l.even {
            font-size: 12.5vw
        }

        .footer-title-a.gallery .w,
        .footer-title-a .w[data-w=IN],
        .page-title .l.odd {
            font-size: 14.5vw
        }

        .subpage-header .page-title .l.even {
            font-size: 12.5vw
        }

        .subpage-header .page-title .l.odd {
            font-size: 14.5vw
        }

        .single-footer .page-title .l.even,
        .single-header .page-title .l.even {
            font-size: 10.416vw
        }

        .single-footer .page-title .l.odd,
        .single-header .page-title .l.odd {
            font-size: 12.083vw
        }
    }

    [data-bg=dark] {
        background-color: var(--col-black)
    }

    [data-bg=dark],
    [data-bg=dark] a {
        color: var(--col-white)
    }

    [data-bg=dark] .border .b {
        background: var(--col-white)
    }

    [data-bg=dark] .border .num {
        color: var(--col-white)
    }

    [data-theme=light] [data-bg=dark] {
        color: var(--col-black);
        background-color: var(--col-white)
    }

    [data-theme=light] [data-bg=dark] a {
        color: var(--col-black)
    }

    [data-theme=light] [data-bg=dark] .border .b {
        background: var(--col-black)
    }

    [data-theme=light] [data-bg=dark] .border .num {
        color: var(--col-black)
    }

    [data-theme=light] .lead-box,
    [data-theme=light] .page-title-support {
        opacity: .8
    }

    [data-theme=light] .border,
    [data-theme=light] .border.sub {
        opacity: .3
    }

    [data-theme=light] .ui-btn-link-re .t,
    [data-theme=light] .ui-cursor-text .t {
        color: var(--col-black)
    }

    [data-theme=light] .ui-btn-link-re .o {
        border: 1px solid var(--col-black)
    }

    [data-theme=light] .ui-btn-link-re .o:before {
        background-color: var(--col-white)
    }

    [data-theme=light] .ui-btn-link-re .o:after {
        background-color: var(--col-black)
    }

    [data-theme=light] [data-page-theme=dark] .ui-btn-link .t {
        color: var(--col-black)
    }

    [data-theme=light] [data-page-theme=dark] .ui-btn-link .o {
        border: 1px solid var(--col-black)
    }

    [data-theme=light] [data-page-theme=dark] .ui-btn-link .o:before {
        visibility: hidden;
        background-color: var(--col-white)
    }

    [data-theme=light] [data-page-theme=dark] .ui-btn-link .o:after {
        visibility: hidden;
        background-color: var(--col-black)
    }

    [data-theme=light] .ui-btn-link-re:hover .t,
    [data-theme=light] [data-page-theme=dark] .site-lang:hover .ui-btn-link .t {
        color: var(--col-white)
    }

    [data-theme=light] .ui-btn-link-re:hover .o,
    [data-theme=light] [data-page-theme=dark] .site-lang:hover .ui-btn-link .o {
        border: 1px solid var(--col-black)
    }

    [data-theme=light] .ui-btn-link-re:hover .o:before,
    [data-theme=light] [data-page-theme=dark] .site-lang:hover .ui-btn-link .o:before {
        visibility: visible;
        background: var(--col-black)
    }

    [data-theme=light] .ui-btn-link-re:hover .o:after,
    [data-theme=light] [data-page-theme=dark] .site-lang:hover .ui-btn-link .o:after {
        visibility: visible;
        transform: scaleY(1);
        transform-origin: bottom
    }

    [data-theme=light] .site-navi-ul a {
        color: var(--col-black)
    }

    [data-theme=light] .site-navi-bg div {
        background: var(--col-white)
    }

    [data-theme=light] .site-navi-lang .ui-btn-link.diseble .t {
        color: var(--col-black)
    }

    .is-menu-opened.has-scrollover-navi[data-theme=light] .site-navi-ul .u div {
        background: var(--col-black)
    }

    .is-menu-opened.has-scrollover-navi[data-theme=light] .site-navi,
    .is-menu-opened.has-scrollover-navi[data-theme=light] .site-navi a {
        color: var(--col-black)
    }

    [data-page-theme=dark] .page-origin,
    [data-page-theme=dark] .page-origin a,
    [data-page-theme=dark] .site-name,
    [data-page-theme=dark] .site-navi a {
        color: var(--col-white)
    }

    [data-theme=light][data-page-theme=dark] {
        background-color: var(--col-white)
    }

    [data-theme=light][data-page-theme=dark] .page-origin,
    [data-theme=light][data-page-theme=dark] .page-origin a,
    [data-theme=light][data-page-theme=dark] .site-name,
    [data-theme=light][data-page-theme=dark] .site-navi a {
        color: var(--col-black)
    }

    [data-theme=light][data-page-theme=dark] .slide-scroll-map-li>div,
    [data-theme=light][data-page-theme=dark] .slide-scroll-thumb .pivot {
        border: 1px solid var(--col-black)
    }

    [data-theme=light][data-page-theme=dark] .slide-scroll-map-li>div>div {
        background-color: var(--col-black)
    }

    [data-bg=dark] .ui-btn-arrow,
    [data-page-theme=dark] .ui-btn-arrow,
    [data-scheme=dark] .ui-btn-arrow {
        color: var(--col-black)
    }

    [data-bg=dark] .site-navi-ul .u div,
    [data-bg=dark] .ui-btn-arrow .b,
    [data-bg=dark] .ui-link-underline .u,
    [data-page-theme=dark] .site-navi-ul .u div,
    [data-page-theme=dark] .ui-btn-arrow .b,
    [data-page-theme=dark] .ui-link-underline .u,
    [data-scheme=dark] .site-navi-ul .u div,
    [data-scheme=dark] .ui-btn-arrow .b,
    [data-scheme=dark] .ui-link-underline .u {
        background: var(--col-white)
    }

    [data-bg=dark] .ui-btn-circle .txt,
    [data-page-theme=dark] .ui-btn-circle .txt,
    [data-scheme=dark] .ui-btn-circle .txt {
        color: var(--col-black)
    }

    [data-bg=dark] .ui-btn-circle.ui-link-underline .u,
    [data-page-theme=dark] .ui-btn-circle.ui-link-underline .u,
    [data-scheme=dark] .ui-btn-circle.ui-link-underline .u {
        background: var(--col-black)
    }

    [data-bg=dark] .ui-btn-circle .b,
    [data-page-theme=dark] .ui-btn-circle .b,
    [data-scheme=dark] .ui-btn-circle .b {
        background: var(--col-white)
    }

    [data-theme=light] [data-bg=dark] .ui-btn-arrow,
    [data-theme=light][data-page-theme=dark] .ui-btn-arrow {
        color: var(--col-white)
    }

    [data-theme=light] [data-bg=dark] .site-navi-ul .u div,
    [data-theme=light] [data-bg=dark] .ui-btn-arrow .b,
    [data-theme=light] [data-bg=dark] .ui-link-underline .u,
    [data-theme=light][data-page-theme=dark] .site-navi-ul .u div,
    [data-theme=light][data-page-theme=dark] .ui-btn-arrow .b,
    [data-theme=light][data-page-theme=dark] .ui-link-underline .u {
        background: var(--col-black)
    }

    [data-theme=light] [data-bg=dark] .ui-btn-circle .txt,
    [data-theme=light][data-page-theme=dark] .ui-btn-circle .txt {
        color: var(--col-white)
    }

    [data-theme=light] [data-bg=dark] .ui-btn-circle.ui-link-underline .u,
    [data-theme=light][data-page-theme=dark] .ui-btn-circle.ui-link-underline .u {
        background: var(--col-white)
    }

    [data-theme=light] [data-bg=dark] .ui-btn-circle .b,
    [data-theme=light][data-page-theme=dark] .ui-btn-circle .b {
        background: var(--col-black)
    }

    @media screen\0 {
        .alert {
            position: fixed;
            z-index: 20;
            bottom: 0;
            left: 0;
            width: 100%;
            background: var(--col-black);
            color: var(--col-white);
            padding: 2em
        }

        .alert,
        .alert-brows {
            display: block !important
        }

        .alert a {
            color: var(--col-white);
            text-decoration: underline
        }
    }
    </style>
</body>

</html>