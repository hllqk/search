<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="icon" href="/favicon.svg" type="image/svg+xml">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#00aba9">
    <meta name="msapplication-TileColor" content="#00aba9">
    <meta name="theme-color" content="#ffffff">
    <script>
        ! function() {
            var e = window.matchMedia && window.matchMedia("(prefers-color-scheme: dark)").matches,
                t = localStorage.getItem("vueuse-color-scheme") || "auto";
            ("dark" === t || e && "light" !== t) && document.documentElement.classList.toggle("dark", !0)
        }()
    </script>
    <script type="module" async="" crossorigin="" src="/assets/app-872bbbf5.js"></script>
    <style>
        @charset "UTF-8";

        .sese-search-wrapper {
            transition: .4s
        }

        .sese-search-wrapper:hover {
            --tw-shadow: 0 10px 30px -10px rgb(0 0 0/.1), 0 1px 2px -1px rgb(0 0 0/.1);
            -webkit-box-shadow: var(--tw-ring-offset-shadow, 0 0 transparent), var(--tw-ring-shadow, 0 0 transparent), var(--tw-shadow);
            box-shadow: var(--tw-ring-offset-shadow, 0 0 transparent), var(--tw-ring-shadow, 0 0 transparent), var(--tw-shadow)
        }

        .sese-input {
            width: 30.5rem
        }

        @media (max-width:639.9px) {
            .sese-input {
                width: calc(100vw - 8rem)
            }
        }

        *,
        :after,
        :before {
            box-sizing: border-box;
            border-width: 0;
            border-style: solid;
            border-color: #e5e7eb
        }

        html {
            line-height: 1.5;
            -webkit-text-size-adjust: 100%;
            -moz-tab-size: 4;
            tab-size: 4;
            font-family: ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica Neue, Arial, Noto Sans, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", Segoe UI Symbol, "Noto Color Emoji"
        }

        body {
            margin: 0;
            line-height: inherit
        }

        a {
            color: inherit;
            text-decoration: inherit
        }

        button,
        input {
            font-family: inherit;
            font-size: 100%;
            font-weight: inherit;
            line-height: inherit;
            color: inherit;
            margin: 0;
            padding: 0
        }

        button {
            text-transform: none
        }

        button {
            -webkit-appearance: button;
            background-color: transparent;
            background-image: none
        }

        input::placeholder {
            opacity: 1;
            color: #9ca3af
        }

        button {
            cursor: pointer
        }

        img {
            display: block;
            vertical-align: middle
        }

        img {
            max-width: 100%;
            height: auto
        }

        :root {
            --se-c-text: #374151;
            --se-c-text-light: rgba(60, 60, 60, .6);
            --se-c-bg: transparent;
            --se-divider-light: #999;
            --se-divider-dark: #666
        }

        :root {
            --smc-font-sans: Raleway, -apple-system, "PingFang SC", "Microsoft YaHei", Arial, sans-serif;
            --smc-font-serif: "Songti SC", "Noto Serif SC", STZhongsong, STKaiti, KaiTi, Roboto, serif;
            --smc-font-mono: Menlo, Monaco, Consolas, "Courier New", monospace
        }

        :root {
            --smc-c-primary-light: #4eaaff;
            --smc-c-primary-lighter: #9bcfff;
            --smc-c-primary: #0078e7;
            --smc-theme-name: yun;
            --smc-line-height: 1.8;
            --smc-c-primary-rgb: 0, 120, 231;
            --smc-c-text: #24292e;
            --smc-c-text-light: #555;
            --smc-c-text-lighter: #666;
            --smc-header-bottom-color: #eaecef;
            --smc-border-color: var(--smc-c-primary-light);
            --smc-code-bg-color: #f6f8fa;
            --smc-link-color: #005eb4
        }

        :root {
            --prism-scheme: light;
            --prism-foreground: #6e6e6e;
            --prism-background: #f4f4f4;
            --prism-comment: #a8a8a8;
            --prism-string: #555555;
            --prism-literal: #333333;
            --prism-keyword: #000000;
            --prism-function: #4f4f4f;
            --prism-deleted: #333333;
            --prism-class: #333333;
            --prism-builtin: #757575;
            --prism-property: #333333;
            --prism-namespace: #4f4f4f;
            --prism-punctuation: #ababab;
            --prism-decorator: var(--prism-class);
            --prism-operator: var(--prism-punctuation);
            --prism-number: var(--prism-literal);
            --prism-boolean: var(--prism-literal);
            --prism-variable: var(--prism-literal);
            --prism-constant: var(--prism-literal);
            --prism-symbol: var(--prism-literal);
            --prism-interpolation: var(--prism-literal);
            --prism-selector: var(--prism-keyword);
            --prism-keyword-control: var(--prism-keyword);
            --prism-regex: var(--prism-string);
            --prism-json-property: var(--prism-property);
            --prism-inline-background: var(--prism-background);
            --prism-comment-style: italic;
            --prism-url-decoration: underline;
            --prism-line-number: #a5a5a5;
            --prism-line-number-gutter: #333333;
            --prism-line-highlight-background: #eeeeee;
            --prism-selection-background: #dddddd;
            --prism-marker-color: var(--prism-foreground);
            --prism-marker-opacity: .4;
            --prism-marker-font-size: .8em;
            --prism-font-size: 1em;
            --prism-line-height: 1.5em;
            --prism-font-family: monospace;
            --prism-inline-font-size: var(--prism-font-size);
            --prism-block-font-size: var(--prism-font-size);
            --prism-tab-size: 2;
            --prism-block-padding-x: 1em;
            --prism-block-padding-y: 1em;
            --prism-block-margin-x: 0;
            --prism-block-margin-y: .5em;
            --prism-block-radius: .3em;
            --prism-inline-padding-x: .3em;
            --prism-inline-padding-y: .1em;
            --prism-inline-radius: .3em
        }

        #app,
        body,
        html {
            color: var(--se-c-text);
            background-color: var(--se-c-bg);
            transition: all .2s ease;
            margin: 0;
            padding: 0;
            overflow-x: hidden
        }

        .btn {
            height: 2rem;
            min-width: 6rem
        }

        .sese-btn {
            position: relative;
            z-index: 0;
            --un-gradient-from: rgba(59, 130, 246, var(--un-from-opacity, 1));
            --un-gradient-to: rgba(59, 130, 246, 0);
            --un-gradient-stops: var(--un-gradient-from), var(--un-gradient-to);
            --un-gradient-to: rgba(29, 78, 216, var(--un-to-opacity, 1))
        }

        .sese-btn:before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            opacity: 0;
            transition: all .4s;
            z-index: -1;
            border-radius: .25rem;
            --un-gradient-from: rgba(239, 68, 68, var(--un-from-opacity, 1));
            --un-gradient-to: rgba(239, 68, 68, 0);
            --un-gradient-stops: var(--un-gradient-from), var(--un-gradient-to);
            --un-gradient-to: rgba(185, 28, 28, var(--un-to-opacity, 1));
            --un-gradient-shape: to right;
            --un-gradient: var(--un-gradient-shape), var(--un-gradient-stops);
            background-image: linear-gradient(var(--un-gradient))
        }

        .sese-btn:hover:before {
            opacity: 1
        }

        *,
        :after,
        :before {
            --un-rotate: 0;
            --un-rotate-x: 0;
            --un-rotate-y: 0;
            --un-rotate-z: 0;
            --un-scale-x: 1;
            --un-scale-y: 1;
            --un-scale-z: 1;
            --un-skew-x: 0;
            --un-skew-y: 0;
            --un-translate-x: 0;
            --un-translate-y: 0;
            --un-translate-z: 0;
            --un-scroll-snap-strictness: proximity;
            --un-border-spacing-x: 0;
            --un-border-spacing-y: 0;
            --un-ring-offset-shadow: 0 0 rgba(0, 0, 0, 0);
            --un-ring-shadow: 0 0 rgba(0, 0, 0, 0);
            --un-shadow: 0 0 rgba(0, 0, 0, 0);
            --un-ring-offset-width: 0px;
            --un-ring-offset-color: #fff;
            --un-ring-width: 0px;
            --un-ring-color: rgba(147, 197, 253, .5)
        }

        [i-ri-github-fill=""] {
            --un-icon: url("data:image/svg+xml;utf8,%3Csvg viewBox='0 0 24 24' width='1.2em' height='1.2em' xmlns='http://www.w3.org/2000/svg' %3E%3Cpath fill='currentColor' d='M12 2C6.475 2 2 6.475 2 12a9.994 9.994 0 0 0 6.838 9.488c.5.087.687-.213.687-.476c0-.237-.013-1.024-.013-1.862c-2.512.463-3.162-.612-3.362-1.175c-.113-.288-.6-1.175-1.025-1.413c-.35-.187-.85-.65-.013-.662c.788-.013 1.35.725 1.538 1.025c.9 1.512 2.338 1.087 2.912.825c.088-.65.35-1.087.638-1.337c-2.225-.25-4.55-1.113-4.55-4.938c0-1.088.387-1.987 1.025-2.688c-.1-.25-.45-1.275.1-2.65c0 0 .837-.262 2.75 1.026a9.28 9.28 0 0 1 2.5-.338c.85 0 1.7.112 2.5.337c1.912-1.3 2.75-1.024 2.75-1.024c.55 1.375.2 2.4.1 2.65c.637.7 1.025 1.587 1.025 2.687c0 3.838-2.337 4.688-4.562 4.938c.362.312.675.912.675 1.85c0 1.337-.013 2.412-.013 2.75c0 .262.188.574.688.474A10.016 10.016 0 0 0 22 12c0-5.525-4.475-10-10-10z'/%3E%3C/svg%3E");
            mask: var(--un-icon) no-repeat;
            mask-size: 100% 100%;
            -webkit-mask: var(--un-icon) no-repeat;
            -webkit-mask-size: 100% 100%;
            background-color: currentColor;
            color: inherit;
            width: 1.2em;
            height: 1.2em
        }

        [i-ri-github-line=""] {
            --un-icon: url("data:image/svg+xml;utf8,%3Csvg viewBox='0 0 24 24' width='1.2em' height='1.2em' xmlns='http://www.w3.org/2000/svg' %3E%3Cpath fill='currentColor' d='M5.883 18.653c-.3-.2-.558-.455-.86-.816a50.32 50.32 0 0 1-.466-.579c-.463-.575-.755-.84-1.057-.949a1 1 0 0 1 .676-1.883c.752.27 1.261.735 1.947 1.588c-.094-.117.34.427.433.539c.19.227.33.365.44.438c.204.137.587.196 1.15.14c.023-.382.094-.753.202-1.095C5.38 15.31 3.7 13.396 3.7 9.64c0-1.24.37-2.356 1.058-3.292c-.218-.894-.185-1.975.302-3.192a1 1 0 0 1 .63-.582c.081-.024.127-.035.208-.047c.803-.123 1.937.17 3.415 1.096A11.731 11.731 0 0 1 12 3.315c.912 0 1.818.104 2.684.308c1.477-.933 2.613-1.226 3.422-1.096c.085.013.157.03.218.05a1 1 0 0 1 .616.58c.487 1.216.52 2.297.302 3.19c.691.936 1.058 2.045 1.058 3.293c0 3.757-1.674 5.665-4.642 6.392c.125.415.19.879.19 1.38a300.492 300.492 0 0 1-.012 2.716a1 1 0 0 1-.019 1.958c-1.139.228-1.983-.532-1.983-1.525l.002-.446l.005-.705c.005-.708.007-1.338.007-1.998c0-.697-.183-1.152-.425-1.36c-.661-.57-.326-1.655.54-1.752c2.967-.333 4.337-1.482 4.337-4.66c0-.955-.312-1.744-.913-2.404a1 1 0 0 1-.19-1.045c.166-.414.237-.957.096-1.614l-.01.003c-.491.139-1.11.44-1.858.949a1 1 0 0 1-.833.135A9.626 9.626 0 0 0 12 5.315c-.89 0-1.772.119-2.592.35a1 1 0 0 1-.83-.134c-.752-.507-1.374-.807-1.868-.947c-.144.653-.073 1.194.092 1.607a1 1 0 0 1-.189 1.045C6.016 7.89 5.7 8.694 5.7 9.64c0 3.172 1.371 4.328 4.322 4.66c.865.097 1.201 1.177.544 1.748c-.192.168-.429.732-.429 1.364v3.15c0 .986-.835 1.725-1.96 1.528a1 1 0 0 1-.04-1.962v-.99c-.91.061-1.662-.088-2.254-.485z'/%3E%3C/svg%3E");
            mask: var(--un-icon) no-repeat;
            mask-size: 100% 100%;
            -webkit-mask: var(--un-icon) no-repeat;
            -webkit-mask-size: 100% 100%;
            background-color: currentColor;
            color: inherit;
            width: 1.2em;
            height: 1.2em
        }

        [i-ri-information-line=""] {
            --un-icon: url("data:image/svg+xml;utf8,%3Csvg viewBox='0 0 24 24' width='1.2em' height='1.2em' xmlns='http://www.w3.org/2000/svg' %3E%3Cpath fill='currentColor' d='M12 22C6.477 22 2 17.523 2 12S6.477 2 12 2s10 4.477 10 10s-4.477 10-10 10zm0-2a8 8 0 1 0 0-16a8 8 0 0 0 0 16zM11 7h2v2h-2V7zm0 4h2v6h-2v-6z'/%3E%3C/svg%3E");
            mask: var(--un-icon) no-repeat;
            mask-size: 100% 100%;
            -webkit-mask: var(--un-icon) no-repeat;
            -webkit-mask-size: 100% 100%;
            background-color: currentColor;
            color: inherit;
            width: 1.2em;
            height: 1.2em
        }

        [i-ri-search-line=""] {
            --un-icon: url("data:image/svg+xml;utf8,%3Csvg viewBox='0 0 24 24' width='1.2em' height='1.2em' xmlns='http://www.w3.org/2000/svg' %3E%3Cpath fill='currentColor' d='m18.031 16.617l4.283 4.282l-1.415 1.415l-4.282-4.283A8.96 8.96 0 0 1 11 20c-4.968 0-9-4.032-9-9s4.032-9 9-9s9 4.032 9 9a8.96 8.96 0 0 1-1.969 5.617zm-2.006-.742A6.977 6.977 0 0 0 18 11c0-3.868-3.133-7-7-7c-3.868 0-7 3.132-7 7c0 3.867 3.132 7 7 7a6.977 6.977 0 0 0 4.875-1.975l.15-.15z'/%3E%3C/svg%3E");
            mask: var(--un-icon) no-repeat;
            mask-size: 100% 100%;
            -webkit-mask: var(--un-icon) no-repeat;
            -webkit-mask-size: 100% 100%;
            background-color: currentColor;
            color: inherit;
            width: 1.2em;
            height: 1.2em
        }

        [i-ri-sun-line=""] {
            --un-icon: url("data:image/svg+xml;utf8,%3Csvg viewBox='0 0 24 24' width='1.2em' height='1.2em' xmlns='http://www.w3.org/2000/svg' %3E%3Cpath fill='currentColor' d='M12 18a6 6 0 1 1 0-12a6 6 0 0 1 0 12zm0-2a4 4 0 1 0 0-8a4 4 0 0 0 0 8zM11 1h2v3h-2V1zm0 19h2v3h-2v-3zM3.515 4.929l1.414-1.414L7.05 5.636L5.636 7.05L3.515 4.93zM16.95 18.364l1.414-1.414l2.121 2.121l-1.414 1.414l-2.121-2.121zm2.121-14.85l1.414 1.415l-2.121 2.121l-1.414-1.414l2.121-2.121zM5.636 16.95l1.414 1.414l-2.121 2.121l-1.414-1.414l2.121-2.121zM23 11v2h-3v-2h3zM4 11v2H1v-2h3z'/%3E%3C/svg%3E");
            mask: var(--un-icon) no-repeat;
            mask-size: 100% 100%;
            -webkit-mask: var(--un-icon) no-repeat;
            -webkit-mask-size: 100% 100%;
            background-color: currentColor;
            color: inherit;
            width: 1.2em;
            height: 1.2em
        }

        [i-ri-translate=""] {
            --un-icon: url("data:image/svg+xml;utf8,%3Csvg viewBox='0 0 24 24' width='1.2em' height='1.2em' xmlns='http://www.w3.org/2000/svg' %3E%3Cpath fill='currentColor' d='M5 15v2a2 2 0 0 0 1.85 1.995L7 19h3v2H7a4 4 0 0 1-4-4v-2h2zm13-5l4.4 11h-2.155l-1.201-3h-4.09l-1.199 3h-2.154L16 10h2zm-1 2.885L15.753 16h2.492L17 12.885zM8 2v2h4v7H8v3H6v-3H2V4h4V2h2zm9 1a4 4 0 0 1 4 4v2h-2V7a2 2 0 0 0-2-2h-3V3h3zM6 6H4v3h2V6zm4 0H8v3h2V6z'/%3E%3C/svg%3E");
            mask: var(--un-icon) no-repeat;
            mask-size: 100% 100%;
            -webkit-mask: var(--un-icon) no-repeat;
            -webkit-mask-size: 100% 100%;
            background-color: currentColor;
            color: inherit;
            width: 1.2em;
            height: 1.2em
        }

        .btn {
            display: inline-flex;
            cursor: pointer;
            align-items: center;
            justify-content: center;
            border-radius: .25rem;
            --un-bg-opacity: .6;
            padding-left: 1rem;
            padding-right: 1rem;
            --un-text-opacity: 1;
            color: rgba(255, 255, 255, var(--un-text-opacity));
            --un-shadow: var(--un-shadow-inset) 0 1px 3px 0 var(--un-shadow-color, rgba(0, 0, 0, .1)), var(--un-shadow-inset) 0 1px 2px -1px var(--un-shadow-color, rgba(0, 0, 0, .1));
            box-shadow: var(--un-ring-offset-shadow), var(--un-ring-shadow), var(--un-shadow);
            transition-property: color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter;
            transition-timing-function: cubic-bezier(.4, 0, .2, 1);
            transition-duration: .15s;
            transition-duration: .3s
        }

        .icon-btn {
            display: inline-flex;
            cursor: pointer;
            user-select: none;
            align-items: center;
            justify-content: center;
            opacity: .75;
            transition-property: color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter;
            transition-timing-function: cubic-bezier(.4, 0, .2, 1);
            transition-duration: .15s;
            transition-duration: .2s
        }

        .btn:disabled {
            cursor: default;
            --un-bg-opacity: 1;
            background-color: rgba(107, 114, 128, var(--un-bg-opacity));
            --un-bg-opacity: .3;
            opacity: .5
        }

        .icon-btn:hover {
            --un-text-opacity: 1;
            color: rgba(37, 99, 235, var(--un-text-opacity));
            opacity: 1
        }

        .btn:hover {
            --un-shadow: var(--un-shadow-inset) 0 4px 6px -1px var(--un-shadow-color, rgba(0, 0, 0, .1)), var(--un-shadow-inset) 0 2px 4px -2px var(--un-shadow-color, rgba(0, 0, 0, .1));
            box-shadow: var(--un-ring-offset-shadow), var(--un-ring-shadow), var(--un-shadow)
        }

        .btn:hover:disabled {
            --un-shadow-color: transparent
        }

        .btn:active,
        .btn:focus {
            outline: 2px solid transparent;
            outline-offset: 2px
        }

        .absolute {
            position: absolute
        }

        .fixed {
            position: fixed
        }

        .relative {
            position: relative
        }

        .bottom-0 {
            bottom: 0
        }

        .left-0 {
            left: 0
        }

        .right-0 {
            right: 0
        }

        .right-5 {
            right: 1.25rem
        }

        .top-5 {
            top: 1.25rem
        }

        .z-1 {
            z-index: 1
        }

        .m-3 {
            margin: .75rem
        }

        .mx-1 {
            margin-left: .25rem;
            margin-right: .25rem
        }

        .mx-2,
        [m~=x-2] {
            margin-left: .5rem;
            margin-right: .5rem
        }

        .ml-2 {
            margin-left: .5rem
        }

        .mr-2 {
            margin-right: .5rem
        }

        [m~=b-18] {
            margin-bottom: 4.5rem
        }

        [m~=b-4] {
            margin-bottom: 1rem
        }

        [m~=t-0] {
            margin-top: 0
        }

        .w-70 {
            width: 17.5rem
        }

        [h~="12"] {
            height: 3rem
        }

        [h~=full] {
            height: 100%
        }

        [h~=screen] {
            height: 100vh
        }

        [w~=full] {
            width: 100%
        }

        [w~=screen] {
            width: 100vw
        }

        .flex {
            display: flex
        }

        .inline-flex {
            display: inline-flex
        }

        .flex-col {
            flex-direction: column
        }

        .transform {
            transform: translate(var(--un-translate-x)) translateY(var(--un-translate-y)) translateZ(var(--un-translate-z)) rotate(var(--un-rotate)) rotateX(var(--un-rotate-x)) rotateY(var(--un-rotate-y)) rotate(var(--un-rotate-z)) skew(var(--un-skew-x)) skewY(var(--un-skew-y)) scaleX(var(--un-scale-x)) scaleY(var(--un-scale-y)) scaleZ(var(--un-scale-z))
        }

        .items-center {
            align-items: center
        }

        .justify-center {
            justify-content: center
        }

        [border~="~"] {
            border-width: 1px
        }

        [border~=gray-300] {
            --un-border-opacity: 1;
            border-color: rgba(209, 213, 219, var(--un-border-opacity))
        }

        [border~=rounded] {
            border-radius: .25rem
        }

        [rounded~=full] {
            border-radius: 9999px
        }

        [bg~=gray-100] {
            --un-bg-opacity: 1;
            background-color: rgba(243, 244, 246, var(--un-bg-opacity))
        }

        [bg~=transparent] {
            background-color: transparent
        }

        [bg~=gradient-to-r] {
            --un-gradient-shape: to right;
            --un-gradient: var(--un-gradient-shape), var(--un-gradient-stops);
            background-image: linear-gradient(var(--un-gradient))
        }

        [p~="2"] {
            padding: .5rem
        }

        .px-4 {
            padding-left: 1rem;
            padding-right: 1rem
        }

        .py-10 {
            padding-top: 2.5rem;
            padding-bottom: 2.5rem
        }

        .text-center {
            text-align: center
        }

        .text-sm {
            font-size: .875rem;
            line-height: 1.25rem
        }

        [text~=xs] {
            font-size: .75rem;
            line-height: 1rem
        }

        [color~="#00aba9"] {
            --un-text-opacity: 1;
            color: rgba(0, 171, 169, var(--un-text-opacity))
        }

        [opacity~="75"] {
            opacity: .75
        }

        .\!outline-none {
            outline: 2px solid transparent !important;
            outline-offset: 2px !important
        }

        [outline~=none] {
            outline: 2px solid transparent;
            outline-offset: 2px
        }

        .drop-shadow {
            --un-drop-shadow: drop-shadow(0 1px 2px var(--un-drop-shadow-color, rgba(0, 0, 0, .1))) drop-shadow(0 1px 1px var(--un-drop-shadow-color, rgba(0, 0, 0, .06)));
            filter: var(--un-blur) var(--un-brightness) var(--un-contrast) var(--un-drop-shadow) var(--un-grayscale) var(--un-hue-rotate) var(--un-invert) var(--un-saturate) var(--un-sepia)
        }

        .grayscale {
            --un-grayscale: grayscale(1);
            filter: var(--un-blur) var(--un-brightness) var(--un-contrast) var(--un-drop-shadow) var(--un-grayscale) var(--un-hue-rotate) var(--un-invert) var(--un-saturate) var(--un-sepia)
        }

        .filter {
            filter: var(--un-blur) var(--un-brightness) var(--un-contrast) var(--un-drop-shadow) var(--un-grayscale) var(--un-hue-rotate) var(--un-invert) var(--un-saturate) var(--un-sepia)
        }
    </style>
    <link rel="preload" href="/assets/index-ace64197.css" as="style">
    <link rel="modulepreload" crossorigin="" href="/assets/home-73906c5b.js">
    <title>Sese 搜索</title>
    <meta name="description" content="SeSe Engine 是一个轻量级的搜索引擎，可以轻松部署在自己的个人服务器上。">
    <link rel="search" type="application/opensearchdescription+xml" title="Sese 搜索" href="/opensearch.xml">
