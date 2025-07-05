@extends('frontend.layouts.app')

@section('title', 'PGCAC')

@section('content')

    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <style>
            img:is([sizes="auto" i], [sizes^="auto," i]) {
                contain-intrinsic-size: 3000px 1500px;
            }
        </style>
        <style id="wp-emoji-styles-inline-css">
            img.wp-smiley,
            img.emoji {
                display: inline !important;
                border: none !important;
                box-shadow: none !important;
                height: 1em !important;
                width: 1em !important;
                margin: 0 0.07em !important;
                vertical-align: -0.1em !important;
                background: none !important;
                padding: 0 !important;
            }
        </style>
        <style id="kevinbatdorf-code-block-pro-style-inline-css">
            .wp-block-kevinbatdorf-code-block-pro {
                direction: ltr !important;
                font-family: ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas,
                    monospace;
                -webkit-text-size-adjust: 100% !important;
                box-sizing: border-box !important;
                position: relative !important;
            }

            .wp-block-kevinbatdorf-code-block-pro * {
                box-sizing: border-box !important;
            }

            .wp-block-kevinbatdorf-code-block-pro pre,
            .wp-block-kevinbatdorf-code-block-pro pre * {
                font-size: inherit !important;
                line-height: inherit !important;
            }

            .wp-block-kevinbatdorf-code-block-pro:not(.code-block-pro-editor) pre {
                background-image: none !important;
                border: 0 !important;
                border-radius: 0 !important;
                border-style: none !important;
                border-width: 0 !important;
                color: inherit !important;
                font-family: inherit !important;
                margin: 0 !important;
                overflow: auto !important;
                overflow-wrap: normal !important;
                padding: 16px 0 16px 16px !important;
                text-align: left !important;
                white-space: pre !important;
                --tw-shadow: 0 0 #0000;
                --tw-shadow-colored: 0 0 #0000;
                box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000),
                    var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow) !important;
                outline: 2px solid transparent !important;
                outline-offset: 2px !important;
            }

            .wp-block-kevinbatdorf-code-block-pro:not(.code-block-pro-editor) pre:focus-visible {
                outline-color: inherit !important;
            }

            .wp-block-kevinbatdorf-code-block-pro.padding-disabled:not(.code-block-pro-editor) pre {
                padding: 0 !important;
            }

            .wp-block-kevinbatdorf-code-block-pro.padding-bottom-disabled pre {
                padding-bottom: 0 !important;
            }

            .wp-block-kevinbatdorf-code-block-pro:not(.code-block-pro-editor) pre code {
                background: none !important;
                background-color: transparent !important;
                border: 0 !important;
                border-radius: 0 !important;
                border-style: none !important;
                border-width: 0 !important;
                color: inherit !important;
                display: block !important;
                font-family: inherit !important;
                margin: 0 !important;
                overflow-wrap: normal !important;
                padding: 0 !important;
                text-align: left !important;
                white-space: pre !important;
                width: 100% !important;
                --tw-shadow: 0 0 #0000;
                --tw-shadow-colored: 0 0 #0000;
                box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000),
                    var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow) !important;
            }

            .wp-block-kevinbatdorf-code-block-pro:not(.code-block-pro-editor) pre code .line {
                display: inline-block !important;
                min-width: var(--cbp-block-width, 100%) !important;
                vertical-align: top !important;
            }

            .wp-block-kevinbatdorf-code-block-pro.cbp-has-line-numbers:not(.code-block-pro-editor) pre code .line {
                padding-left: calc(12px + var(--cbp-line-number-width, auto)) !important;
            }

            .wp-block-kevinbatdorf-code-block-pro.cbp-has-line-numbers:not(.code-block-pro-editor) pre code {
                counter-increment: step calc(var(--cbp-line-number-start, 1) - 1) !important;
                counter-reset: step !important;
            }

            .wp-block-kevinbatdorf-code-block-pro pre code .line {
                position: relative !important;
            }

            .wp-block-kevinbatdorf-code-block-pro:not(.code-block-pro-editor) pre code .line:before {
                content: "" !important;
                display: inline-block !important;
            }

            .wp-block-kevinbatdorf-code-block-pro.cbp-has-line-numbers:not(.code-block-pro-editor) pre code .line:not(.cbp-line-number-disabled):before {
                color: var(--cbp-line-number-color, #999) !important;
                content: counter(step) !important;
                counter-increment: step !important;
                left: 0 !important;
                opacity: 0.5 !important;
                position: absolute !important;
                text-align: right !important;
                transition-duration: 0.5s !important;
                transition-property: opacity !important;
                transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1) !important;
                -webkit-user-select: none !important;
                -moz-user-select: none !important;
                user-select: none !important;
                width: var(--cbp-line-number-width, auto) !important;
            }

            .wp-block-kevinbatdorf-code-block-pro.cbp-highlight-hover .line {
                min-height: var(--cbp-block-height, 100%) !important;
            }

            .wp-block-kevinbatdorf-code-block-pro .line.cbp-line-highlight .cbp-line-highlighter,
            .wp-block-kevinbatdorf-code-block-pro .line.cbp-no-blur:hover .cbp-line-highlighter,
            .wp-block-kevinbatdorf-code-block-pro.cbp-highlight-hover:not(.cbp-blur-enabled:not(.cbp-unblur-on-hover)) .line:hover .cbp-line-highlighter {
                background: var(--cbp-line-highlight-color,
                        rgb(14 165 233/0.2)) !important;
                left: -16px !important;
                min-height: var(--cbp-block-height, 100%) !important;
                min-width: calc(var(--cbp-block-width, 100%) + 16px) !important;
                pointer-events: none !important;
                position: absolute !important;
                top: 0 !important;
                width: 100% !important;
            }

            [data-code-block-pro-font-family="Code-Pro-Comic-Mono.ttf"].wp-block-kevinbatdorf-code-block-pro .line.cbp-line-highlight .cbp-line-highlighter,
            [data-code-block-pro-font-family="Code-Pro-Comic-Mono.ttf"].wp-block-kevinbatdorf-code-block-pro .line.cbp-no-blur:hover .cbp-line-highlighter,
            [data-code-block-pro-font-family="Code-Pro-Comic-Mono.ttf"].wp-block-kevinbatdorf-code-block-pro.cbp-highlight-hover:not(.cbp-blur-enabled:not(.cbp-unblur-on-hover)) .line:hover .cbp-line-highlighter {
                top: -0.125rem !important;
            }

            [data-code-block-pro-font-family="Code-Pro-Fira-Code"].wp-block-kevinbatdorf-code-block-pro .line.cbp-line-highlight .cbp-line-highlighter,
            [data-code-block-pro-font-family="Code-Pro-Fira-Code"].wp-block-kevinbatdorf-code-block-pro .line.cbp-no-blur:hover .cbp-line-highlighter,
            [data-code-block-pro-font-family="Code-Pro-Fira-Code"].wp-block-kevinbatdorf-code-block-pro.cbp-highlight-hover:not(.cbp-blur-enabled:not(.cbp-unblur-on-hover)) .line:hover .cbp-line-highlighter {
                top: -1.5px !important;
            }

            [data-code-block-pro-font-family="Code-Pro-Deja-Vu-Mono.ttf"].wp-block-kevinbatdorf-code-block-pro .line.cbp-line-highlight .cbp-line-highlighter,
            [data-code-block-pro-font-family="Code-Pro-Deja-Vu-Mono.ttf"].wp-block-kevinbatdorf-code-block-pro .line.cbp-no-blur:hover .cbp-line-highlighter,
            [data-code-block-pro-font-family="Code-Pro-Deja-Vu-Mono.ttf"].wp-block-kevinbatdorf-code-block-pro.cbp-highlight-hover:not(.cbp-blur-enabled:not(.cbp-unblur-on-hover)) .line:hover .cbp-line-highlighter,
            [data-code-block-pro-font-family="Code-Pro-Cozette"].wp-block-kevinbatdorf-code-block-pro .line.cbp-line-highlight .cbp-line-highlighter,
            [data-code-block-pro-font-family="Code-Pro-Cozette"].wp-block-kevinbatdorf-code-block-pro .line.cbp-no-blur:hover .cbp-line-highlighter,
            [data-code-block-pro-font-family="Code-Pro-Cozette"].wp-block-kevinbatdorf-code-block-pro.cbp-highlight-hover:not(.cbp-blur-enabled:not(.cbp-unblur-on-hover)) .line:hover .cbp-line-highlighter {
                top: -1px !important;
            }

            .wp-block-kevinbatdorf-code-block-pro:not(.code-block-pro-editor).padding-disabled pre .line.cbp-line-highlight:after {
                left: 0 !important;
                width: 100% !important;
            }

            .wp-block-kevinbatdorf-code-block-pro.cbp-blur-enabled pre .line:not(.cbp-no-blur) {
                filter: blur(1.35px) !important;
                opacity: 0.8 !important;
                pointer-events: none !important;
                transition-duration: 0.2s !important;
                transition-property: all !important;
                transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1) !important;
            }

            .wp-block-kevinbatdorf-code-block-pro.cbp-blur-enabled.cbp-unblur-on-hover:hover pre .line:not(.cbp-no-blur) {
                opacity: 1 !important;
                pointer-events: auto !important;
                --tw-blur: ;
                filter: var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow) !important;
            }

            .wp-block-kevinbatdorf-code-block-pro:not(.code-block-pro-editor) pre * {
                font-family: inherit !important;
            }

            .cbp-see-more-simple-btn-hover {
                transition-property: none !important;
            }

            .cbp-see-more-simple-btn-hover:hover {
                box-shadow: inset 0 0 100px 100px hsla(0, 0%, 100%, 0.1) !important;
            }

            .code-block-pro-copy-button {
                border: 0 !important;
                border-style: none !important;
                border-width: 0 !important;
                cursor: pointer !important;
                left: auto !important;
                line-height: 1 !important;
                opacity: 0.1 !important;
                outline: 2px solid transparent !important;
                outline-offset: 2px !important;
                padding: 6px !important;
                position: absolute !important;
                right: 0 !important;
                top: 0 !important;
                transition-duration: 0.2s !important;
                transition-property: opacity !important;
                transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1) !important;
                z-index: 10 !important;
            }

            .code-block-pro-copy-button:focus {
                opacity: 0.4 !important;
            }

            .code-block-pro-copy-button:focus-visible {
                outline-color: inherit !important;
            }

            .code-block-pro-copy-button:not([data-has-text-button]) {
                background: none !important;
                background-color: transparent !important;
            }

            body .wp-block-kevinbatdorf-code-block-pro:not(#x) .code-block-pro-copy-button-textarea {
                clip: rect(0, 0, 0, 0) !important;
                background-color: transparent !important;
                border-width: 0 !important;
                color: transparent !important;
                height: 1px !important;
                left: 0 !important;
                margin: -0.25rem !important;
                opacity: 0 !important;
                overflow: hidden !important;
                pointer-events: none !important;
                position: absolute !important;
                resize: none !important;
                top: 0 !important;
                white-space: nowrap !important;
                width: 1px !important;
                --tw-shadow: 0 0 #0000;
                --tw-shadow-colored: 0 0 #0000;
                box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000),
                    var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow) !important;
            }

            .wp-block-kevinbatdorf-code-block-pro.padding-disabled .code-block-pro-copy-button {
                padding: 0 !important;
            }

            .wp-block-kevinbatdorf-code-block-pro:hover .code-block-pro-copy-button {
                opacity: 0.5 !important;
            }

            .wp-block-kevinbatdorf-code-block-pro .code-block-pro-copy-button:hover {
                opacity: 0.9 !important;
            }

            .code-block-pro-copy-button[data-has-text-button],
            .wp-block-kevinbatdorf-code-block-pro:hover .code-block-pro-copy-button[data-has-text-button] {
                opacity: 1 !important;
            }

            .wp-block-kevinbatdorf-code-block-pro .code-block-pro-copy-button[data-has-text-button]:hover {
                opacity: 0.8 !important;
            }

            .code-block-pro-copy-button[data-has-text-button] {
                border-radius: 0.75rem !important;
                display: block !important;
                margin-right: 0.75rem !important;
                margin-top: 0.7rem !important;
                padding: 0.125rem 0.375rem !important;
            }

            .code-block-pro-copy-button[data-inside-header-type="headlightsMuted"],
            .code-block-pro-copy-button[data-inside-header-type^="headlights"] {
                margin-top: 0.85rem !important;
            }

            .code-block-pro-copy-button[data-inside-header-type="headlightsMutedAlt"] {
                margin-top: 0.65rem !important;
            }

            .code-block-pro-copy-button[data-inside-header-type="simpleString"] {
                margin-top: 0.645rem !important;
            }

            .code-block-pro-copy-button[data-inside-header-type="pillString"] {
                margin-top: 1rem !important;
            }

            .code-block-pro-copy-button[data-inside-header-type="pillString"] .cbp-btn-text {
                position: relative !important;
                top: 1px !important;
            }

            .cbp-btn-text {
                font-size: 0.75rem !important;
                line-height: 1rem !important;
            }

            .code-block-pro-copy-button .without-check {
                display: block !important;
            }

            .code-block-pro-copy-button .with-check {
                display: none !important;
            }

            .code-block-pro-copy-button.cbp-copying {
                opacity: 1 !important;
            }

            .code-block-pro-copy-button.cbp-copying .without-check {
                display: none !important;
            }

            .code-block-pro-copy-button.cbp-copying .with-check {
                display: block !important;
            }

            .cbp-footer-link:hover {
                text-decoration-line: underline !important;
            }

            @media print {
                .wp-block-kevinbatdorf-code-block-pro pre {
                    max-height: none !important;
                }

                .wp-block-kevinbatdorf-code-block-pro:not(#x) .line:before {
                    background-color: transparent !important;
                    color: inherit !important;
                }

                .wp-block-kevinbatdorf-code-block-pro:not(#x) .cbp-line-highlighter,
                .wp-block-kevinbatdorf-code-block-pro:not(#x)>span {
                    display: none !important;
                }
            }
        </style>
        <style id="global-styles-inline-css">
            :root {
                --wp--preset--aspect-ratio--square: 1;
                --wp--preset--aspect-ratio--4-3: 4/3;
                --wp--preset--aspect-ratio--3-4: 3/4;
                --wp--preset--aspect-ratio--3-2: 3/2;
                --wp--preset--aspect-ratio--2-3: 2/3;
                --wp--preset--aspect-ratio--16-9: 16/9;
                --wp--preset--aspect-ratio--9-16: 9/16;
                --wp--preset--color--black: #000000;
                --wp--preset--color--cyan-bluish-gray: #abb8c3;
                --wp--preset--color--white: #ffffff;
                --wp--preset--color--pale-pink: #f78da7;
                --wp--preset--color--vivid-red: #cf2e2e;
                --wp--preset--color--luminous-vivid-orange: #ff6900;
                --wp--preset--color--luminous-vivid-amber: #fcb900;
                --wp--preset--color--light-green-cyan: #7bdcb5;
                --wp--preset--color--vivid-green-cyan: #00d084;
                --wp--preset--color--pale-cyan-blue: #8ed1fc;
                --wp--preset--color--vivid-cyan-blue: #0693e3;
                --wp--preset--color--vivid-purple: #9b51e0;
                --wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg,
                        rgba(6, 147, 227, 1) 0%,
                        rgb(155, 81, 224) 100%);
                --wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg,
                        rgb(122, 220, 180) 0%,
                        rgb(0, 208, 130) 100%);
                --wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg,
                        rgba(252, 185, 0, 1) 0%,
                        rgba(255, 105, 0, 1) 100%);
                --wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg,
                        rgba(255, 105, 0, 1) 0%,
                        rgb(207, 46, 46) 100%);
                --wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg,
                        rgb(238, 238, 238) 0%,
                        rgb(169, 184, 195) 100%);
                --wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg,
                        rgb(74, 234, 220) 0%,
                        rgb(151, 120, 209) 20%,
                        rgb(207, 42, 186) 40%,
                        rgb(238, 44, 130) 60%,
                        rgb(251, 105, 98) 80%,
                        rgb(254, 248, 76) 100%);
                --wp--preset--gradient--blush-light-purple: linear-gradient(135deg,
                        rgb(255, 206, 236) 0%,
                        rgb(152, 150, 240) 100%);
                --wp--preset--gradient--blush-bordeaux: linear-gradient(135deg,
                        rgb(254, 205, 165) 0%,
                        rgb(254, 45, 45) 50%,
                        rgb(107, 0, 62) 100%);
                --wp--preset--gradient--luminous-dusk: linear-gradient(135deg,
                        rgb(255, 203, 112) 0%,
                        rgb(199, 81, 192) 50%,
                        rgb(65, 88, 208) 100%);
                --wp--preset--gradient--pale-ocean: linear-gradient(135deg,
                        rgb(255, 245, 203) 0%,
                        rgb(182, 227, 212) 50%,
                        rgb(51, 167, 181) 100%);
                --wp--preset--gradient--electric-grass: linear-gradient(135deg,
                        rgb(202, 248, 128) 0%,
                        rgb(113, 206, 126) 100%);
                --wp--preset--gradient--midnight: linear-gradient(135deg,
                        rgb(2, 3, 129) 0%,
                        rgb(40, 116, 252) 100%);
                --wp--preset--font-size--small: 13px;
                --wp--preset--font-size--medium: 20px;
                --wp--preset--font-size--large: 36px;
                --wp--preset--font-size--x-large: 42px;
                --wp--preset--spacing--20: 0.44rem;
                --wp--preset--spacing--30: 0.67rem;
                --wp--preset--spacing--40: 1rem;
                --wp--preset--spacing--50: 1.5rem;
                --wp--preset--spacing--60: 2.25rem;
                --wp--preset--spacing--70: 3.38rem;
                --wp--preset--spacing--80: 5.06rem;
                --wp--preset--shadow--natural: 6px 6px 9px rgba(0, 0, 0, 0.2);
                --wp--preset--shadow--deep: 12px 12px 50px rgba(0, 0, 0, 0.4);
                --wp--preset--shadow--sharp: 6px 6px 0px rgba(0, 0, 0, 0.2);
                --wp--preset--shadow--outlined: 6px 6px 0px -3px rgba(255, 255, 255, 1),
                    6px 6px rgba(0, 0, 0, 1);
                --wp--preset--shadow--crisp: 6px 6px 0px rgba(0, 0, 0, 1);
            }

            :root {
                --wp--style--global--content-size: 800px;
                --wp--style--global--wide-size: 1200px;
            }

            :where(body) {
                margin: 0;
            }

            .wp-site-blocks>.alignleft {
                float: left;
                margin-right: 2em;
            }

            .wp-site-blocks>.alignright {
                float: right;
                margin-left: 2em;
            }

            .wp-site-blocks>.aligncenter {
                justify-content: center;
                margin-left: auto;
                margin-right: auto;
            }

            :where(.wp-site-blocks)>* {
                margin-block-start: 24px;
                margin-block-end: 0;
            }

            :where(.wp-site-blocks)> :first-child {
                margin-block-start: 0;
            }

            :where(.wp-site-blocks)> :last-child {
                margin-block-end: 0;
            }

            :root {
                --wp--style--block-gap: 24px;
            }

            :root :where(.is-layout-flow)> :first-child {
                margin-block-start: 0;
            }

            :root :where(.is-layout-flow)> :last-child {
                margin-block-end: 0;
            }

            :root :where(.is-layout-flow)>* {
                margin-block-start: 24px;
                margin-block-end: 0;
            }

            :root :where(.is-layout-constrained)> :first-child {
                margin-block-start: 0;
            }

            :root :where(.is-layout-constrained)> :last-child {
                margin-block-end: 0;
            }

            :root :where(.is-layout-constrained)>* {
                margin-block-start: 24px;
                margin-block-end: 0;
            }

            :root :where(.is-layout-flex) {
                gap: 24px;
            }

            :root :where(.is-layout-grid) {
                gap: 24px;
            }

            .is-layout-flow>.alignleft {
                float: left;
                margin-inline-start: 0;
                margin-inline-end: 2em;
            }

            .is-layout-flow>.alignright {
                float: right;
                margin-inline-start: 2em;
                margin-inline-end: 0;
            }

            .is-layout-flow>.aligncenter {
                margin-left: auto !important;
                margin-right: auto !important;
            }

            .is-layout-constrained>.alignleft {
                float: left;
                margin-inline-start: 0;
                margin-inline-end: 2em;
            }

            .is-layout-constrained>.alignright {
                float: right;
                margin-inline-start: 2em;
                margin-inline-end: 0;
            }

            .is-layout-constrained>.aligncenter {
                margin-left: auto !important;
                margin-right: auto !important;
            }

            .is-layout-constrained> :where(:not(.alignleft):not(.alignright):not(.alignfull)) {
                max-width: var(--wp--style--global--content-size);
                margin-left: auto !important;
                margin-right: auto !important;
            }

            .is-layout-constrained>.alignwide {
                max-width: var(--wp--style--global--wide-size);
            }

            body .is-layout-flex {
                display: flex;
            }

            .is-layout-flex {
                flex-wrap: wrap;
                align-items: center;
            }

            .is-layout-flex> :is(*, div) {
                margin: 0;
            }

            body .is-layout-grid {
                display: grid;
            }

            .is-layout-grid> :is(*, div) {
                margin: 0;
            }

            body {
                padding-top: 0px;
                padding-right: 0px;
                padding-bottom: 0px;
                padding-left: 0px;
            }

            a:where(:not(.wp-element-button)) {
                text-decoration: none;
            }

            :root :where(.wp-element-button, .wp-block-button__link) {
                background-color: #32373c;
                border-width: 0;
                color: #fff;
                font-family: inherit;
                font-size: inherit;
                line-height: inherit;
                padding: calc(0.667em + 2px) calc(1.333em + 2px);
                text-decoration: none;
            }

            .has-black-color {
                color: var(--wp--preset--color--black) !important;
            }

            .has-cyan-bluish-gray-color {
                color: var(--wp--preset--color--cyan-bluish-gray) !important;
            }

            .has-white-color {
                color: var(--wp--preset--color--white) !important;
            }

            .has-pale-pink-color {
                color: var(--wp--preset--color--pale-pink) !important;
            }

            .has-vivid-red-color {
                color: var(--wp--preset--color--vivid-red) !important;
            }

            .has-luminous-vivid-orange-color {
                color: var(--wp--preset--color--luminous-vivid-orange) !important;
            }

            .has-luminous-vivid-amber-color {
                color: var(--wp--preset--color--luminous-vivid-amber) !important;
            }

            .has-light-green-cyan-color {
                color: var(--wp--preset--color--light-green-cyan) !important;
            }

            .has-vivid-green-cyan-color {
                color: var(--wp--preset--color--vivid-green-cyan) !important;
            }

            .has-pale-cyan-blue-color {
                color: var(--wp--preset--color--pale-cyan-blue) !important;
            }

            .has-vivid-cyan-blue-color {
                color: var(--wp--preset--color--vivid-cyan-blue) !important;
            }

            .has-vivid-purple-color {
                color: var(--wp--preset--color--vivid-purple) !important;
            }

            .has-black-background-color {
                background-color: var(--wp--preset--color--black) !important;
            }

            .has-cyan-bluish-gray-background-color {
                background-color: var(--wp--preset--color--cyan-bluish-gray) !important;
            }

            .has-white-background-color {
                background-color: var(--wp--preset--color--white) !important;
            }

            .has-pale-pink-background-color {
                background-color: var(--wp--preset--color--pale-pink) !important;
            }

            .has-vivid-red-background-color {
                background-color: var(--wp--preset--color--vivid-red) !important;
            }

            .has-luminous-vivid-orange-background-color {
                background-color: var(--wp--preset--color--luminous-vivid-orange) !important;
            }

            .has-luminous-vivid-amber-background-color {
                background-color: var(--wp--preset--color--luminous-vivid-amber) !important;
            }

            .has-light-green-cyan-background-color {
                background-color: var(--wp--preset--color--light-green-cyan) !important;
            }

            .has-vivid-green-cyan-background-color {
                background-color: var(--wp--preset--color--vivid-green-cyan) !important;
            }

            .has-pale-cyan-blue-background-color {
                background-color: var(--wp--preset--color--pale-cyan-blue) !important;
            }

            .has-vivid-cyan-blue-background-color {
                background-color: var(--wp--preset--color--vivid-cyan-blue) !important;
            }

            .has-vivid-purple-background-color {
                background-color: var(--wp--preset--color--vivid-purple) !important;
            }

            .has-black-border-color {
                border-color: var(--wp--preset--color--black) !important;
            }

            .has-cyan-bluish-gray-border-color {
                border-color: var(--wp--preset--color--cyan-bluish-gray) !important;
            }

            .has-white-border-color {
                border-color: var(--wp--preset--color--white) !important;
            }

            .has-pale-pink-border-color {
                border-color: var(--wp--preset--color--pale-pink) !important;
            }

            .has-vivid-red-border-color {
                border-color: var(--wp--preset--color--vivid-red) !important;
            }

            .has-luminous-vivid-orange-border-color {
                border-color: var(--wp--preset--color--luminous-vivid-orange) !important;
            }

            .has-luminous-vivid-amber-border-color {
                border-color: var(--wp--preset--color--luminous-vivid-amber) !important;
            }

            .has-light-green-cyan-border-color {
                border-color: var(--wp--preset--color--light-green-cyan) !important;
            }

            .has-vivid-green-cyan-border-color {
                border-color: var(--wp--preset--color--vivid-green-cyan) !important;
            }

            .has-pale-cyan-blue-border-color {
                border-color: var(--wp--preset--color--pale-cyan-blue) !important;
            }

            .has-vivid-cyan-blue-border-color {
                border-color: var(--wp--preset--color--vivid-cyan-blue) !important;
            }

            .has-vivid-purple-border-color {
                border-color: var(--wp--preset--color--vivid-purple) !important;
            }

            .has-vivid-cyan-blue-to-vivid-purple-gradient-background {
                background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;
            }

            .has-light-green-cyan-to-vivid-green-cyan-gradient-background {
                background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;
            }

            .has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background {
                background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;
            }

            .has-luminous-vivid-orange-to-vivid-red-gradient-background {
                background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;
            }

            .has-very-light-gray-to-cyan-bluish-gray-gradient-background {
                background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;
            }

            .has-cool-to-warm-spectrum-gradient-background {
                background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;
            }

            .has-blush-light-purple-gradient-background {
                background: var(--wp--preset--gradient--blush-light-purple) !important;
            }

            .has-blush-bordeaux-gradient-background {
                background: var(--wp--preset--gradient--blush-bordeaux) !important;
            }

            .has-luminous-dusk-gradient-background {
                background: var(--wp--preset--gradient--luminous-dusk) !important;
            }

            .has-pale-ocean-gradient-background {
                background: var(--wp--preset--gradient--pale-ocean) !important;
            }

            .has-electric-grass-gradient-background {
                background: var(--wp--preset--gradient--electric-grass) !important;
            }

            .has-midnight-gradient-background {
                background: var(--wp--preset--gradient--midnight) !important;
            }

            .has-small-font-size {
                font-size: var(--wp--preset--font-size--small) !important;
            }

            .has-medium-font-size {
                font-size: var(--wp--preset--font-size--medium) !important;
            }

            .has-large-font-size {
                font-size: var(--wp--preset--font-size--large) !important;
            }

            .has-x-large-font-size {
                font-size: var(--wp--preset--font-size--x-large) !important;
            }

            :root :where(.wp-block-pullquote) {
                font-size: 1.5em;
                line-height: 1.6;
            }
        </style>
        <link rel="stylesheet" id="elementor-frontend-css"
            href="{{ asset('assets/css/custom-frontend.min.css') }}"
            media="all" />
        <link rel="stylesheet" id="elementor-post-6-css"
            href="{{ asset('assets/css/post-6.css') }}" media="all" />
        <link rel="stylesheet" id="widget-image-css"
            href="{{ asset('assets/css/widget-image.min.css') }}"
            media="all" />
        <link rel="stylesheet" id="widget-nav-menu-css"
            href="{{ asset('assets/css/custom-pro-widget-nav-menu.min.css') }}"
            media="all" />
        <link rel="stylesheet" id="widget-heading-css"
            href="{{ asset('assets/css/widget-heading.min.css') }}"
            media="all" />
        <link rel="stylesheet" id="widget-icon-list-css"
            href="{{ asset('assets/css/custom-widget-icon-list.min.css') }}"
            media="all" />
        <link rel="stylesheet" id="widget-video-css"
            href="{{ asset('assets/css/widget-video.min.css') }}"
            media="all" />
        <link rel="stylesheet" id="widget-social-icons-css"
            href="{{ asset('assets/css/widget-social-icons.min.css') }}"
            media="all" />
        <link rel="stylesheet" id="e-apple-webkit-css"
            href="{{ asset('assets/css/custom-apple-webkit.min.css') }}"
            media="all" />
        <link rel="stylesheet" id="elementor-post-5346-css"
            href="{{ asset('assets/css/post-5346.css') }}"
            media="all" />
        <link rel="stylesheet" id="elementor-post-762-css"
            href="{{ asset('assets/css/post-762.css') }}" media="all" />
        <link rel="stylesheet" id="elementor-post-941-css"
            href="{{ asset('assets/css/post-941.css') }}" media="all" />
        <link rel="stylesheet" id="elementor-post-5010-css"
            href="{{ asset('assets/css/post-5010.css') }}"
            media="all" />
        <link rel="stylesheet" id="hello-elementor-child-style-css"
            href="{{ asset('assets/css/style_gradcourses.css') }}"
            media="all" />
        <style>
            .e-con.e-parent:nth-of-type(n + 4):not(.e-lazyloaded):not(.e-no-lazyload),
            .e-con.e-parent:nth-of-type(n + 4):not(.e-lazyloaded):not(.e-no-lazyload) * {
                background-image: none !important;
            }

            @media screen and (max-height: 1024px) {

                .e-con.e-parent:nth-of-type(n + 3):not(.e-lazyloaded):not(.e-no-lazyload),
                .e-con.e-parent:nth-of-type(n + 3):not(.e-lazyloaded):not(.e-no-lazyload) * {
                    background-image: none !important;
                }
            }

            @media screen and (max-height: 640px) {

                .e-con.e-parent:nth-of-type(n + 2):not(.e-lazyloaded):not(.e-no-lazyload),
                .e-con.e-parent:nth-of-type(n + 2):not(.e-lazyloaded):not(.e-no-lazyload) * {
                    background-image: none !important;
                }
            }
        </style>
        <link rel="stylesheet" type="text/css" media="all"
            href="{{ asset('assets/css/universal.css') }}" />
    </head>

    <body id="pgcac-body"
        class="wp-singular courses-template-default single single-courses postid-5346 wp-custom-logo wp-embed-responsive wp-theme-hello-elementor wp-child-theme-trainsec eio-default esm-default hello-elementor-default elementor-default elementor-template-full-width elementor-kit-6 elementor-page elementor-page-5346 elementor-page-5010 e--ua-blink e--ua-chrome e--ua-webkit"
        data-elementor-device-mode="desktop">
        @include('frontend.layouts.header')
        <div data-elementor-type="wp-post" data-elementor-id="5346" class="elementor elementor-5346"
            data-elementor-post-type="courses">
            <div class="elementor-element elementor-element-66f03a69 e-flex e-con-boxed e-con e-parent e-lazyloaded"
                data-id="66f03a69" data-element_type="container" data-settings='{"background_background":"classic"}'>
                <div class="e-con-inner">
                    <div class="elementor-element elementor-element-27efe1ee e-con-full e-flex e-con e-child"
                        data-id="27efe1ee" data-element_type="container">
                        <div class="elementor-element elementor-element-34023f02 elementor-widget elementor-widget-image"
                            data-id="34023f02" data-element_type="widget" data-widget_type="image.default">
                            <div class="elementor-widget-container">
                                <img decoding="async" width="600" height="600"
                                    src="{{ asset('assets/images/PGCAC-Badge.png') }}"
                                    class="attachment-large size-large wp-image-5351"
                                    sizes="(max-width: 600px) 100vw, 600px" />
                            </div>
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-1159e021 e-con-full e-flex e-con e-child"
                        data-id="1159e021" data-element_type="container">
                        <div class="elementor-element elementor-element-33245d4 elementor-widget__width-initial elementor-widget elementor-widget-heading"
                            data-id="33245d4" data-element_type="widget" data-widget_type="heading.default">
                            <div class="elementor-widget-container">
                                <h1 class="elementor-heading-title elementor-size-default">
                                    Post Graduate Certificate - Advanced CyberSecurity
                                </h1>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-60aef723 elementor-widget__width-initial elementor-widget elementor-widget-text-editor"
                            data-id="60aef723" data-element_type="widget" data-widget_type="text-editor.default">
                            <div class="elementor-widget-container">
                                <p style="font-weight: bold; font-size: 20px; margin-bottom: 10px;">LEARN, EARN, AND
                                    DEFEND—BECOME A COMBAT-READY CYBER PROFESSIONAL IN TWELVE MONTHS.</p>
                                <p style="margin-bottom: 10px;">PGCAC is a year-long work-and-learn pathway integrating paid
                                    weekday roles with weekend mastery classes.
                                    Participants join Codec Networks full-time, contributing Monday to Friday and
                                    attending expert-led sessions every Saturday and Sunday.
                                    The model suits early-career engineers, final-year tech students, and practising
                                    analysts seeking rapid advancement without career disruption.
                                </p>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-40077b7 e-con-full e-flex e-con e-child"
                            data-id="40077b7" data-element_type="container"
                            data-settings='{"background_background":"gradient"}'>
                            <div class="elementor-element elementor-element-f71779d e-con-full e-flex e-con e-child"
                                data-id="f71779d" data-element_type="container">
                                <div class="elementor-element elementor-element-cec5d5f elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list"
                                    data-id="cec5d5f" data-element_type="widget" data-widget_type="icon-list.default">
                                    <div class="elementor-widget-container">
                                        <ul class="elementor-icon-list-items">
                                            <li class="elementor-icon-list-item">
                                                <span class="elementor-icon-list-icon">
                                                    <svg aria-hidden="true" class="e-font-icon-svg e-fas-check-circle"
                                                        viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z">
                                                        </path>
                                                    </svg>
                                                </span>
                                                <span class="elementor-icon-list-text">Cybersecurity Training Delivered by
                                                    an Established CyberSecurity Firm</span>
                                            </li>
                                            <li class="elementor-icon-list-item">
                                                <span class="elementor-icon-list-icon">
                                                    <svg aria-hidden="true" class="e-font-icon-svg e-fas-check-circle"
                                                        viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z">
                                                        </path>
                                                    </svg>
                                                </span>
                                                <span class="elementor-icon-list-text">1-Year Work Experience
                                                    Certificate</span>
                                            </li>
                                            <li class="elementor-icon-list-item">
                                                <span class="elementor-icon-list-icon">
                                                    <svg aria-hidden="true" class="e-font-icon-svg e-fas-check-circle"
                                                        viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z">
                                                        </path>
                                                    </svg>
                                                </span>
                                                <span class="elementor-icon-list-text">Lifetime Access to Course Material
                                                    Including Videos
                                                </span>
                                            </li>
                                            <li class="elementor-icon-list-item">
                                                <span class="elementor-icon-list-icon">
                                                    <svg aria-hidden="true" class="e-font-icon-svg e-fas-check-circle"
                                                        viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z">
                                                        </path>
                                                    </svg>
                                                </span>
                                                <span class="elementor-icon-list-text">6-Months Internship on Real Client
                                                    Projects</span>
                                            </li>
                                            <li class="elementor-icon-list-item">
                                                <span class="elementor-icon-list-icon">
                                                    <svg aria-hidden="true" class="e-font-icon-svg e-fas-check-circle"
                                                        viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z">
                                                        </path>
                                                    </svg>
                                                </span>
                                                <span class="elementor-icon-list-text">Capstone Red vs. Blue War Room
                                                    Simulations</span>
                                            </li>
                                            <li class="elementor-icon-list-item">
                                                <span class="elementor-icon-list-icon">
                                                    <svg aria-hidden="true" class="e-font-icon-svg e-fas-check-circle"
                                                        viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z">
                                                        </path>
                                                    </svg>
                                                </span>
                                                <span class="elementor-icon-list-text">Certifications Aligned (OSCP, AWS,
                                                    CEH, ISO, CRTP, etc.)</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-d4b987d e-con-full e-flex e-con e-child"
                                data-id="d4b987d" data-element_type="container">
                                <div class="elementor-element elementor-element-1152e61 elementor-button-success elementor-mobile-align-left elementor-widget-mobile__width-inherit elementor-widget__width-initial elementor-widget elementor-widget-button"
                                    data-id="1152e61" data-element_type="widget" data-widget_type="button.default">
                                    <div class="elementor-widget-container">
                                        <div class="elementor-button-wrapper">
                                            <a class="elementor-button elementor-button-link elementor-size-sm"
                                                href="{{ asset('assets/files/syllabus.pdf') }}" download="syllabus.pdf">
                                                <span class="elementor-button-content-wrapper">
                                                    <span class="elementor-button-icon">
                                                        <svg aria-hidden="true" class="e-font-icon-svg e-far-file-pdf"
                                                            viewBox="0 0 384 512" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M369.9 97.9L286 14C277 5 264.8-.1 252.1-.1H48C21.5 0 0 21.5 0 48v416c0 26.5 21.5 48 48 48h288c26.5 0 48-21.5 48-48V131.9c0-12.7-5.1-25-14.1-34zM332.1 128H256V51.9l76.1 76.1zM48 464V48h160v104c0 13.3 10.7 24 24 24h104v288H48zm250.2-143.7c-12.2-12-47-8.7-64.4-6.5-17.2-10.5-28.7-25-36.8-46.3 3.9-16.1 10.1-40.6 5.4-56-4.2-26.2-37.8-23.6-42.6-5.9-4.4 16.1-.4 38.5 7 67.1-10 23.9-24.9 56-35.4 74.4-20 10.3-47 26.2-51 46.2-3.3 15.8 26 55.2 76.1-31.2 22.4-7.4 46.8-16.5 68.4-20.1 18.9 10.2 41 17 55.8 17 25.5 0 28-28.2 17.5-38.7zm-198.1 77.8c5.1-13.7 24.5-29.5 30.4-35-19 30.3-30.4 35.7-30.4 35zm81.6-190.6c7.4 0 6.7 32.1 1.8 40.8-4.4-13.9-4.3-40.8-1.8-40.8zm-24.4 136.6c9.7-16.9 18-37 24.7-54.7 8.3 15.1 18.9 27.2 30.1 35.5-20.8 4.3-38.9 13.1-54.8 19.2zm131.6-5s-5 6-37.3-7.8c35.1-2.6 40.9 5.4 37.3 7.8z">
                                                            </path>
                                                        </svg>
                                                    </span>
                                                    <span class="elementor-button-text">Download syllabus</span>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-86baef6 elementor-button-success elementor-mobile-align-center elementor-widget-mobile__width-inherit elementor-widget__width-initial elementor-widget elementor-widget-button"
                                    data-id="86baef6" data-element_type="widget" data-widget_type="button.default">
                                    <div class="elementor-widget-container">
                                        <div class="elementor-button-wrapper">
                                            <a class="elementor-button elementor-button-link elementor-size-sm" href="#">
                                                <span class="elementor-button-content-wrapper">
                                                    <span class="elementor-button-icon">
                                                        <svg aria-hidden="true" class="e-font-icon-svg e-fas-arrow-right"
                                                            viewBox="0 0 448 512" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M190.5 66.9l22.2-22.2c9.4-9.4 24.6-9.4 33.9 0L441 239c9.4 9.4 9.4 24.6 0 33.9L246.6 467.3c-9.4 9.4-24.6 9.4-33.9 0l-22.2-22.2c-9.5-9.5-9.3-25 .4-34.3L311.4 296H24c-13.3 0-24-10.7-24-24v-32c0-13.3 10.7-24 24-24h287.4L190.9 101.2c-9.8-9.3-10-24.8-.4-34.3z">
                                                            </path>
                                                        </svg>
                                                    </span>
                                                    <span class="elementor-button-text">Start Now</span>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-72962f6c elementor-absolute elementor-widget elementor-widget-image"
                        data-id="72962f6c" data-element_type="widget" data-settings='{"_position":"absolute"}'
                        data-widget_type="image.default">
                        <div class="elementor-widget-container">
                            <img decoding="async" width="800" height="800" src="{{ asset('assets/images/blue-depth.svg') }}"
                                class="attachment-large size-large wp-image-920" sizes="(max-width: 800px) 100vw, 800px" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="elementor-element elementor-element-d695ba9 e-flex e-con-boxed e-con e-parent e-lazyloaded"
                data-id="d695ba9" data-element_type="container" data-settings='{"background_background":"classic"}'>
                <div class="e-con-inner">
                    <div class="elementor-element elementor-element-a680ec7 e-con-full e-flex e-con e-child"
                        data-id="a680ec7" data-element_type="container">
                        <div class="elementor-element elementor-element-79ec9f9 e-con-full e-flex e-con e-child"
                            data-id="79ec9f9" data-element_type="container"
                            data-settings='{"background_background":"classic"}'
                            style="background-image: url({{ asset('assets/images/background-cyber.jpg')}})">
                            <div class="elementor-element elementor-element-e360a15 e-con-full e-flex e-con e-child"
                                data-id="e360a15" data-element_type="container">
                                <div class="elementor-element elementor-element-0b3c1f2 elementor-widget elementor-widget-heading"
                                    data-id="0b3c1f2" data-element_type="widget" data-widget_type="heading.default">
                                    <div class="elementor-widget-container">
                                        <h2 class="elementor-heading-title elementor-size-default">
                                            Are you a freelancer or an individual student?
                                        </h2>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-2d2f1f8 elementor-widget elementor-widget-text-editor"
                                    data-id="2d2f1f8" data-element_type="widget" data-widget_type="text-editor.default">
                                    <div class="elementor-widget-container">
                                        <p>
                                            We understand that sometimes our courses are too much for
                                            individual students. <br />Contact us to receive more
                                            affordable personal pricing of up to 30% discount.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-c3cbe3c e-con-full e-flex e-con e-child"
                                data-id="c3cbe3c" data-element_type="container">
                                <div class="elementor-element elementor-element-f315d23 elementor-align-center elementor-tablet-align-left elementor-widget elementor-widget-button"
                                    data-id="f315d23" data-element_type="widget" data-widget_type="button.default">
                                    <div class="elementor-widget-container">
                                        <div class="elementor-button-wrapper">
                                            <a class="elementor-button elementor-button-link elementor-size-sm" href="#">
                                                <span class="elementor-button-content-wrapper">
                                                    <span class="elementor-button-icon">
                                                        <svg aria-hidden="true" class="e-font-icon-svg e-fas-arrow-right"
                                                            viewBox="0 0 448 512" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M190.5 66.9l22.2-22.2c9.4-9.4 24.6-9.4 33.9 0L441 239c9.4 9.4 9.4 24.6 0 33.9L246.6 467.3c-9.4 9.4-24.6 9.4-33.9 0l-22.2-22.2c-9.5-9.5-9.3-25 .4-34.3L311.4 296H24c-13.3 0-24-10.7-24-24v-32c0-13.3 10.7-24 24-24h287.4L190.9 101.2c-9.8-9.3-10-24.8-.4-34.3z">
                                                            </path>
                                                        </svg>
                                                    </span>
                                                    <span class="elementor-button-text">Apply for a discount</span>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="elementor-element elementor-element-196d271 e-flex e-con-boxed e-con e-parent e-lazyloaded"
                data-id="196d271" data-element_type="container" data-settings='{"background_background":"classic"}'>
                <div class="e-con-inner">
                    <div class="elementor-element elementor-element-68c8214 e-con-full e-flex e-con e-child"
                        data-id="68c8214" data-element_type="container" data-settings='{"background_background":"classic"}'>
                        <div class="elementor-element elementor-element-bb4ccf9 elementor-widget elementor-widget-heading"
                            data-id="bb4ccf9" data-element_type="widget" data-widget_type="heading.default">
                            <div class="elementor-widget-container">
                                <h2 class="elementor-heading-title elementor-size-default">
                                    <strong>Trusted by 7,000+ students and companies</strong>
                                </h2>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-442fdd2 e-con-full e-flex e-con e-child"
                            data-id="442fdd2" data-element_type="container">
                            <div class="elementor-element elementor-element-311c299 e-con-full e-grid elementor-hidden-tablet elementor-hidden-mobile e-con e-child"
                                data-id="311c299" data-element_type="container">
                                <img loading="lazy" decoding="async" width="120" height="38"
                                    src="{{ asset('assets/images/SITA_LOGO.png') }}" />
                                <img loading="lazy" decoding="async" width="150" height="38"
                                    src="{{ asset('assets/images/BSES_LOGO.png') }}" />
                                <img loading="lazy" decoding="async" width="220" height="39"
                                    src="{{ asset('assets/images/bajaj_LOGO.png') }}" />
                                <img loading="lazy" decoding="async" width="170" height="21"
                                    src="{{ asset('assets/images/HCL_LOGO.png') }}" />
                                <img loading="lazy" decoding="async" width="140" height="21"
                                    src="{{ asset('assets/images/muthoot_LOGO.png') }}" />
                            </div>
                            <div class="elementor-element elementor-element-3986986 e-con-full e-grid elementor-hidden-tablet elementor-hidden-mobile e-con e-child"
                                data-id="3986986" data-element_type="container">
                                <img loading="lazy" decoding="async" width="146" height="39"
                                    src="{{ asset('assets/images/pecb_LOGO.png') }}"
                                    class="attachment-large size-large wp-image-5708" />
                                <img loading="lazy" decoding="async" width="153" height="54"
                                    src="{{ asset('assets/images/ECCouncil_LOGO.png') }}"
                                    class="attachment-large size-large wp-image-5709" />
                                <img loading="lazy" decoding="async" width="191" height="31"
                                    src="{{ asset('assets/images/malwarebytes-logo-white.svg') }}"
                                    class="attachment-large size-large wp-image-5700" />
                                <img loading="lazy" decoding="async" width="207" height="40"
                                    src="{{ asset('assets/images/proofpoint-logo-white.svg') }}"
                                    class="attachment-large size-large wp-image-5701" />
                            </div>
                            <div class="elementor-element elementor-element-c1e05f6 e-con-full e-grid elementor-hidden-desktop e-con e-child"
                                data-id="c1e05f6" data-element_type="container">
                                <div class="elementor-element elementor-element-fc7e788 e-con-full e-flex e-con e-child"
                                    data-id="fc7e788" data-element_type="container">
                                    <div class="elementor-element elementor-element-bc2f500 elementor-widget elementor-widget-image"
                                        data-id="bc2f500" data-element_type="widget" data-widget_type="image.default">
                                        <div class="elementor-widget-container">
                                            <img loading="lazy" decoding="async" width="195" height="38"
                                                src="{{ asset('assets/SOC Analyst Professional - Foundations » TrainSec_files/Sentinel-one-logo-white.svg') }}"
                                                class="attachment-large size-large wp-image-5698" />
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-30811ce e-con-full e-flex e-con e-child"
                                    data-id="30811ce" data-element_type="container">
                                    <div class="elementor-element elementor-element-4761419 elementor-widget elementor-widget-image"
                                        data-id="4761419" data-element_type="widget" data-widget_type="image.default">
                                        <div class="elementor-widget-container">
                                            <img loading="lazy" decoding="async" width="171" height="38"
                                                src="{{ asset('assets/SOC Analyst Professional - Foundations » TrainSec_files/microsoft-logo-white.svg') }}"
                                                class="attachment-large size-large wp-image-5703" />
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-7f19f41 e-con-full e-flex e-con e-child"
                                    data-id="7f19f41" data-element_type="container">
                                    <div class="elementor-element elementor-element-c474e7f elementor-widget elementor-widget-image"
                                        data-id="c474e7f" data-element_type="widget" data-widget_type="image.default">
                                        <div class="elementor-widget-container">
                                            <img loading="lazy" decoding="async" width="113" height="39"
                                                src="{{ asset('assets/SOC Analyst Professional - Foundations » TrainSec_files/google-logo-white.svg') }}"
                                                class="attachment-large size-large wp-image-5704" />
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-541255d e-con-full e-flex e-con e-child"
                                    data-id="541255d" data-element_type="container">
                                    <div class="elementor-element elementor-element-2885657 elementor-widget elementor-widget-image"
                                        data-id="2885657" data-element_type="widget" data-widget_type="image.default">
                                        <div class="elementor-widget-container">
                                            <img loading="lazy" decoding="async" width="186" height="21"
                                                src="{{ asset('assets/SOC Analyst Professional - Foundations » TrainSec_files/mandiant-logo-white.svg') }}"
                                                class="attachment-large size-large wp-image-5705" />
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-efdbdd2 e-con-full e-flex e-con e-child"
                                    data-id="efdbdd2" data-element_type="container">
                                    <div class="elementor-element elementor-element-d0cb1c2 elementor-widget elementor-widget-image"
                                        data-id="d0cb1c2" data-element_type="widget" data-widget_type="image.default">
                                        <div class="elementor-widget-container">
                                            <img loading="lazy" decoding="async" width="76" height="33"
                                                src="{{ asset('assets/SOC Analyst Professional - Foundations » TrainSec_files/intel-logo-white.svg') }}"
                                                class="attachment-large size-large wp-image-5706" />
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-0897446 e-con-full e-flex e-con e-child"
                                    data-id="0897446" data-element_type="container">
                                    <div class="elementor-element elementor-element-b0cd9ad elementor-widget elementor-widget-image"
                                        data-id="b0cd9ad" data-element_type="widget" data-widget_type="image.default">
                                        <div class="elementor-widget-container">
                                            <img loading="lazy" decoding="async" width="71" height="38"
                                                src="{{ asset('assets/SOC Analyst Professional - Foundations » TrainSec_files/cisco-white-logo-tr.svg') }}"
                                                class="attachment-large size-large wp-image-5707" />
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-92c1ea5 e-con-full e-flex e-con e-child"
                                    data-id="92c1ea5" data-element_type="container">
                                    <div class="elementor-element elementor-element-ad19731 elementor-widget elementor-widget-image"
                                        data-id="ad19731" data-element_type="widget" data-widget_type="image.default">
                                        <div class="elementor-widget-container">
                                            <img loading="lazy" decoding="async" width="146" height="39"
                                                src="{{ asset('assets/SOC Analyst Professional - Foundations » TrainSec_files/citibank-logo-white.svg') }}"
                                                class="attachment-large size-large wp-image-5708" />
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-e260f1b e-con-full e-flex e-con e-child"
                                    data-id="e260f1b" data-element_type="container">
                                    <div class="elementor-element elementor-element-21a156d elementor-widget elementor-widget-image"
                                        data-id="21a156d" data-element_type="widget" data-widget_type="image.default">
                                        <div class="elementor-widget-container">
                                            <img loading="lazy" decoding="async" width="153" height="54"
                                                src="{{ asset('assets/SOC Analyst Professional - Foundations » TrainSec_files/alfa-bank-logo-white.svg') }}"
                                                class="attachment-large size-large wp-image-5709" />
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-4598cb0 e-con-full e-flex e-con e-child"
                                    data-id="4598cb0" data-element_type="container">
                                    <div class="elementor-element elementor-element-93c37fe elementor-widget elementor-widget-image"
                                        data-id="93c37fe" data-element_type="widget" data-widget_type="image.default">
                                        <div class="elementor-widget-container">
                                            <img loading="lazy" decoding="async" width="191" height="31"
                                                src="{{ asset('assets/SOC Analyst Professional - Foundations » TrainSec_files/malwarebytes-logo-white.svg') }}"
                                                class="attachment-large size-large wp-image-5700" />
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-4e45173 e-con-full e-flex e-con e-child"
                                    data-id="4e45173" data-element_type="container">
                                    <div class="elementor-element elementor-element-36f7ffd elementor-widget elementor-widget-image"
                                        data-id="36f7ffd" data-element_type="widget" data-widget_type="image.default">
                                        <div class="elementor-widget-container">
                                            <img loading="lazy" decoding="async" width="207" height="40"
                                                src="{{ asset('assets/SOC Analyst Professional - Foundations » TrainSec_files/proofpoint-logo-white.svg') }}"
                                                class="attachment-large size-large wp-image-5701" />
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-1c0ef6c e-con-full e-flex e-con e-child"
                                    data-id="1c0ef6c" data-element_type="container">
                                    <div class="elementor-element elementor-element-27c6801 elementor-widget elementor-widget-image"
                                        data-id="27c6801" data-element_type="widget" data-widget_type="image.default">
                                        <div class="elementor-widget-container">
                                            <img loading="lazy" decoding="async" width="113" height="40"
                                                src="{{ asset('assets/SOC Analyst Professional - Foundations » TrainSec_files/epam-logo-white.svg') }}"
                                                class="attachment-large size-large wp-image-5702" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="elementor-element elementor-element-ade29c5 e-flex e-con-boxed e-con e-parent e-lazyloaded"
                data-id="ade29c5" data-element_type="container" data-settings='{"background_background":"classic"}'>
                <div class="e-con-inner">
                    <div class="elementor-element elementor-element-04f6af7 e-con-full e-flex e-con e-child"
                        data-id="04f6af7" data-element_type="container">
                        <div class="elementor-element elementor-element-a872e80 e-grid e-con-full e-con e-child"
                            data-id="a872e80" data-element_type="container"
                            data-settings='{"background_background":"gradient"}'>
                            <div class="elementor-element elementor-element-862d965 e-con-full e-flex e-con e-child"
                                data-id="862d965" data-element_type="container">
                                <div class="elementor-element elementor-element-a407451 elementor-widget elementor-widget-text-editor"
                                    data-id="a407451" data-element_type="widget" data-widget_type="text-editor.default">
                                    <div class="elementor-widget-container">
                                        <p style="font-size: 32px;">264+ hours</p>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-7fdcdeb elementor-widget elementor-widget-text-editor"
                                    data-id="7fdcdeb" data-element_type="widget" data-widget_type="text-editor.default">
                                    <div class="elementor-widget-container">
                                        <p style="font-size: 18px;">recorded sessions</p>
                                    </div>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-f17d0a5 e-con-full e-flex e-con e-child"
                                data-id="f17d0a5" data-element_type="container">
                                <div class="elementor-element elementor-element-cb3fb28 elementor-widget elementor-widget-text-editor"
                                    data-id="cb3fb28" data-element_type="widget" data-widget_type="text-editor.default">
                                    <div class="elementor-widget-container">
                                        <p style="font-size: 32px;">Attack Simulations</p>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-c91a7de elementor-widget elementor-widget-text-editor"
                                    data-id="c91a7de" data-element_type="widget" data-widget_type="text-editor.default">
                                    <div class="elementor-widget-container">
                                        <p style="font-size: 18px;">cyber range capstones</p>
                                    </div>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-ce7aab9 e-con-full e-flex e-con e-child"
                                data-id="ce7aab9" data-element_type="container">
                                <div class="elementor-element elementor-element-0014820 elementor-widget elementor-widget-text-editor"
                                    data-id="0014820" data-element_type="widget" data-widget_type="text-editor.default">
                                    <div class="elementor-widget-container">
                                        <p style="font-size: 32px;">30+</p>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-83f8c49 elementor-widget elementor-widget-text-editor"
                                    data-id="83f8c49" data-element_type="widget" data-widget_type="text-editor.default">
                                    <div class="elementor-widget-container">
                                        <p style="font-size: 18px;">lessons categorized into 5 modules</p>
                                    </div>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-e862d2d e-con-full e-flex e-con e-child"
                                data-id="e862d2d" data-element_type="container">
                                <div class="elementor-element elementor-element-2b73888 elementor-widget elementor-widget-text-editor"
                                    data-id="2b73888" data-element_type="widget" data-widget_type="text-editor.default">
                                    <div class="elementor-widget-container">
                                        <p style="font-size: 32px;">10+</p>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-67d2c14 elementor-widget elementor-widget-text-editor"
                                    data-id="67d2c14" data-element_type="widget" data-widget_type="text-editor.default">
                                    <div class="elementor-widget-container">
                                        <p style="font-size: 18px;">downloadable resources</p>
                                    </div>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-69b9c64 e-con-full e-flex e-con e-child"
                                data-id="69b9c64" data-element_type="container">
                                <div class="elementor-element elementor-element-5ceb20a elementor-widget elementor-widget-text-editor"
                                    data-id="5ceb20a" data-element_type="widget" data-widget_type="text-editor.default">
                                    <div class="elementor-widget-container">
                                        <p style="font-size: 32px;">CoPe Alumni Network</p>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-9839455 elementor-widget elementor-widget-text-editor"
                                    data-id="9839455" data-element_type="widget" data-widget_type="text-editor.default">
                                    <div class="elementor-widget-container">
                                        <p style="font-size: 18px;">Personalized Mentorship</p>
                                    </div>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-93385aa e-con-full e-flex e-con e-child"
                                data-id="93385aa" data-element_type="container">
                                <div class="elementor-element elementor-element-ab14a14 elementor-widget elementor-widget-text-editor"
                                    data-id="ab14a14" data-element_type="widget" data-widget_type="text-editor.default">
                                    <div class="elementor-widget-container">
                                        <p style="font-size: 32px;">Certification</p>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-ab99a12 elementor-widget elementor-widget-text-editor"
                                    data-id="ab99a12" data-element_type="widget" data-widget_type="text-editor.default">
                                    <div class="elementor-widget-container">
                                        <p style="font-size: 18px;">Certificate of completion</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="elementor-element elementor-element-5f03ce3 e-flex e-con-boxed e-con e-parent e-lazyloaded"
                data-id="5f03ce3" data-element_type="container" data-settings='{"background_background":"classic"}'>
                <div class="e-con-inner">
                    <div class="elementor-element elementor-element-c317934 e-con-full e-flex e-con e-child"
                        data-id="c317934" data-element_type="container">
                        <div class="elementor-element elementor-element-6356f28 elementor-widget elementor-widget-heading"
                            data-id="6356f28" data-element_type="widget" data-widget_type="heading.default">
                            <div class="elementor-widget-container">
                                <h2 class="elementor-heading-title elementor-size-default">
                                    CURRICULUM AT A GLANCE
                                </h2>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-a69df84 elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list"
                            data-id="a69df84" data-element_type="widget" data-widget_type="icon-list.default">
                            <div class="elementor-widget-container">
                                <ul class="elementor-icon-list-items">
                                    <li class="elementor-icon-list-item">
                                        <span class="elementor-icon-list-icon">
                                            <svg aria-hidden="true" class="e-font-icon-svg e-fas-check-circle"
                                                viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z">
                                                </path>
                                            </svg>
                                        </span>
                                        <span class="elementor-icon-list-text">Cybersecurity Foundations – network,
                                            protocols, essential toolchain</span>
                                    </li>
                                    <li class="elementor-icon-list-item">
                                        <span class="elementor-icon-list-icon">
                                            <svg aria-hidden="true" class="e-font-icon-svg e-fas-check-circle"
                                                viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z">
                                                </path>
                                            </svg>
                                        </span>
                                        <span class="elementor-icon-list-text">Application Security & Pentesting – exploit
                                            discovery, mitigation techniques</span>
                                    </li>
                                    <li class="elementor-icon-list-item">
                                        <span class="elementor-icon-list-icon">
                                            <svg aria-hidden="true" class="e-font-icon-svg e-fas-check-circle"
                                                viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z">
                                                </path>
                                            </svg>
                                        </span>
                                        <span class="elementor-icon-list-text"><b>Red Team Operations – covert ingress,
                                                lateral manoeuvres</b></span>
                                    </li>
                                    <li class="elementor-icon-list-item">
                                        <span class="elementor-icon-list-icon">
                                            <svg aria-hidden="true" class="e-font-icon-svg e-fas-check-circle"
                                                viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z">
                                                </path>
                                            </svg>
                                        </span>
                                        <span class="elementor-icon-list-text">Blue Team Defence – detection, triage,
                                            incident containment</span>
                                    </li>
                                    <li class="elementor-icon-list-item">
                                        <span class="elementor-icon-list-icon">
                                            <svg aria-hidden="true" class="e-font-icon-svg e-fas-check-circle"
                                                viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z">
                                                </path>
                                            </svg>
                                        </span>
                                        <span class="elementor-icon-list-text">Cloud & Container Security – hybrid surface,
                                            attack resilience</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-343889e e-con-full e-flex e-con e-child"
                        data-id="343889e" data-element_type="container"
                        data-settings='{"background_background":"gradient"}'>
                        <div class="elementor-element elementor-element-462cb5a elementor-widget elementor-widget-heading"
                            data-id="462cb5a" data-element_type="widget" data-widget_type="heading.default">
                            <div class="elementor-widget-container">
                                <h2 class="elementor-heading-title elementor-size-default">
                                    <strong>ADMISSIONS & KEY DATES</strong>
                                </h2>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-f41a2b0 elementor-widget elementor-widget-text-editor"
                            data-id="f41a2b0" data-element_type="widget" data-widget_type="text-editor.default">
                            <div class="elementor-widget-container">
                                Selective cohorts ensure deep mentorship, so early application is essential.
                                <ul>
                                    <li>Eligibility: final-year engineers or one-year IT experience</li>
                                    <li>Next cohort: 23 August 2025</li>
                                    <li>Application deadline: 15 July 2025</li>
                                    <li>Financing: zero-interest loan up to ₹1.8 lakh</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="elementor-element elementor-element-02cab04 e-flex e-con-boxed e-con e-parent" data-id="02cab04"
                data-element_type="container" data-settings='{"background_background":"classic"}'>
                <div class="e-con-inner">
                    <div class="elementor-element elementor-element-7ca0b6a e-flex e-con-boxed e-con e-child"
                        data-id="7ca0b6a" data-element_type="container"
                        data-settings='{"background_background":"gradient"}'>
                        <div class="e-con-inner">
                            <div class="elementor-element elementor-element-65691a3 e-con-full e-flex e-con e-child"
                                data-id="65691a3" data-element_type="container">
                                <div class="elementor-element elementor-element-4b6b30a elementor-widget elementor-widget-heading"
                                    data-id="4b6b30a" data-element_type="widget" data-widget_type="heading.default">
                                    <div class="elementor-widget-container">
                                        <h2 class="elementor-heading-title elementor-size-default">
                                            Centre of Professional Excellence - CoPE
                                        </h2>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-6e9bc88 elementor-widget elementor-widget-text-editor"
                                    data-id="6e9bc88" data-element_type="widget" data-widget_type="text-editor.default">
                                    <div class="elementor-widget-container">
                                        <p style="font-size: 18px; text-align: justify; margin-bottom: 10px;">
                                            <b>Codec Networks</b>, a global leader in cybersecurity services, proudly
                                            presents <b>Centre for Professional Excellence - CoPE</b>, a next-generation
                                            skilling platform that combines<b> real-world cyber operations with
                                                career-transforming education.</b>
                                        </p>
                                        <p style="font-size: 18px; text-align: justify;">At Codec Networks’ Centre for
                                            Professional Excellence (CoPE), our training
                                            delivery methodology is built on a simple belief: <i>“If it’s not practical,
                                                it’s not transformational.”</i> That’s why we go beyond traditional
                                            classroom
                                            formats to deliver an immersive, project-driven learning experience grounded in
                                            real-time industry use cases.
                                            Designed by cybersecurity practitioners, red teamers, compliance auditors, and
                                            SOC leaders, the CoPE learning framework equips students not just with
                                            certifications, but with battle-tested competencies that map directly to job
                                            roles in red teaming, threat hunting, application security, cloud audits, and
                                            more.
                                        </p>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-aafa659 elementor-widget elementor-widget-heading"
                                    data-id="aafa659" data-element_type="widget" data-widget_type="heading.default">
                                    <div class="elementor-widget-container">
                                        <h2 class="elementor-heading-title elementor-size-default">
                                            Video Preview:
                                        </h2>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-3666e72 elementor-widget__width-initial elementor-widget-mobile__width-inherit elementor-widget elementor-widget-video"
                                    data-id="3666e72" data-element_type="widget"
                                    data-settings='{"youtube_url":"https:\/\/www.youtube.com\/watch?v=vcTWTM-Xn1U","lazy_load":"yes","video_type":"youtube","controls":"yes"}'
                                    data-widget_type="video.default">
                                    <div class="elementor-widget-container">
                                        <div class="elementor-wrapper elementor-open-inline">
                                            <div class="elementor-video"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-b788b22 elementor-widget elementor-widget-text-editor"
                                    data-id="b788b22" data-element_type="widget" data-widget_type="text-editor.default">
                                    <div class="elementor-widget-container">
                                        <p style="font-size: 32px; font-weight: bold; margin-bottom: 10px;">
                                            Why this course is important for learners:
                                        </p>
                                        <p style="font-size: 18px;">
                                            Codec Networks is not a conventional training company—it is a globally active
                                            cybersecurity firm that operates at the forefront of securing digital
                                            ecosystems. By leveraging its frontline experience and deep domain expertise,
                                            Codec has built the Centre for Professional Excellence (CoPE) to address a
                                            critical gap in the cybersecurity talent pipeline: the lack of industry-ready
                                            professionals with hands-on, multi-domain skills.
                                        </p>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-df5447f elementor-widget elementor-widget-heading"
                                    data-id="df5447f" data-element_type="widget" data-widget_type="heading.default">
                                    <div class="elementor-widget-container">
                                        <h3 class="elementor-heading-title elementor-size-default">
                                            CN Trainers
                                        </h3>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-8d9b6e7 elementor-widget elementor-widget-text-editor"
                                    data-id="8d9b6e7" data-element_type="widget" data-widget_type="text-editor.default">
                                    <div class="elementor-widget-container">
                                        <p>
                                            <span>Our trainers are seasoned industry-insiders with a
                                                deep, practical understanding of cybersecurity research
                                                and development</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-18570da e-con-full e-flex e-con e-child"
                                data-id="18570da" data-element_type="container"
                                data-settings='{"background_background":"gradient"}'>
                                <div class="elementor-element elementor-element-6079fa3 e-con-full e-flex e-con e-child"
                                    data-id="6079fa3" data-element_type="container">
                                    <div class="elementor-element elementor-element-c706057 elementor-widget elementor-widget-image"
                                        data-id="c706057" data-element_type="widget" data-widget_type="image.default">
                                        <div class="elementor-widget-container">
                                            <img loading="lazy" decoding="async" width="601" height="601"
                                                src="{{ asset('assets/images/blank_profile.jpg') }}"
                                                class="attachment-large size-large wp-image-1029" alt="Mr. Harshit Bhardwaj"
                                                sizes="(max-width: 601px) 100vw, 601px" />
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-b9b7a83 elementor-widget elementor-widget-heading"
                                        data-id="b9b7a83" data-element_type="widget" data-widget_type="heading.default">
                                        <div class="elementor-widget-container">
                                            <h2 class="elementor-heading-title elementor-size-default">
                                                Harshit Bhardwaj
                                            </h2>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-46eee07 elementor-widget elementor-widget-text-editor"
                                        data-id="46eee07" data-element_type="widget" data-widget_type="text-editor.default">
                                        <div class="elementor-widget-container">
                                            <div class="css-175oi2r r-1adg3ll r-6gpygo">
                                                <div class="css-175oi2r">
                                                    <div class="css-146c3p1 r-bcqeeo r-1ttztb7 r-qvutc0 r-37j5jr r-a023e6 r-rjixqe r-16dba41"
                                                        dir="auto" data-testid="UserDescription">
                                                        <span
                                                            class="css-1jxf684 r-bcqeeo r-1ttztb7 r-qvutc0 r-poiln3">Information
                                                            Security Analyst | FACT'24 Qualified | Ex-FSL | CHFI, ISC² CC,
                                                            AWS, CCNA | ISO/IEC 27001 Information Security Associate |
                                                            Tryhackme Top 1%</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-5f17214 elementor-widget elementor-widget-text-editor"
                                        data-id="5f17214" data-element_type="widget" data-widget_type="text-editor.default">
                                        <div class="elementor-widget-container">
                                            <p>
                                                <a href="https://www.linkedin.com/in/harshit-bhardwaj-65388622a/"
                                                    rel="nofollow" target="_blank"><b>@Harry</b></a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-fae9fbc e-con-full e-flex e-con e-child"
                                    data-id="fae9fbc" data-element_type="container">
                                    <div class="elementor-element elementor-element-84a7864 elementor-widget elementor-widget-text-editor"
                                        data-id="84a7864" data-element_type="widget" data-widget_type="text-editor.default">
                                        <div class="elementor-widget-container">
                                            <p>
                                                Cybersecurity researcher and red teamer who lives both
                                                on the offensive and defensive fronts. The author of the
                                                “Antivirus Bypass Techniques” book, expert in malware
                                                research, reverse engineering, penetration testing,
                                                digital forensics, and incident response.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-041aeaf e-con-full e-flex e-con e-child"
                                        data-id="041aeaf" data-element_type="container">
                                        <div class="elementor-element elementor-element-53a3eda elementor-widget elementor-widget-text-editor"
                                            data-id="53a3eda" data-element_type="widget"
                                            data-widget_type="text-editor.default">
                                            <div class="elementor-widget-container">
                                                <p>
                                                    <a href="https://www.amazon.com/stores/Uriel-Kosayev/author/B09528F13R"
                                                        rel="nofollow noopener" target="_blank"><u>Harshit’s
                                                            publications</u></a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-01219ea e-con-full e-flex e-con e-child"
                                        data-id="01219ea" data-element_type="container">
                                        <div class="elementor-element elementor-element-6c67887 e-con-full e-flex e-con e-child"
                                            data-id="6c67887" data-element_type="container">
                                            <div class="elementor-element elementor-element-c0bd6b5 elementor-widget elementor-widget-image"
                                                data-id="c0bd6b5" data-element_type="widget"
                                                data-widget_type="image.default">
                                                <div class="elementor-widget-container">
                                                    <img loading="lazy" decoding="async" width="173" height="108"
                                                        src="{{ asset('assets/SOC Analyst Professional - Foundations » TrainSec_files/Uriel-Kosayev.svg') }}"
                                                        class="attachment-large size-large wp-image-1050" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-cdba421 e-con-full e-flex e-con e-child"
                                            data-id="cdba421" data-element_type="container">
                                            <div class="elementor-element elementor-element-dcf514d elementor-shape-circle elementor-grid-5 e-grid-align-right elementor-widget elementor-widget-social-icons"
                                                data-id="dcf514d" data-element_type="widget"
                                                data-widget_type="social-icons.default">
                                                <div class="elementor-widget-container">
                                                    <div class="elementor-social-icons-wrapper elementor-grid" role="list">
                                                        <span class="elementor-grid-item" role="listitem">
                                                            <a class="elementor-icon elementor-social-icon elementor-social-icon-twitter elementor-repeater-item-6b64325"
                                                                href="https://x.com/intent/user?screen_name=MalFuzzer"
                                                                target="_blank" rel="nofollow">
                                                                <span class="elementor-screen-only">Twitter</span>
                                                                <svg class="e-font-icon-svg e-fab-twitter"
                                                                    viewBox="0 0 512 512"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z">
                                                                    </path>
                                                                </svg>
                                                            </a>
                                                        </span>
                                                        <span class="elementor-grid-item" role="listitem">
                                                            <a class="elementor-icon elementor-social-icon elementor-social-icon-linkedin elementor-repeater-item-f8c8c40"
                                                                href="http://linkedin.com/in/malfuzzer" target="_blank"
                                                                rel="nofollow noopener">
                                                                <span class="elementor-screen-only">Linkedin</span>
                                                                <svg class="e-font-icon-svg e-fab-linkedin"
                                                                    viewBox="0 0 448 512"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M416 32H31.9C14.3 32 0 46.5 0 64.3v383.4C0 465.5 14.3 480 31.9 480H416c17.6 0 32-14.5 32-32.3V64.3c0-17.8-14.4-32.3-32-32.3zM135.4 416H69V202.2h66.5V416zm-33.2-243c-21.3 0-38.5-17.3-38.5-38.5S80.9 96 102.2 96c21.2 0 38.5 17.3 38.5 38.5 0 21.3-17.2 38.5-38.5 38.5zm282.1 243h-66.4V312c0-24.8-.5-56.7-34.5-56.7-34.6 0-39.9 27-39.9 54.9V416h-66.4V202.2h63.7v29.2h.9c8.9-16.8 30.6-34.5 62.9-34.5 67.2 0 79.7 44.3 79.7 101.9V416z">
                                                                    </path>
                                                                </svg>
                                                            </a>
                                                        </span>
                                                        <span class="elementor-grid-item" role="listitem">
                                                            <a class="elementor-icon elementor-social-icon elementor-social-icon-youtube elementor-repeater-item-0856744"
                                                                href="https://www.youtube.com/@UrielKosayev" target="_blank"
                                                                rel="nofollow noopener">
                                                                <span class="elementor-screen-only">Youtube</span>
                                                                <svg class="e-font-icon-svg e-fab-youtube"
                                                                    viewBox="0 0 576 512"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M549.655 124.083c-6.281-23.65-24.787-42.276-48.284-48.597C458.781 64 288 64 288 64S117.22 64 74.629 75.486c-23.497 6.322-42.003 24.947-48.284 48.597-11.412 42.867-11.412 132.305-11.412 132.305s0 89.438 11.412 132.305c6.281 23.65 24.787 41.5 48.284 47.821C117.22 448 288 448 288 448s170.78 0 213.371-11.486c23.497-6.321 42.003-24.171 48.284-47.821 11.412-42.867 11.412-132.305 11.412-132.305s0-89.438-11.412-132.305zm-317.51 213.508V175.185l142.739 81.205-142.739 81.201z">
                                                                    </path>
                                                                </svg>
                                                            </a>
                                                        </span>
                                                        <span class="elementor-grid-item" role="listitem">
                                                            <a class="elementor-icon elementor-social-icon elementor-social-icon-github elementor-repeater-item-aa1f951"
                                                                href="https://github.com/malfuzzer" target="_blank"
                                                                rel="nofollow noopener">
                                                                <span class="elementor-screen-only">Github</span>
                                                                <svg class="e-font-icon-svg e-fab-github"
                                                                    viewBox="0 0 496 512"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M165.9 397.4c0 2-2.3 3.6-5.2 3.6-3.3.3-5.6-1.3-5.6-3.6 0-2 2.3-3.6 5.2-3.6 3-.3 5.6 1.3 5.6 3.6zm-31.1-4.5c-.7 2 1.3 4.3 4.3 4.9 2.6 1 5.6 0 6.2-2s-1.3-4.3-4.3-5.2c-2.6-.7-5.5.3-6.2 2.3zm44.2-1.7c-2.9.7-4.9 2.6-4.6 4.9.3 2 2.9 3.3 5.9 2.6 2.9-.7 4.9-2.6 4.6-4.6-.3-1.9-3-3.2-5.9-2.9zM244.8 8C106.1 8 0 113.3 0 252c0 110.9 69.8 205.8 169.5 239.2 12.8 2.3 17.3-5.6 17.3-12.1 0-6.2-.3-40.4-.3-61.4 0 0-70 15-84.7-29.8 0 0-11.4-29.1-27.8-36.6 0 0-22.9-15.7 1.6-15.4 0 0 24.9 2 38.6 25.8 21.9 38.6 58.6 27.5 72.9 20.9 2.3-16 8.8-27.1 16-33.7-55.9-6.2-112.3-14.3-112.3-110.5 0-27.5 7.6-41.3 23.6-58.9-2.6-6.5-11.1-33.3 2.6-67.9 20.9-6.5 69 27 69 27 20-5.6 41.5-8.5 62.8-8.5s42.8 2.9 62.8 8.5c0 0 48.1-33.6 69-27 13.7 34.7 5.2 61.4 2.6 67.9 16 17.7 25.8 31.5 25.8 58.9 0 96.5-58.9 104.2-114.8 110.5 9.2 7.9 17 22.9 17 46.4 0 33.7-.3 75.4-.3 83.6 0 6.5 4.6 14.4 17.3 12.1C428.2 457.8 496 362.9 496 252 496 113.3 383.5 8 244.8 8zM97.2 352.9c-1.3 1-1 3.3.7 5.2 1.6 1.6 3.9 2.3 5.2 1 1.3-1 1-3.3-.7-5.2-1.6-1.6-3.9-2.3-5.2-1zm-10.8-8.1c-.7 1.3.3 2.9 2.3 3.9 1.6 1 3.6.7 4.3-.7.7-1.3-.3-2.9-2.3-3.9-2-.6-3.6-.3-4.3.7zm32.4 35.6c-1.6 1.3-1 4.3 1.3 6.2 2.3 2.3 5.2 2.6 6.5 1 1.3-1.3.7-4.3-1.3-6.2-2.2-2.3-5.2-2.6-6.5-1zm-11.4-14.7c-1.6 1-1.6 3.6 0 5.9 1.6 2.3 4.3 3.3 5.6 2.3 1.6-1.3 1.6-3.9 0-6.2-1.4-2.3-4-3.3-5.6-2z">
                                                                    </path>
                                                                </svg>
                                                            </a>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-2747146 elementor-align-center elementor-widget elementor-widget-button"
                                                data-id="2747146" data-element_type="widget"
                                                data-widget_type="button.default">
                                                <div class="elementor-widget-container">
                                                    <div class="elementor-button-wrapper">
                                                        <a class="elementor-button elementor-button-link elementor-size-sm"
                                                            href="#">
                                                            <span class="elementor-button-content-wrapper">
                                                                <span class="elementor-button-text">Harshit's Courses</span>
                                                            </span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="elementor-element elementor-element-3e2efcd7 e-flex e-con-boxed e-con e-parent" data-id="3e2efcd7"
                data-element_type="container" data-settings='{"background_background":"classic"}'>
                <div class="e-con-inner">
                    <div class="elementor-element elementor-element-5f78968d e-con-full e-flex e-con e-child"
                        data-id="5f78968d" data-element_type="container"
                        data-settings='{"background_background":"classic"}'>
                        <div class="elementor-element elementor-element-2bc759b2 e-con-full e-flex e-con e-child"
                            data-id="2bc759b2" data-element_type="container">
                            <div class="elementor-element elementor-element-2dca9c29 elementor-widget elementor-widget-heading"
                                data-id="2dca9c29" data-element_type="widget" data-widget_type="heading.default">
                                <div class="elementor-widget-container">
                                    <h2 class="elementor-heading-title elementor-size-default">
                                        PGCAC: Course Contents
                                    </h2>
                                </div>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-54e2625e e-con-full e-flex e-con e-child"
                            data-id="54e2625e" data-element_type="container"
                            data-settings='{"background_background":"classic"}'>
                            <div class="elementor-element elementor-element-6db67871 e-con-full e-flex e-con e-child"
                                data-id="6db67871" data-element_type="container">
                                <div class="elementor-element elementor-element-6ca653d9 elementor-widget elementor-widget-heading"
                                    data-id="6ca653d9" data-element_type="widget" data-widget_type="heading.default">
                                    <div class="elementor-widget-container">
                                        <h2 class="elementor-heading-title elementor-size-default">
                                            Chapters included in this course
                                        </h2>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-82e8bec elementor-button-success elementor-mobile-align-left elementor-widget-mobile__width-inherit elementor-widget__width-initial elementor-widget elementor-widget-button"
                                    data-id="82e8bec" data-element_type="widget" data-widget_type="button.default">
                                    <div class="elementor-widget-container">
                                        <div class="elementor-button-wrapper">
                                            <a class="elementor-button elementor-button-link elementor-size-sm"
                                                href="{{ asset('assets/files/syllabus.pdf') }}" download="syllabus.pdf">
                                                <span class="elementor-button-content-wrapper">
                                                    <span class="elementor-button-icon">
                                                        <svg aria-hidden="true" class="e-font-icon-svg e-far-file-pdf"
                                                            viewBox="0 0 384 512" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M369.9 97.9L286 14C277 5 264.8-.1 252.1-.1H48C21.5 0 0 21.5 0 48v416c0 26.5 21.5 48 48 48h288c26.5 0 48-21.5 48-48V131.9c0-12.7-5.1-25-14.1-34zM332.1 128H256V51.9l76.1 76.1zM48 464V48h160v104c0 13.3 10.7 24 24 24h104v288H48zm250.2-143.7c-12.2-12-47-8.7-64.4-6.5-17.2-10.5-28.7-25-36.8-46.3 3.9-16.1 10.1-40.6 5.4-56-4.2-26.2-37.8-23.6-42.6-5.9-4.4 16.1-.4 38.5 7 67.1-10 23.9-24.9 56-35.4 74.4-20 10.3-47 26.2-51 46.2-3.3 15.8 26 55.2 76.1-31.2 22.4-7.4 46.8-16.5 68.4-20.1 18.9 10.2 41 17 55.8 17 25.5 0 28-28.2 17.5-38.7zm-198.1 77.8c5.1-13.7 24.5-29.5 30.4-35-19 30.3-30.4 35.7-30.4 35zm81.6-190.6c7.4 0 6.7 32.1 1.8 40.8-4.4-13.9-4.3-40.8-1.8-40.8zm-24.4 136.6c9.7-16.9 18-37 24.7-54.7 8.3 15.1 18.9 27.2 30.1 35.5-20.8 4.3-38.9 13.1-54.8 19.2zm131.6-5s-5 6-37.3-7.8c35.1-2.6 40.9 5.4 37.3 7.8z">
                                                            </path>
                                                        </svg>
                                                    </span>
                                                    <span class="elementor-button-text">Download syllabus</span>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-22ed98af e-con-full e-flex e-con e-child"
                                data-id="22ed98af" data-element_type="container">
                                <h1 class="elementor-heading-title elementor-size-default"
                                    style="font-size: 40px; margin-bottom: 20px;">
                                    Phase 1: Core Modules (6 Months)
                                </h1>
                                <div class="elementor-element elementor-element-37492f34 e-con-full e-flex e-con e-child"
                                    data-id="37492f34" data-element_type="container">
                                    <div class="elementor-element elementor-element-24d5d207 e-con-full e-flex e-con e-child"
                                        data-id="24d5d207" data-element_type="container">
                                        <div class="elementor-element elementor-element-3ca5ba10 elementor-widget elementor-widget-heading"
                                            data-id="3ca5ba10" data-element_type="widget"
                                            data-widget_type="heading.default">
                                            <div class="elementor-widget-container">
                                                <h2 class="elementor-heading-title elementor-size-default">
                                                    Module 01: Cybersecurity Foundations
                                                </h2>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-48424c55 elementor-widget elementor-widget-text-editor"
                                            data-id="48424c55" data-element_type="widget"
                                            data-widget_type="text-editor.default">
                                            <div class="elementor-widget-container">
                                                <p>
                                                    The opening module cements every learner’s baseline, revisiting the
                                                    networking and operating-system mechanics that power modern
                                                    infrastructure. You will rebuild your mental model of data flow from
                                                    physical media through OSI/TCP-IP layers, DNS resolution, VPN tunnelling
                                                    and TLS encryption while comparing Windows and Linux internals
                                                    side-by-side. The threat landscape is then mapped with MITRE ATT&CK and
                                                    the Cyber Kill Chain so you can recognise how real-world actors abuse
                                                    these building blocks. Guided labs with Nmap, Wireshark, Burp Suite,
                                                    Nessus and Splunk turn theory into muscle-memory, and a sprint on
                                                    Bash/Python scripting shows how to automate reconnaissance and triage.
                                                    By the end, you can stand up a clean lab, interpret low-level traffic or
                                                    syscalls, and speak the common language that unites offensive and
                                                    defensive teams.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-554a6329 elementor-list-item-link-inline elementor-icon-list--layout-traditional elementor-widget elementor-widget-icon-list"
                                            data-id="554a6329" data-element_type="widget"
                                            data-widget_type="icon-list.default">
                                            <div class="elementor-widget-container">
                                                <ul class="elementor-icon-list-items">
                                                    <li class="elementor-icon-list-item">
                                                        <span class="elementor-icon-list-icon">
                                                            <svg aria-hidden="true"
                                                                class="e-font-icon-svg e-fas-play-circle"
                                                                viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm115.7 272l-176 101c-15.8 8.8-35.7-2.5-35.7-21V152c0-18.4 19.8-29.8 35.7-21l176 107c16.4 9.2 16.4 32.9 0 42z">
                                                                </path>
                                                            </svg>
                                                        </span>
                                                        <span class="elementor-icon-list-text">OSI, TCP/IP, VPN, DNS, TLS,
                                                            Windows & Linux internals</span>
                                                    </li>
                                                    <li class="elementor-icon-list-item">
                                                        <span class="elementor-icon-list-icon">
                                                            <svg aria-hidden="true"
                                                                class="e-font-icon-svg e-fas-play-circle"
                                                                viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm115.7 272l-176 101c-15.8 8.8-35.7-2.5-35.7-21V152c0-18.4 19.8-29.8 35.7-21l176 107c16.4 9.2 16.4 32.9 0 42z">
                                                                </path>
                                                            </svg>
                                                        </span>
                                                        <span class="elementor-icon-list-text">MITRE ATT&CK, Cyber Kill
                                                            Chain, Threat Landscape</span>
                                                    </li>
                                                    <li class="elementor-icon-list-item">
                                                        <span class="elementor-icon-list-icon">
                                                            <svg aria-hidden="true"
                                                                class="e-font-icon-svg e-fas-play-circle"
                                                                viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm115.7 272l-176 101c-15.8 8.8-35.7-2.5-35.7-21V152c0-18.4 19.8-29.8 35.7-21l176 107c16.4 9.2 16.4 32.9 0 42z">
                                                                </path>
                                                            </svg>
                                                        </span>
                                                        <span class="elementor-icon-list-text">Tooling: Nmap, Wireshark,
                                                            Burp, Splunk, Nessus</span>
                                                    </li>
                                                    <li class="elementor-icon-list-item">
                                                        <span class="elementor-icon-list-icon">
                                                            <svg aria-hidden="true"
                                                                class="e-font-icon-svg e-fas-play-circle"
                                                                viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm115.7 272l-176 101c-15.8 8.8-35.7-2.5-35.7-21V152c0-18.4 19.8-29.8 35.7-21l176 107c16.4 9.2 16.4 32.9 0 42z">
                                                                </path>
                                                            </svg>
                                                        </span>
                                                        <span class="elementor-icon-list-text">Lab Setup, Command-line,
                                                            Bash/Python Basics</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-2d40697 e-con-full e-flex e-con e-child"
                                    data-id="2d40697" data-element_type="container">
                                    <div class="elementor-element elementor-element-5b3beea2 e-con-full e-flex e-con e-child"
                                        data-id="5b3beea2" data-element_type="container">
                                        <div class="elementor-element elementor-element-653d36d1 elementor-widget elementor-widget-heading"
                                            data-id="653d36d1" data-element_type="widget"
                                            data-widget_type="heading.default">
                                            <div class="elementor-widget-container">
                                                <h2 class="elementor-heading-title elementor-size-default">
                                                    Module 02: Application Security & Pentesting
                                                </h2>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-242adaec elementor-widget elementor-widget-text-editor"
                                            data-id="242adaec" data-element_type="widget"
                                            data-widget_type="text-editor.default">
                                            <div class="elementor-widget-container">
                                                <p>
                                                    Here you dive deep into how software is broken and how to stop it. After
                                                    grounding yourself in the OWASP Top 10 (2021 & 2023) and Secure-SDLC
                                                    principles, you will model threats against real codebases and then
                                                    exploit them across web, mobile, desktop-client and API surfaces. Labs
                                                    progress from classic SQLi/XSS to modern attacks on GraphQL, JWT and
                                                    single-page apps, before switching gears to blockchain/Web3
                                                    smart-contract auditing and CI/CD pipeline abuse. Throughout, DevSecOps
                                                    workflows and bug-bounty style reporting teach you to translate findings
                                                    into business-ready remediation.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-6affa37d elementor-list-item-link-inline elementor-icon-list--layout-traditional elementor-widget elementor-widget-icon-list"
                                            data-id="6affa37d" data-element_type="widget"
                                            data-widget_type="icon-list.default">
                                            <div class="elementor-widget-container">
                                                <ul class="elementor-icon-list-items">
                                                    <li class="elementor-icon-list-item">
                                                        <span class="elementor-icon-list-icon">
                                                            <svg aria-hidden="true"
                                                                class="e-font-icon-svg e-fas-play-circle"
                                                                viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm115.7 272l-176 101c-15.8 8.8-35.7-2.5-35.7-21V152c0-18.4 19.8-29.8 35.7-21l176 107c16.4 9.2 16.4 32.9 0 42z">
                                                                </path>
                                                            </svg>
                                                        </span>
                                                        <span class="elementor-icon-list-text">OWASP Top 10 (2021/2023),
                                                            Secure SDLC, Threat Modeling</span>
                                                    </li>
                                                    <li class="elementor-icon-list-item">
                                                        <span class="elementor-icon-list-icon">
                                                            <svg aria-hidden="true"
                                                                class="e-font-icon-svg e-fas-play-circle"
                                                                viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm115.7 272l-176 101c-15.8 8.8-35.7-2.5-35.7-21V152c0-18.4 19.8-29.8 35.7-21l176 107c16.4 9.2 16.4 32.9 0 42z">
                                                                </path>
                                                            </svg>
                                                        </span>
                                                        <span class="elementor-icon-list-text">Web, Mobile, API, Client
                                                            Attacks & Exploits</span>
                                                    </li>
                                                    <li class="elementor-icon-list-item">
                                                        <span class="elementor-icon-list-icon">
                                                            <svg aria-hidden="true"
                                                                class="e-font-icon-svg e-fas-play-circle"
                                                                viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm115.7 272l-176 101c-15.8 8.8-35.7-2.5-35.7-21V152c0-18.4 19.8-29.8 35.7-21l176 107c16.4 9.2 16.4 32.9 0 42z">
                                                                </path>
                                                            </svg>
                                                        </span>
                                                        <span class="elementor-icon-list-text">Blockchain/Web3 Smart
                                                            Contract Auditing</span>
                                                    </li>
                                                    <li class="elementor-icon-list-item">
                                                        <span class="elementor-icon-list-icon">
                                                            <svg aria-hidden="true"
                                                                class="e-font-icon-svg e-fas-play-circle"
                                                                viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm115.7 272l-176 101c-15.8 8.8-35.7-2.5-35.7-21V152c0-18.4 19.8-29.8 35.7-21l176 107c16.4 9.2 16.4 32.9 0 42z">
                                                                </path>
                                                            </svg>
                                                        </span>
                                                        <span class="elementor-icon-list-text">CI/CD Security, DevSecOps,
                                                            Bug Bounty Reporting</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-544ccfc e-con-full e-flex e-con e-child"
                                    data-id="544ccfc" data-element_type="container">
                                    <div class="elementor-element elementor-element-c64ea43 e-con-full e-flex e-con e-child"
                                        data-id="c64ea43" data-element_type="container">
                                        <div class="elementor-element elementor-element-633c9de elementor-widget elementor-widget-heading"
                                            data-id="633c9de" data-element_type="widget" data-widget_type="heading.default">
                                            <div class="elementor-widget-container">
                                                <h2 class="elementor-heading-title elementor-size-default">
                                                    Module 03: Red Teaming – Offensive Security Operations
                                                </h2>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-e1c6868 elementor-widget elementor-widget-text-editor"
                                            data-id="e1c6868" data-element_type="widget"
                                            data-widget_type="text-editor.default">
                                            <div class="elementor-widget-container">
                                                <p>
                                                    This module turns you from pentester to full-spectrum adversary. You
                                                    will build covert C2 infrastructure with Cobalt Strike, Brute Ratel and
                                                    Mythic; harvest credentials through reconnaissance, Kerberoasting and
                                                    DCSync; and chain exploits into multi-stage domain compromise including
                                                    cross-forest pivots. Email-server attacks on Exchange / M365 illustrate
                                                    real business impact, while continuous OPSEC and evasion drills keep you
                                                    hidden from blue teams. The climax is a capstone red-team operation that
                                                    demands rigorous planning, execution and reporting as you would deliver
                                                    to the board or regulator.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-583593b elementor-list-item-link-inline elementor-icon-list--layout-traditional elementor-widget elementor-widget-icon-list"
                                            data-id="583593b" data-element_type="widget"
                                            data-widget_type="icon-list.default">
                                            <div class="elementor-widget-container">
                                                <ul class="elementor-icon-list-items">
                                                    <li class="elementor-icon-list-item">
                                                        <span class="elementor-icon-list-icon">
                                                            <svg aria-hidden="true"
                                                                class="e-font-icon-svg e-fas-play-circle"
                                                                viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm115.7 272l-176 101c-15.8 8.8-35.7-2.5-35.7-21V152c0-18.4 19.8-29.8 35.7-21l176 107c16.4 9.2 16.4 32.9 0 42z">
                                                                </path>
                                                            </svg>
                                                        </span>
                                                        <span class="elementor-icon-list-text">Red Team Lifecycle (Recon to
                                                            Reporting)</span>
                                                    </li>
                                                    <li class="elementor-icon-list-item">
                                                        <span class="elementor-icon-list-icon">
                                                            <svg aria-hidden="true"
                                                                class="e-font-icon-svg e-fas-play-circle"
                                                                viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm115.7 272l-176 101c-15.8 8.8-35.7-2.5-35.7-21V152c0-18.4 19.8-29.8 35.7-21l176 107c16.4 9.2 16.4 32.9 0 42z">
                                                                </path>
                                                            </svg>
                                                        </span>
                                                        <span class="elementor-icon-list-text">C2 Infrastructure (CS, Brute
                                                            Ratel, Mythic)</span>
                                                    </li>
                                                    <li class="elementor-icon-list-item">
                                                        <span class="elementor-icon-list-icon">
                                                            <svg aria-hidden="true"
                                                                class="e-font-icon-svg e-fas-play-circle"
                                                                viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm115.7 272l-176 101c-15.8 8.8-35.7-2.5-35.7-21V152c0-18.4 19.8-29.8 35.7-21l176 107c16.4 9.2 16.4 32.9 0 42z">
                                                                </path>
                                                            </svg>
                                                        </span>
                                                        <span class="elementor-icon-list-text">AD Enumeration &
                                                            Exploitation, Kerberoasting, DCSync</span>
                                                    </li>
                                                    <li class="elementor-icon-list-item">
                                                        <span class="elementor-icon-list-icon">
                                                            <svg aria-hidden="true"
                                                                class="e-font-icon-svg e-fas-play-circle"
                                                                viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm115.7 272l-176 101c-15.8 8.8-35.7-2.5-35.7-21V152c0-18.4 19.8-29.8 35.7-21l176 107c16.4 9.2 16.4 32.9 0 42z">
                                                                </path>
                                                            </svg>
                                                        </span>
                                                        <span class="elementor-icon-list-text">Email Server Pentesting
                                                            (Exchange/O365)</span>
                                                    </li>
                                                    <li class="elementor-icon-list-item">
                                                        <span class="elementor-icon-list-icon">
                                                            <svg aria-hidden="true"
                                                                class="e-font-icon-svg e-fas-play-circle"
                                                                viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm115.7 272l-176 101c-15.8 8.8-35.7-2.5-35.7-21V152c0-18.4 19.8-29.8 35.7-21l176 107c16.4 9.2 16.4 32.9 0 42z">
                                                                </path>
                                                            </svg>
                                                        </span>
                                                        <span class="elementor-icon-list-text">Evasion, OPSEC, Cross-Forest
                                                            Attacks</span>
                                                    </li>
                                                    <li class="elementor-icon-list-item">
                                                        <span class="elementor-icon-list-icon">
                                                            <svg aria-hidden="true"
                                                                class="e-font-icon-svg e-fas-play-circle"
                                                                viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm115.7 272l-176 101c-15.8 8.8-35.7-2.5-35.7-21V152c0-18.4 19.8-29.8 35.7-21l176 107c16.4 9.2 16.4 32.9 0 42z">
                                                                </path>
                                                            </svg>
                                                        </span>
                                                        <span class="elementor-icon-list-text">Capstone: Full Red Team
                                                            Simulation</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-bbc684d e-con-full e-flex e-con e-child"
                                    data-id="bbc684d" data-element_type="container">
                                    <div class="elementor-element elementor-element-28363d6 e-con-full e-flex e-con e-child"
                                        data-id="28363d6" data-element_type="container">
                                        <div class="elementor-element elementor-element-60d9ffe elementor-widget elementor-widget-heading"
                                            data-id="60d9ffe" data-element_type="widget" data-widget_type="heading.default">
                                            <div class="elementor-widget-container">
                                                <h2 class="elementor-heading-title elementor-size-default">
                                                    Module 04: Blue Teaming – Cyber Defense & SOC Operations
                                                </h2>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-acc009c elementor-widget elementor-widget-text-editor"
                                            data-id="acc009c" data-element_type="widget"
                                            data-widget_type="text-editor.default">
                                            <div class="elementor-widget-container">
                                                <p>
                                                    Flip the chessboard and learn to hunt the adversary. You will architect
                                                    a cost-efficient SOC stack, craft incident-response playbooks, and drive
                                                    investigations with Splunk/ELK, Zeek, Suricata and leading EDR/XDR
                                                    platforms. Hands-on labs cover email triage, web-log anomaly hunting,
                                                    dynamic malware reversing and live ransomware containment. The capstone
                                                    IR drill drops you into a time-boxed breach scenario where coordination,
                                                    evidence preservation and executive comms matter as much as technical
                                                    chops. Graduates emerge able to defend or lead 24×7 security operations.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-2d08f3c elementor-list-item-link-inline elementor-icon-list--layout-traditional elementor-widget elementor-widget-icon-list"
                                            data-id="2d08f3c" data-element_type="widget"
                                            data-widget_type="icon-list.default">
                                            <div class="elementor-widget-container">
                                                <ul class="elementor-icon-list-items">
                                                    <li class="elementor-icon-list-item">
                                                        <span class="elementor-icon-list-icon">
                                                            <svg aria-hidden="true"
                                                                class="e-font-icon-svg e-fas-play-circle"
                                                                viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm115.7 272l-176 101c-15.8 8.8-35.7-2.5-35.7-21V152c0-18.4 19.8-29.8 35.7-21l176 107c16.4 9.2 16.4 32.9 0 42z">
                                                                </path>
                                                            </svg>
                                                        </span>
                                                        <span class="elementor-icon-list-text">SOC Setup, IR Lifecycle,
                                                            Playbooks, Threat Hunting</span>
                                                    </li>
                                                    <li class="elementor-icon-list-item">
                                                        <span class="elementor-icon-list-icon">
                                                            <svg aria-hidden="true"
                                                                class="e-font-icon-svg e-fas-play-circle"
                                                                viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm115.7 272l-176 101c-15.8 8.8-35.7-2.5-35.7-21V152c0-18.4 19.8-29.8 35.7-21l176 107c16.4 9.2 16.4 32.9 0 42z">
                                                                </path>
                                                            </svg>
                                                        </span>
                                                        <span class="elementor-icon-list-text">Email Triage, Web Log
                                                            Analysis, Zeek/Suricata Labs</span>
                                                    </li>
                                                    <li class="elementor-icon-list-item">
                                                        <span class="elementor-icon-list-icon">
                                                            <svg aria-hidden="true"
                                                                class="e-font-icon-svg e-fas-play-circle"
                                                                viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm115.7 272l-176 101c-15.8 8.8-35.7-2.5-35.7-21V152c0-18.4 19.8-29.8 35.7-21l176 107c16.4 9.2 16.4 32.9 0 42z">
                                                                </path>
                                                            </svg>
                                                        </span>
                                                        <span class="elementor-icon-list-text">EDR/XDR, SIEM (Splunk/ELK),
                                                            Malware Reversing</span>
                                                    </li>
                                                    <li class="elementor-icon-list-item">
                                                        <span class="elementor-icon-list-icon">
                                                            <svg aria-hidden="true"
                                                                class="e-font-icon-svg e-fas-play-circle"
                                                                viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm115.7 272l-176 101c-15.8 8.8-35.7-2.5-35.7-21V152c0-18.4 19.8-29.8 35.7-21l176 107c16.4 9.2 16.4 32.9 0 42z">
                                                                </path>
                                                            </svg>
                                                        </span>
                                                        <span class="elementor-icon-list-text">Ransomware Response &
                                                            Capstone IR Drill</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-c96f365 e-con-full e-flex e-con e-child"
                                    data-id="c96f365" data-element_type="container">
                                    <div class="elementor-element elementor-element-0d29868 e-con-full e-flex e-con e-child"
                                        data-id="0d29868" data-element_type="container">
                                        <div class="elementor-element elementor-element-fa02a07 elementor-widget elementor-widget-heading"
                                            data-id="fa02a07" data-element_type="widget" data-widget_type="heading.default">
                                            <div class="elementor-widget-container">
                                                <h2 class="elementor-heading-title elementor-size-default">
                                                    Module 05: Cloud Security, Containerization & Hybrid Red Team Ops
                                                </h2>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-5bf1675 elementor-widget elementor-widget-text-editor"
                                            data-id="5bf1675" data-element_type="widget"
                                            data-widget_type="text-editor.default">
                                            <div class="elementor-widget-container">
                                                <p>
                                                    Modern attacks rarely respect perimeter walls. You will enumerate and
                                                    abuse IAM in AWS, Azure and GCP, stitch together on-prem AD with cloud
                                                    identities via AAD Connect and AWS Directory Service, and weaponise
                                                    metadata, token theft and consent-phishing chains. Parallel tracks
                                                    explore Docker, Kubernetes, serverless and hypervisor threats then fold
                                                    them into a hybrid attack-and-defend simulation spanning corporate and
                                                    cloud estates. The result: an engineer who can break or secure workloads
                                                    wherever they run.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-36ea412 elementor-list-item-link-inline elementor-icon-list--layout-traditional elementor-widget elementor-widget-icon-list"
                                            data-id="36ea412" data-element_type="widget"
                                            data-widget_type="icon-list.default">
                                            <div class="elementor-widget-container">
                                                <ul class="elementor-icon-list-items">
                                                    <li class="elementor-icon-list-item">
                                                        <span class="elementor-icon-list-icon">
                                                            <svg aria-hidden="true"
                                                                class="e-font-icon-svg e-fas-play-circle"
                                                                viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm115.7 272l-176 101c-15.8 8.8-35.7-2.5-35.7-21V152c0-18.4 19.8-29.8 35.7-21l176 107c16.4 9.2 16.4 32.9 0 42z">
                                                                </path>
                                                            </svg>
                                                        </span>
                                                        <span class="elementor-icon-list-text">AWS, Azure, GCP Enumeration &
                                                            IAM Abuse</span>
                                                    </li>
                                                    <li class="elementor-icon-list-item">
                                                        <span class="elementor-icon-list-icon">
                                                            <svg aria-hidden="true"
                                                                class="e-font-icon-svg e-fas-play-circle"
                                                                viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm115.7 272l-176 101c-15.8 8.8-35.7-2.5-35.7-21V152c0-18.4 19.8-29.8 35.7-21l176 107c16.4 9.2 16.4 32.9 0 42z">
                                                                </path>
                                                            </svg>
                                                        </span>
                                                        <span class="elementor-icon-list-text">On-Prem AD + Cloud Identity
                                                            Integration (AAD Connect, AWS DS)</span>
                                                    </li>
                                                    <li class="elementor-icon-list-item">
                                                        <span class="elementor-icon-list-icon">
                                                            <svg aria-hidden="true"
                                                                class="e-font-icon-svg e-fas-play-circle"
                                                                viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm115.7 272l-176 101c-15.8 8.8-35.7-2.5-35.7-21V152c0-18.4 19.8-29.8 35.7-21l176 107c16.4 9.2 16.4 32.9 0 42z">
                                                                </path>
                                                            </svg>
                                                        </span>
                                                        <span class="elementor-icon-list-text">Cloud Attack Chains: Metadata
                                                            Abuse, Token Theft, Consent Phishing</span>
                                                    </li>
                                                    <li class="elementor-icon-list-item">
                                                        <span class="elementor-icon-list-icon">
                                                            <svg aria-hidden="true"
                                                                class="e-font-icon-svg e-fas-play-circle"
                                                                viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm115.7 272l-176 101c-15.8 8.8-35.7-2.5-35.7-21V152c0-18.4 19.8-29.8 35.7-21l176 107c16.4 9.2 16.4 32.9 0 42z">
                                                                </path>
                                                            </svg>
                                                        </span>
                                                        <span class="elementor-icon-list-text">Full Scope: Hybrid Cloud
                                                            Attacks + Defense Simulation</span>
                                                    </li>
                                                    <li class="elementor-icon-list-item">
                                                        <span class="elementor-icon-list-icon">
                                                            <svg aria-hidden="true"
                                                                class="e-font-icon-svg e-fas-play-circle"
                                                                viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm115.7 272l-176 101c-15.8 8.8-35.7-2.5-35.7-21V152c0-18.4 19.8-29.8 35.7-21l176 107c16.4 9.2 16.4 32.9 0 42z">
                                                                </path>
                                                            </svg>
                                                        </span>
                                                        <span class="elementor-icon-list-text">Container Security: Docker,
                                                            K8s, Serverless, Hypervisor Threats</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <h1 class="elementor-heading-title elementor-size-default"
                                    style="font-size: 40px; margin-bottom: 20px;">
                                    Phase 2: Industry Projects / Internship (6 Months)
                                </h1>
                                <div class="elementor-element elementor-element-016f3c2 e-con-full e-flex e-con e-child"
                                    data-id="016f3c2" data-element_type="container">
                                    <div class="elementor-element elementor-element-34d96ae e-con-full e-flex e-con e-child"
                                        data-id="34d96ae" data-element_type="container">
                                        <div class="elementor-element elementor-element-fd12d79 elementor-widget elementor-widget-heading"
                                            data-id="fd12d79" data-element_type="widget" data-widget_type="heading.default">
                                            <div class="elementor-widget-container">
                                                <h2 class="elementor-heading-title elementor-size-default">
                                                    Learners will apply skills in real-world scenarios across:
                                                </h2>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-8963628 elementor-widget elementor-widget-text-editor"
                                            data-id="8963628" data-element_type="widget"
                                            data-widget_type="text-editor.default">
                                            <div class="elementor-widget-container">
                                                <p>
                                                    Apply every technique in live client or cyber-range settings. Projects
                                                    rotate across red-team simulations for fintech and enterprise,
                                                    day-to-day SOC operations, Web3/mobile pentests, and cloud-security
                                                    audits. You will ship full evidence packs—logs, PoCs, and board-level
                                                    reports—that mirror professional deliverables and showcase job-ready
                                                    competence.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-d932815 elementor-list-item-link-inline elementor-icon-list--layout-traditional elementor-widget elementor-widget-icon-list"
                                            data-id="d932815" data-element_type="widget"
                                            data-widget_type="icon-list.default">
                                            <div class="elementor-widget-container">
                                                <ul class="elementor-icon-list-items">
                                                    <li class="elementor-icon-list-item">
                                                        <span class="elementor-icon-list-icon">
                                                            <svg aria-hidden="true"
                                                                class="e-font-icon-svg e-fas-play-circle"
                                                                viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm115.7 272l-176 101c-15.8 8.8-35.7-2.5-35.7-21V152c0-18.4 19.8-29.8 35.7-21l176 107c16.4 9.2 16.4 32.9 0 42z">
                                                                </path>
                                                            </svg>
                                                        </span>
                                                        <span class="elementor-icon-list-text">Red Team Simulations for
                                                            Fintech/Enterprise</span>
                                                    </li>
                                                    <li class="elementor-icon-list-item">
                                                        <span class="elementor-icon-list-icon">
                                                            <svg aria-hidden="true"
                                                                class="e-font-icon-svg e-fas-play-circle"
                                                                viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm115.7 272l-176 101c-15.8 8.8-35.7-2.5-35.7-21V152c0-18.4 19.8-29.8 35.7-21l176 107c16.4 9.2 16.4 32.9 0 42z">
                                                                </path>
                                                            </svg>
                                                        </span>
                                                        <span class="elementor-icon-list-text">SOC Operations, Threat
                                                            Hunting, and DFIR</span>
                                                    </li>
                                                    <li class="elementor-icon-list-item">
                                                        <span class="elementor-icon-list-icon">
                                                            <svg aria-hidden="true"
                                                                class="e-font-icon-svg e-fas-play-circle"
                                                                viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm115.7 272l-176 101c-15.8 8.8-35.7-2.5-35.7-21V152c0-18.4 19.8-29.8 35.7-21l176 107c16.4 9.2 16.4 32.9 0 42z">
                                                                </path>
                                                            </svg>
                                                        </span>
                                                        <span class="elementor-icon-list-text">Web3 and Mobile Pentests with
                                                            Bug Bounty Simulation</span>
                                                    </li>
                                                    <li class="elementor-icon-list-item">
                                                        <span class="elementor-icon-list-icon">
                                                            <svg aria-hidden="true"
                                                                class="e-font-icon-svg e-fas-play-circle"
                                                                viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm115.7 272l-176 101c-15.8 8.8-35.7-2.5-35.7-21V152c0-18.4 19.8-29.8 35.7-21l176 107c16.4 9.2 16.4 32.9 0 42z">
                                                                </path>
                                                            </svg>
                                                        </span>
                                                        <span class="elementor-icon-list-text">Cloud Security Audits & CI/CD
                                                            Risk Mitigation</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-016f3c2 e-con-full e-flex e-con e-child"
                                    data-id="016f3c2" data-element_type="container">
                                    <div class="elementor-element elementor-element-34d96ae e-con-full e-flex e-con e-child"
                                        data-id="34d96ae" data-element_type="container">
                                        <div class="elementor-element elementor-element-fd12d79 elementor-widget elementor-widget-heading"
                                            data-id="fd12d79" data-element_type="widget" data-widget_type="heading.default">
                                            <div class="elementor-widget-container">
                                                <h2 class="elementor-heading-title elementor-size-default">
                                                    Capstone Lab (Optional Cyber Range)
                                                </h2>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-8963628 elementor-widget elementor-widget-text-editor"
                                            data-id="8963628" data-element_type="widget"
                                            data-widget_type="text-editor.default">
                                            <div class="elementor-widget-container">
                                                <p>
                                                    A final “Red vs Blue” war-game where teams execute attacks, defend in
                                                    real time, collect forensic artefacts and brief executives on impact and
                                                    remediation. Perfect for polishing soft skills and proving technical
                                                    depth before graduation.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-d932815 elementor-list-item-link-inline elementor-icon-list--layout-traditional elementor-widget elementor-widget-icon-list"
                                            data-id="d932815" data-element_type="widget"
                                            data-widget_type="icon-list.default">
                                            <div class="elementor-widget-container">
                                                <ul class="elementor-icon-list-items">
                                                    <li class="elementor-icon-list-item">
                                                        <span class="elementor-icon-list-icon">
                                                            <svg aria-hidden="true"
                                                                class="e-font-icon-svg e-fas-play-circle"
                                                                viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm115.7 272l-176 101c-15.8 8.8-35.7-2.5-35.7-21V152c0-18.4 19.8-29.8 35.7-21l176 107c16.4 9.2 16.4 32.9 0 42z">
                                                                </path>
                                                            </svg>
                                                        </span>
                                                        <span class="elementor-icon-list-text">Red vs Blue Simulation</span>
                                                    </li>
                                                    <li class="elementor-icon-list-item">
                                                        <span class="elementor-icon-list-icon">
                                                            <svg aria-hidden="true"
                                                                class="e-font-icon-svg e-fas-play-circle"
                                                                viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm115.7 272l-176 101c-15.8 8.8-35.7-2.5-35.7-21V152c0-18.4 19.8-29.8 35.7-21l176 107c16.4 9.2 16.4 32.9 0 42z">
                                                                </path>
                                                            </svg>
                                                        </span>
                                                        <span class="elementor-icon-list-text">Live Incident Handling +
                                                            Evidence Collection</span>
                                                    </li>
                                                    <li class="elementor-icon-list-item">
                                                        <span class="elementor-icon-list-icon">
                                                            <svg aria-hidden="true"
                                                                class="e-font-icon-svg e-fas-play-circle"
                                                                viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm115.7 272l-176 101c-15.8 8.8-35.7-2.5-35.7-21V152c0-18.4 19.8-29.8 35.7-21l176 107c16.4 9.2 16.4 32.9 0 42z">
                                                                </path>
                                                            </svg>
                                                        </span>
                                                        <span class="elementor-icon-list-text">Hybrid Cloud-Enterprise
                                                            Exploitation</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-53473c0c e-con-full e-flex e-con e-child"
                        data-id="53473c0c" data-element_type="container"
                        data-settings='{"background_background":"gradient"}'>
                        <div class="elementor-element elementor-element-c93a933 e-con-full e-flex e-con e-child"
                            data-id="c93a933" data-element_type="container">
                            <div class="elementor-element elementor-element-2965aff8 elementor-widget elementor-widget-image"
                                data-id="2965aff8" data-element_type="widget" data-widget_type="image.default">
                                <div class="elementor-widget-container">
                                    <img loading="lazy" decoding="async" width="800" height="385"
                                        src="{{ asset('assets/images/dummy_logo.png') }}"
                                        class="attachment-large size-large wp-image-2925"
                                        sizes="(max-width: 800px) 100vw, 800px" />
                                </div>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-60c178d2 e-con-full e-flex e-con e-child"
                            data-id="60c178d2" data-element_type="container">
                            <div class="elementor-element elementor-element-64cf52e4 elementor-widget elementor-widget-heading"
                                data-id="64cf52e4" data-element_type="widget" data-widget_type="heading.default">
                                <div class="elementor-widget-container">
                                    <h2 class="elementor-heading-title elementor-size-default">
                                        Ever wanted to work with CN? The time is now!
                                    </h2>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-7fa99977 elementor-widget elementor-widget-heading"
                                data-id="7fa99977" data-element_type="widget" data-widget_type="heading.default">
                                <div class="elementor-widget-container">
                                    <h3 class="elementor-heading-title elementor-size-default">
                                        20% off for CN students.
                                    </h3>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-6354c6c3 elementor-widget elementor-widget-text-editor"
                                data-id="6354c6c3" data-element_type="widget" data-widget_type="text-editor.default">
                                <div class="elementor-widget-container">
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                    has been the industry's standard dummy text ever since the 1500s, when an unknown
                                    printer took a galley of type and scrambled it to make a type specimen book. It has
                                    survived not only five centuries, but also the leap into electronic typesetting,
                                    remaining essentially unchanged. It was popularised in the 1960s with the release of
                                    Letraset sheets containing Lorem Ipsum passages, and more recently with desktop
                                    publishing software like Aldus PageMaker including versions of Lorem Ipsum.


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="elementor-element elementor-element-59597e96 e-flex e-con-boxed e-con e-parent" data-id="59597e96"
                data-element_type="container" data-settings='{"background_background":"classic"}'>
                <div class="e-con-inner">
                    <div class="elementor-element elementor-element-841603b e-con-full e-flex e-con e-child"
                        data-id="841603b" data-element_type="container" data-settings='{"background_background":"classic"}'>
                        <div class="elementor-element elementor-element-4d84376 e-con-full e-flex e-con e-child"
                            data-id="4d84376" data-element_type="container">
                            <div class="elementor-element elementor-element-eb7af04 elementor-widget elementor-widget-image"
                                data-id="eb7af04" data-element_type="widget" data-widget_type="image.default">
                                <div class="elementor-widget-container">
                                    <img decoding="async" width="600" height="600"
                                        src="{{ asset('assets/images/PGCAC-Badge.png') }}"
                                        class="attachment-large size-large wp-image-5351"
                                        sizes="(max-width: 600px) 100vw, 600px" />
                                </div>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-06a8f74 e-con-full e-flex e-con e-child"
                            data-id="06a8f74" data-element_type="container">
                            <div class="elementor-element elementor-element-7d60c23 elementor-widget__width-initial elementor-widget elementor-widget-heading"
                                data-id="7d60c23" data-element_type="widget" data-widget_type="heading.default">
                                <div class="elementor-widget-container">
                                    <h1 class="elementor-heading-title elementor-size-default">
                                        Post Graduate Certificate - Advanced CyberSecurity
                                    </h1>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-88fd3f2 elementor-widget__width-initial elementor-widget elementor-widget-text-editor"
                                data-id="88fd3f2" data-element_type="widget" data-widget_type="text-editor.default">
                                <div class="elementor-widget-container">
                                    PGCAC is a year-long work-and-learn pathway integrating paid weekday roles with weekend
                                    mastery classes. Participants join Codec Networks full-time, contributing Monday to
                                    Friday and attending expert-led sessions every Saturday and Sunday. The model suits
                                    early-career engineers, final-year tech students, and practising analysts seeking rapid
                                    advancement without career disruption.
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-63a8506 e-con-full e-flex e-con e-child"
                                data-id="63a8506" data-element_type="container"
                                data-settings='{"background_background":"gradient"}'>
                                <div class="elementor-element elementor-element-b9043da e-con-full e-flex e-con e-child"
                                    data-id="b9043da" data-element_type="container">
                                    <div class="elementor-element elementor-element-ad72529 elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list"
                                        data-id="ad72529" data-element_type="widget" data-widget_type="icon-list.default">
                                        <div class="elementor-widget-container">
                                            <ul class="elementor-icon-list-items">
                                                <li class="elementor-icon-list-item">
                                                    <span class="elementor-icon-list-icon">
                                                        <svg aria-hidden="true" class="e-font-icon-svg e-fas-check-circle"
                                                            viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z">
                                                            </path>
                                                        </svg>
                                                    </span>
                                                    <span class="elementor-icon-list-text">Cybersecurity Training Delivered
                                                        by
                                                        an Established CyberSecurity Firm</span>
                                                </li>
                                                <li class="elementor-icon-list-item">
                                                    <span class="elementor-icon-list-icon">
                                                        <svg aria-hidden="true" class="e-font-icon-svg e-fas-check-circle"
                                                            viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z">
                                                            </path>
                                                        </svg>
                                                    </span>
                                                    <span class="elementor-icon-list-text">1-Year Work Experience
                                                        Certificate</span>
                                                </li>
                                                <li class="elementor-icon-list-item">
                                                    <span class="elementor-icon-list-icon">
                                                        <svg aria-hidden="true" class="e-font-icon-svg e-fas-check-circle"
                                                            viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z">
                                                            </path>
                                                        </svg>
                                                    </span>
                                                    <span class="elementor-icon-list-text">Lifetime Access to Course
                                                        Material
                                                        Including Videos
                                                    </span>
                                                </li>
                                                <li class="elementor-icon-list-item">
                                                    <span class="elementor-icon-list-icon">
                                                        <svg aria-hidden="true" class="e-font-icon-svg e-fas-check-circle"
                                                            viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z">
                                                            </path>
                                                        </svg>
                                                    </span>
                                                    <span class="elementor-icon-list-text">6-Months Internship on Real
                                                        Client
                                                        Projects</span>
                                                </li>
                                                <li class="elementor-icon-list-item">
                                                    <span class="elementor-icon-list-icon">
                                                        <svg aria-hidden="true" class="e-font-icon-svg e-fas-check-circle"
                                                            viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z">
                                                            </path>
                                                        </svg>
                                                    </span>
                                                    <span class="elementor-icon-list-text">Capstone Red vs. Blue War Room
                                                        Simulations</span>
                                                </li>
                                                <li class="elementor-icon-list-item">
                                                    <span class="elementor-icon-list-icon">
                                                        <svg aria-hidden="true" class="e-font-icon-svg e-fas-check-circle"
                                                            viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z">
                                                            </path>
                                                        </svg>
                                                    </span>
                                                    <span class="elementor-icon-list-text">Certifications Aligned (OSCP,
                                                        AWS,
                                                        CEH, ISO, CRTP, etc.)</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-5ddeae9 e-con-full e-flex e-con e-child"
                                    data-id="5ddeae9" data-element_type="container">
                                    <div class="elementor-element elementor-element-e4a52e2 elementor-button-success elementor-mobile-align-left elementor-widget-mobile__width-inherit elementor-widget__width-initial elementor-widget elementor-widget-button"
                                        data-id="e4a52e2" data-element_type="widget" data-widget_type="button.default">
                                        <div class="elementor-widget-container">
                                            <div class="elementor-button-wrapper">
                                                <a class="elementor-button elementor-button-link elementor-size-sm"
                                                    href="#">
                                                    <span class="elementor-button-content-wrapper">
                                                        <span class="elementor-button-icon">
                                                            <svg aria-hidden="true"
                                                                class="e-font-icon-svg e-fas-arrow-right"
                                                                viewBox="0 0 448 512" xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M190.5 66.9l22.2-22.2c9.4-9.4 24.6-9.4 33.9 0L441 239c9.4 9.4 9.4 24.6 0 33.9L246.6 467.3c-9.4 9.4-24.6 9.4-33.9 0l-22.2-22.2c-9.5-9.5-9.3-25 .4-34.3L311.4 296H24c-13.3 0-24-10.7-24-24v-32c0-13.3 10.7-24 24-24h287.4L190.9 101.2c-9.8-9.3-10-24.8-.4-34.3z">
                                                                </path>
                                                            </svg>
                                                        </span>
                                                        <span class="elementor-button-text">Start Now</span>
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-d5ce829 elementor-absolute elementor-widget elementor-widget-image"
                            data-id="d5ce829" data-element_type="widget" data-settings='{"_position":"absolute"}'
                            data-widget_type="image.default">
                            <div class="elementor-widget-container">
                                <img decoding="async" width="800" height="800"
                                    src="{{ asset('assets/images/blue-depth.svg') }}"
                                    class="attachment-large size-large wp-image-920"
                                    sizes="(max-width: 800px) 100vw, 800px" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="elementor-element elementor-element-bc92614 e-flex e-con-boxed e-con e-parent" data-id="bc92614"
                data-element_type="container" data-settings='{"background_background":"classic"}'>
                <div class="e-con-inner">
                    <div class="elementor-element elementor-element-bcf6a0a e-con-full e-flex e-con e-child"
                        data-id="bcf6a0a" data-element_type="container">
                        <div class="elementor-element elementor-element-807aaf0 e-con-full e-flex e-con e-child"
                            data-id="807aaf0" data-element_type="container"
                            data-settings='{"background_background":"classic"}'
                            style="background-image: url({{ asset('assets/images/background-cyber.jpg')}})">
                            <div class="elementor-element elementor-element-817c757 e-con-full e-flex e-con e-child"
                                data-id="817c757" data-element_type="container">
                                <div class="elementor-element elementor-element-0113280 elementor-widget elementor-widget-heading"
                                    data-id="0113280" data-element_type="widget" data-widget_type="heading.default">
                                    <div class="elementor-widget-container">
                                        <h2 class="elementor-heading-title elementor-size-default">
                                            Are you a freelancer or an individual student?
                                        </h2>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-11577d2 elementor-widget elementor-widget-text-editor"
                                    data-id="11577d2" data-element_type="widget" data-widget_type="text-editor.default">
                                    <div class="elementor-widget-container">
                                        <p>
                                            We understand that sometimes our courses are too much for
                                            individual students. <br />Contact us to receive more
                                            affordable personal pricing.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-9f26611 e-con-full e-flex e-con e-child"
                                data-id="9f26611" data-element_type="container">
                                <div class="elementor-element elementor-element-4e29838 elementor-align-center elementor-tablet-align-left elementor-widget elementor-widget-button"
                                    data-id="4e29838" data-element_type="widget" data-widget_type="button.default">
                                    <div class="elementor-widget-container">
                                        <div class="elementor-button-wrapper">
                                            <a class="elementor-button elementor-button-link elementor-size-sm" href="#">
                                                <span class="elementor-button-content-wrapper">
                                                    <span class="elementor-button-icon">
                                                        <svg aria-hidden="true" class="e-font-icon-svg e-fas-arrow-right"
                                                            viewBox="0 0 448 512" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M190.5 66.9l22.2-22.2c9.4-9.4 24.6-9.4 33.9 0L441 239c9.4 9.4 9.4 24.6 0 33.9L246.6 467.3c-9.4 9.4-24.6 9.4-33.9 0l-22.2-22.2c-9.5-9.5-9.3-25 .4-34.3L311.4 296H24c-13.3 0-24-10.7-24-24v-32c0-13.3 10.7-24 24-24h287.4L190.9 101.2c-9.8-9.3-10-24.8-.4-34.3z">
                                                            </path>
                                                        </svg>
                                                    </span>
                                                    <span class="elementor-button-text">Apply for a discount</span>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="elementor-element elementor-element-e2c362f e-flex e-con-boxed e-con e-parent" data-id="e2c362f"
                data-element_type="container" data-settings='{"background_background":"classic"}'>
                <div class="e-con-inner">
                    <div class="elementor-element elementor-element-86b2933 e-con-full e-flex e-con e-child"
                        data-id="86b2933" data-element_type="container"
                        data-settings='{"background_background":"gradient"}'>
                        <div class="elementor-element elementor-element-406d8e4 e-con-full e-flex e-con e-child"
                            data-id="406d8e4" data-element_type="container">
                            <div class="elementor-element elementor-element-8324f68 elementor-widget elementor-widget-heading"
                                data-id="8324f68" data-element_type="widget" data-widget_type="heading.default">
                                <div class="elementor-widget-container">
                                    <h2 class="elementor-heading-title elementor-size-default">
                                        <strong>Not Ready to enroll yet? </strong>
                                    </h2>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-749e536 elementor-widget elementor-widget-text-editor"
                                data-id="749e536" data-element_type="widget" data-widget_type="text-editor.default">
                                <div class="elementor-widget-container">
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                    has been the industry's standard dummy text ever since the 1500s, when an unknown
                                    printer took a galley of type and scrambled it to make a type specimen book. It has
                                    survived not only five centuries, but also the leap into electronic typesetting,
                                    remaining essentially unchanged. It was popularised in the 1960s with the release of
                                    Letraset sheets containing Lorem Ipsum passages, and more recently with desktop
                                    publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                                </div>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-03111fe e-con-full e-flex e-con e-child"
                            data-id="03111fe" data-element_type="container">
                            <div class="elementor-element elementor-element-ebb64f3 e-con-full e-flex e-con e-child"
                                data-id="ebb64f3" data-element_type="container">
                                <div class="elementor-element elementor-element-9613baf elementor-widget elementor-widget-button"
                                    data-id="9613baf" data-element_type="widget" data-widget_type="button.default">
                                    <div class="elementor-widget-container">
                                        <div class="elementor-button-wrapper">
                                            <a class="elementor-button elementor-button-link elementor-size-sm" href="#">
                                                <span class="elementor-button-content-wrapper">
                                                    <span class="elementor-button-icon">
                                                        <svg aria-hidden="true" class="e-font-icon-svg e-fas-search"
                                                            viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M505 442.7L405.3 343c-4.5-4.5-10.6-7-17-7H372c27.6-35.3 44-79.7 44-128C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c48.3 0 92.7-16.4 128-44v16.3c0 6.4 2.5 12.5 7 17l99.7 99.7c9.4 9.4 24.6 9.4 33.9 0l28.3-28.3c9.4-9.4 9.4-24.6.1-34zM208 336c-70.7 0-128-57.2-128-128 0-70.7 57.2-128 128-128 70.7 0 128 57.2 128 128 0 70.7-57.2 128-128 128z">
                                                            </path>
                                                        </svg>
                                                    </span>
                                                    <span class="elementor-button-text">BROWSE KNOWLEDGE LIBRARY</span>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-1a6ad6c elementor-align-center elementor-widget elementor-widget-button"
                                    data-id="1a6ad6c" data-element_type="widget" data-widget_type="button.default">
                                    <div class="elementor-widget-container">
                                        <div class="elementor-button-wrapper">
                                            <a class="elementor-button elementor-button-link elementor-size-sm"
                                                href="https://discord.com/invite/qugcNyWdaU" rel="nofollow noopener"
                                                target="_blank">
                                                <span class="elementor-button-content-wrapper">
                                                    <span class="elementor-button-icon">
                                                        <svg aria-hidden="true" class="e-font-icon-svg e-fab-discord"
                                                            viewBox="0 0 448 512" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M297.216 243.2c0 15.616-11.52 28.416-26.112 28.416-14.336 0-26.112-12.8-26.112-28.416s11.52-28.416 26.112-28.416c14.592 0 26.112 12.8 26.112 28.416zm-119.552-28.416c-14.592 0-26.112 12.8-26.112 28.416s11.776 28.416 26.112 28.416c14.592 0 26.112-12.8 26.112-28.416.256-15.616-11.52-28.416-26.112-28.416zM448 52.736V512c-64.494-56.994-43.868-38.128-118.784-107.776l13.568 47.36H52.48C23.552 451.584 0 428.032 0 398.848V52.736C0 23.552 23.552 0 52.48 0h343.04C424.448 0 448 23.552 448 52.736zm-72.96 242.688c0-82.432-36.864-149.248-36.864-149.248-36.864-27.648-71.936-26.88-71.936-26.88l-3.584 4.096c43.52 13.312 63.744 32.512 63.744 32.512-60.811-33.329-132.244-33.335-191.232-7.424-9.472 4.352-15.104 7.424-15.104 7.424s21.248-20.224 67.328-33.536l-2.56-3.072s-35.072-.768-71.936 26.88c0 0-36.864 66.816-36.864 149.248 0 0 21.504 37.12 78.08 38.912 0 0 9.472-11.52 17.152-21.248-32.512-9.728-44.8-30.208-44.8-30.208 3.766 2.636 9.976 6.053 10.496 6.4 43.21 24.198 104.588 32.126 159.744 8.96 8.96-3.328 18.944-8.192 29.44-15.104 0 0-12.8 20.992-46.336 30.464 7.68 9.728 16.896 20.736 16.896 20.736 56.576-1.792 78.336-38.912 78.336-38.912z">
                                                            </path>
                                                        </svg>
                                                    </span>
                                                    <span class="elementor-button-text">Join Our Discord Channel</span>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script>
            const lazyloadRunObserver = () => {
                const lazyloadBackgrounds = document.querySelectorAll(
                    `.e-con.e-parent:not(.e-lazyloaded)`
                );
                const lazyloadBackgroundObserver = new IntersectionObserver(
                    (entries) => {
                        entries.forEach((entry) => {
                            if (entry.isIntersecting) {
                                let lazyloadBackground = entry.target;
                                if (lazyloadBackground) {
                                    lazyloadBackground.classList.add("e-lazyloaded");
                                }
                                lazyloadBackgroundObserver.unobserve(entry.target);
                            }
                        });
                    },
                    { rootMargin: "200px 0px 200px 0px" }
                );
                lazyloadBackgrounds.forEach((lazyloadBackground) => {
                    lazyloadBackgroundObserver.observe(lazyloadBackground);
                });
            };
            const events = ["DOMContentLoaded", "elementor/lazyload/observe"];
            events.forEach((event) => {
                document.addEventListener(event, lazyloadRunObserver);
            });
        </script>
        <a href="#pgcac-body" class="scrollToTop"><i class="fa fa-arrow-up"></i></a>
    </body>
@endsection

@push('scripts')
    <script>
        $(document).ready(function () {
            "use strict";
            var offSetTop = 100;
            var $scrollToTopButton = $(".scrollToTop");
            //Check to see if the window is top if not then display button
            $(window).scroll(function () {
                if ($(this).scrollTop() > offSetTop) {
                    $scrollToTopButton.fadeIn();
                } else {
                    $scrollToTopButton.fadeOut();
                }
            });
        });
    </script>
@endpush