</head>

<body>
    <div id="app" data-server-rendered="true">
        <main w="screen" h="screen" class="px-4 py-10 text-center">
            <div class="absolute z-1 top-5 right-5 inline-flex justify-center items-center"><button class="icon-btn mx-2" title="切换语言">
                    <div i-ri-translate="" class="transform"></div>
                </button><button class="icon-btn mx-2 !outline-none" title="切换深色模式">
                    <div i-ri-sun-line=""></div>
                </button></div>
            <div class="flex flex-col justify-center items-center" h="full"><img width="280" height="156" class="w-70 filter drop-shadow" m="-b-4" src="/sese-rimo-and-xiao-yun.png" alt="Rimo And XiaoYun">
                <div class="sese-search-wrapper wrapper relative flex justify-center items-center" p="2" m="t-0 b-4" border="~ rounded gray-300 dark:gray-700" rounded="full">
                    <div i-ri-search-line="" class="inline-flex ml-2"></div><input id="input" class="sese-input" value="" m="x-2" aria-label="搜索" type="text" autocomplete="false" bg="transparent" outline="none active:none" autofocus="">
                </div>
                <div m="b-18"><button class="sese-btn m-3 text-sm btn" bg="gradient-to-r">Sese 搜索</button></div>
            </div>
            <div class="fixed left-0 right-0 bottom-0 flex justify-center items-center" dark="bg-dark-700" bg="gray-100" w="full" h="12" text="xs">
                <div class="inline-flex justify-center items-center" m="x-2" opacity="75"><a href="https://sese.yyj.moe" target="_blank"><img width="28" height="16" class="filter grayscale" m="x-2" style="margin-top:-2px" src="/sese-rimo-and-xiao-yun.png" alt="Rimo And XiaoYun"></a>©️ 2022-2023 <a class="mx-1" href="https://github.com/RimoChan" target="_blank">RimoChan</a><span>❤️</span><a class="mx-1" href="https://github.com/YunYouJun" target="_blank">YunYouJun</a></div>
                <div class="inline-flex justify-center items-center" m="x-2"><a class="icon-btn mr-2" title="GitHub" href="https://github.com/YunYouJun/sese-engine-ui" target="_blank">
                        <div i-ri-github-line=""></div>
                    </a><a class="icon-btn mx-2" title="GitHub" href="https://github.com/RimoChan/sese-engine" target="_blank">
                        <div i-ri-github-fill=""></div>
                    </a><a href="/about" class="icon-btn mx-2" title="关于">
                        <div i-ri-information-line=""></div>
                    </a></div>
            </div>
        </main>
    </div>
    <script>
        window.__INITIAL_STATE__ = '{"pinia":{"search":{"savedKeyword":"","isLoading":false}}}'
    </script>
    <link rel="stylesheet" href="/assets/index-ace64197.css">
</body>

</html>