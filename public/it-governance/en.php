<html lang="en" data-ready=""><head>
  <meta charset="UTF-8">
  <style>
/*! tailwindcss v4.1.13 | MIT License | https://tailwindcss.com */
@layer properties;
@layer theme, base, components, utilities;
@layer theme {
  :root, :host {
    --font-sans: ui-sans-serif, system-ui, sans-serif, "Apple Color Emoji",
      "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
    --font-mono: ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono",
      "Courier New", monospace;
    --color-slate-50: oklch(98.4% 0.003 247.858);
    --color-slate-200: oklch(92.9% 0.013 255.508);
    --color-slate-600: oklch(44.6% 0.043 257.281);
    --color-slate-700: oklch(37.2% 0.044 257.287);
    --color-slate-900: oklch(20.8% 0.042 265.755);
    --color-white: #fff;
    --spacing: 0.25rem;
    --container-5xl: 64rem;
    --text-xs: 0.75rem;
    --text-xs--line-height: calc(1 / 0.75);
    --text-sm: 0.875rem;
    --text-sm--line-height: calc(1.25 / 0.875);
    --text-base: 1rem;
    --text-base--line-height: calc(1.5 / 1);
    --text-lg: 1.125rem;
    --text-lg--line-height: calc(1.75 / 1.125);
    --text-xl: 1.25rem;
    --text-xl--line-height: calc(1.75 / 1.25);
    --text-2xl: 1.5rem;
    --text-2xl--line-height: calc(2 / 1.5);
    --font-weight-medium: 500;
    --font-weight-semibold: 600;
    --font-weight-bold: 700;
    --tracking-tight: -0.025em;
    --leading-relaxed: 1.625;
    --radius-md: 0.375rem;
    --radius-lg: 0.5rem;
    --radius-xl: 0.75rem;
    --radius-2xl: 1rem;
    --default-transition-duration: 150ms;
    --default-transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
    --default-font-family: var(--font-sans);
    --default-mono-font-family: var(--font-mono);
    --color-background: hsl(var(--background));
    --color-foreground: hsl(var(--foreground));
    --color-muted-foreground: hsl(var(--muted-foreground));
    --color-border: hsl(var(--border));
    --color-input: hsl(var(--input));
    --color-card: hsl(var(--card));
    --color-card-foreground: hsl(var(--card-foreground));
    --color-primary: hsl(var(--primary));
    --color-primary-foreground: hsl(var(--primary-foreground));
    --color-secondary: hsl(var(--secondary));
    --color-secondary-foreground: hsl(var(--secondary-foreground));
    --color-accent: hsl(var(--accent));
    --color-accent-foreground: hsl(var(--accent-foreground));
    --color-destructive: hsl(var(--destructive));
    --color-destructive-foreground: hsl(var(--destructive-foreground));
    --color-ring: hsl(var(--ring));
  }
}
@layer base {
  *, ::after, ::before, ::backdrop, ::file-selector-button {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
    border: 0 solid;
  }
  html, :host {
    line-height: 1.5;
    -webkit-text-size-adjust: 100%;
    tab-size: 4;
    font-family: var(--default-font-family, ui-sans-serif, system-ui, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji");
    font-feature-settings: var(--default-font-feature-settings, normal);
    font-variation-settings: var(--default-font-variation-settings, normal);
    -webkit-tap-highlight-color: transparent;
  }
  hr {
    height: 0;
    color: inherit;
    border-top-width: 1px;
  }
  abbr:where([title]) {
    -webkit-text-decoration: underline dotted;
    text-decoration: underline dotted;
  }
  h1, h2, h3, h4, h5, h6 {
    font-size: inherit;
    font-weight: inherit;
  }
  a {
    color: inherit;
    -webkit-text-decoration: inherit;
    text-decoration: inherit;
  }
  b, strong {
    font-weight: bolder;
  }
  code, kbd, samp, pre {
    font-family: var(--default-mono-font-family, ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace);
    font-feature-settings: var(--default-mono-font-feature-settings, normal);
    font-variation-settings: var(--default-mono-font-variation-settings, normal);
    font-size: 1em;
  }
  small {
    font-size: 80%;
  }
  sub, sup {
    font-size: 75%;
    line-height: 0;
    position: relative;
    vertical-align: baseline;
  }
  sub {
    bottom: -0.25em;
  }
  sup {
    top: -0.5em;
  }
  table {
    text-indent: 0;
    border-color: inherit;
    border-collapse: collapse;
  }
  :-moz-focusring {
    outline: auto;
  }
  progress {
    vertical-align: baseline;
  }
  summary {
    display: list-item;
  }
  ol, ul, menu {
    list-style: none;
  }
  img, svg, video, canvas, audio, iframe, embed, object {
    display: block;
    vertical-align: middle;
  }
  img, video {
    max-width: 100%;
    height: auto;
  }
  button, input, select, optgroup, textarea, ::file-selector-button {
    font: inherit;
    font-feature-settings: inherit;
    font-variation-settings: inherit;
    letter-spacing: inherit;
    color: inherit;
    border-radius: 0;
    background-color: transparent;
    opacity: 1;
  }
  :where(select:is([multiple], [size])) optgroup {
    font-weight: bolder;
  }
  :where(select:is([multiple], [size])) optgroup option {
    padding-inline-start: 20px;
  }
  ::file-selector-button {
    margin-inline-end: 4px;
  }
  ::placeholder {
    opacity: 1;
  }
  @supports (not (-webkit-appearance: -apple-pay-button))  or (contain-intrinsic-size: 1px) {
    ::placeholder {
      color: currentcolor;
      @supports (color: color-mix(in lab, red, red)) {
        color: color-mix(in oklab, currentcolor 50%, transparent);
      }
    }
  }
  textarea {
    resize: vertical;
  }
  ::-webkit-search-decoration {
    -webkit-appearance: none;
  }
  ::-webkit-date-and-time-value {
    min-height: 1lh;
    text-align: inherit;
  }
  ::-webkit-datetime-edit {
    display: inline-flex;
  }
  ::-webkit-datetime-edit-fields-wrapper {
    padding: 0;
  }
  ::-webkit-datetime-edit, ::-webkit-datetime-edit-year-field, ::-webkit-datetime-edit-month-field, ::-webkit-datetime-edit-day-field, ::-webkit-datetime-edit-hour-field, ::-webkit-datetime-edit-minute-field, ::-webkit-datetime-edit-second-field, ::-webkit-datetime-edit-millisecond-field, ::-webkit-datetime-edit-meridiem-field {
    padding-block: 0;
  }
  ::-webkit-calendar-picker-indicator {
    line-height: 1;
  }
  :-moz-ui-invalid {
    box-shadow: none;
  }
  button, input:where([type="button"], [type="reset"], [type="submit"]), ::file-selector-button {
    appearance: button;
  }
  ::-webkit-inner-spin-button, ::-webkit-outer-spin-button {
    height: auto;
  }
  [hidden]:where(:not([hidden="until-found"])) {
    display: none !important;
  }
}
@layer utilities {
  .relative {
    position: relative;
  }
  .mx-auto {
    margin-inline: auto;
  }
  .mt-1 {
    margin-top: calc(var(--spacing) * 1);
  }
  .mt-2 {
    margin-top: calc(var(--spacing) * 2);
  }
  .mr-1 {
    margin-right: calc(var(--spacing) * 1);
  }
  .mb-1 {
    margin-bottom: calc(var(--spacing) * 1);
  }
  .ml-2 {
    margin-left: calc(var(--spacing) * 2);
  }
  .flex {
    display: flex;
  }
  .grid {
    display: grid;
  }
  .inline-flex {
    display: inline-flex;
  }
  .h-2 {
    height: calc(var(--spacing) * 2);
  }
  .h-4 {
    height: calc(var(--spacing) * 4);
  }
  .h-5 {
    height: calc(var(--spacing) * 5);
  }
  .h-6 {
    height: calc(var(--spacing) * 6);
  }
  .h-8 {
    height: calc(var(--spacing) * 8);
  }
  .h-9 {
    height: calc(var(--spacing) * 9);
  }
  .h-10 {
    height: calc(var(--spacing) * 10);
  }
  .h-\[1px\] {
    height: 1px;
  }
  .h-full {
    height: 100%;
  }
  .min-h-screen {
    min-height: 100vh;
  }
  .w-4 {
    width: calc(var(--spacing) * 4);
  }
  .w-5 {
    width: calc(var(--spacing) * 5);
  }
  .w-6 {
    width: calc(var(--spacing) * 6);
  }
  .w-9 {
    width: calc(var(--spacing) * 9);
  }
  .w-\[1px\] {
    width: 1px;
  }
  .w-full {
    width: 100%;
  }
  .max-w-5xl {
    max-width: var(--container-5xl);
  }
  .flex-1 {
    flex: 1;
  }
  .shrink-0 {
    flex-shrink: 0;
  }
  .transform {
    transform: var(--tw-rotate-x,) var(--tw-rotate-y,) var(--tw-rotate-z,) var(--tw-skew-x,) var(--tw-skew-y,);
  }
  .list-decimal {
    list-style-type: decimal;
  }
  .list-disc {
    list-style-type: disc;
  }
  .flex-col {
    flex-direction: column;
  }
  .flex-wrap {
    flex-wrap: wrap;
  }
  .items-center {
    align-items: center;
  }
  .justify-between {
    justify-content: space-between;
  }
  .justify-center {
    justify-content: center;
  }
  .gap-1 {
    gap: calc(var(--spacing) * 1);
  }
  .gap-2 {
    gap: calc(var(--spacing) * 2);
  }
  .gap-3 {
    gap: calc(var(--spacing) * 3);
  }
  .gap-4 {
    gap: calc(var(--spacing) * 4);
  }
  .space-y-1\.5 {
    :where(& > :not(:last-child)) {
      --tw-space-y-reverse: 0;
      margin-block-start: calc(calc(var(--spacing) * 1.5) * var(--tw-space-y-reverse));
      margin-block-end: calc(calc(var(--spacing) * 1.5) * calc(1 - var(--tw-space-y-reverse)));
    }
  }
  .space-y-2 {
    :where(& > :not(:last-child)) {
      --tw-space-y-reverse: 0;
      margin-block-start: calc(calc(var(--spacing) * 2) * var(--tw-space-y-reverse));
      margin-block-end: calc(calc(var(--spacing) * 2) * calc(1 - var(--tw-space-y-reverse)));
    }
  }
  .space-y-3 {
    :where(& > :not(:last-child)) {
      --tw-space-y-reverse: 0;
      margin-block-start: calc(calc(var(--spacing) * 3) * var(--tw-space-y-reverse));
      margin-block-end: calc(calc(var(--spacing) * 3) * calc(1 - var(--tw-space-y-reverse)));
    }
  }
  .space-y-4 {
    :where(& > :not(:last-child)) {
      --tw-space-y-reverse: 0;
      margin-block-start: calc(calc(var(--spacing) * 4) * var(--tw-space-y-reverse));
      margin-block-end: calc(calc(var(--spacing) * 4) * calc(1 - var(--tw-space-y-reverse)));
    }
  }
  .space-y-6 {
    :where(& > :not(:last-child)) {
      --tw-space-y-reverse: 0;
      margin-block-start: calc(calc(var(--spacing) * 6) * var(--tw-space-y-reverse));
      margin-block-end: calc(calc(var(--spacing) * 6) * calc(1 - var(--tw-space-y-reverse)));
    }
  }
  .overflow-hidden {
    overflow: hidden;
  }
  .rounded-2xl {
    border-radius: var(--radius-2xl);
  }
  .rounded-full {
    border-radius: calc(infinity * 1px);
  }
  .rounded-lg {
    border-radius: var(--radius-lg);
  }
  .rounded-md {
    border-radius: var(--radius-md);
  }
  .rounded-xl {
    border-radius: var(--radius-xl);
  }
  .border {
    border-style: var(--tw-border-style);
    border-width: 1px;
  }
  .border-destructive\/50 {
    border-color: color-mix(in srgb, hsl(var(--destructive)) 50%, transparent);
    @supports (color: color-mix(in lab, red, red)) {
      border-color: color-mix(in oklab, var(--color-destructive) 50%, transparent);
    }
  }
  .border-input {
    border-color: var(--color-input);
  }
  .border-slate-200 {
    border-color: var(--color-slate-200);
  }
  .border-transparent {
    border-color: transparent;
  }
  .bg-background {
    background-color: var(--color-background);
  }
  .bg-border {
    background-color: var(--color-border);
  }
  .bg-card {
    background-color: var(--color-card);
  }
  .bg-destructive {
    background-color: var(--color-destructive);
  }
  .bg-primary {
    background-color: var(--color-primary);
  }
  .bg-secondary {
    background-color: var(--color-secondary);
  }
  .bg-slate-50 {
    background-color: var(--color-slate-50);
  }
  .bg-white {
    background-color: var(--color-white);
  }
  .bg-gradient-to-b {
    --tw-gradient-position: to bottom in oklab;
    background-image: linear-gradient(var(--tw-gradient-stops));
  }
  .from-slate-50 {
    --tw-gradient-from: var(--color-slate-50);
    --tw-gradient-stops: var(--tw-gradient-via-stops, var(--tw-gradient-position), var(--tw-gradient-from) var(--tw-gradient-from-position), var(--tw-gradient-to) var(--tw-gradient-to-position));
  }
  .to-white {
    --tw-gradient-to: var(--color-white);
    --tw-gradient-stops: var(--tw-gradient-via-stops, var(--tw-gradient-position), var(--tw-gradient-from) var(--tw-gradient-from-position), var(--tw-gradient-to) var(--tw-gradient-to-position));
  }
  .p-2 {
    padding: calc(var(--spacing) * 2);
  }
  .p-3 {
    padding: calc(var(--spacing) * 3);
  }
  .p-6 {
    padding: calc(var(--spacing) * 6);
  }
  .px-2\.5 {
    padding-inline: calc(var(--spacing) * 2.5);
  }
  .px-3 {
    padding-inline: calc(var(--spacing) * 3);
  }
  .px-4 {
    padding-inline: calc(var(--spacing) * 4);
  }
  .px-8 {
    padding-inline: calc(var(--spacing) * 8);
  }
  .py-0\.5 {
    padding-block: calc(var(--spacing) * 0.5);
  }
  .py-2 {
    padding-block: calc(var(--spacing) * 2);
  }
  .py-3 {
    padding-block: calc(var(--spacing) * 3);
  }
  .pt-0 {
    padding-top: calc(var(--spacing) * 0);
  }
  .pt-3 {
    padding-top: calc(var(--spacing) * 3);
  }
  .pt-4 {
    padding-top: calc(var(--spacing) * 4);
  }
  .pb-2 {
    padding-bottom: calc(var(--spacing) * 2);
  }
  .pl-6 {
    padding-left: calc(var(--spacing) * 6);
  }
  .text-2xl {
    font-size: var(--text-2xl);
    line-height: var(--tw-leading, var(--text-2xl--line-height));
  }
  .text-base {
    font-size: var(--text-base);
    line-height: var(--tw-leading, var(--text-base--line-height));
  }
  .text-lg {
    font-size: var(--text-lg);
    line-height: var(--tw-leading, var(--text-lg--line-height));
  }
  .text-sm {
    font-size: var(--text-sm);
    line-height: var(--tw-leading, var(--text-sm--line-height));
  }
  .text-xl {
    font-size: var(--text-xl);
    line-height: var(--tw-leading, var(--text-xl--line-height));
  }
  .text-xs {
    font-size: var(--text-xs);
    line-height: var(--tw-leading, var(--text-xs--line-height));
  }
  .leading-none {
    --tw-leading: 1;
    line-height: 1;
  }
  .font-bold {
    --tw-font-weight: var(--font-weight-bold);
    font-weight: var(--font-weight-bold);
  }
  .font-medium {
    --tw-font-weight: var(--font-weight-medium);
    font-weight: var(--font-weight-medium);
  }
  .font-semibold {
    --tw-font-weight: var(--font-weight-semibold);
    font-weight: var(--font-weight-semibold);
  }
  .tracking-tight {
    --tw-tracking: var(--tracking-tight);
    letter-spacing: var(--tracking-tight);
  }
  .whitespace-nowrap {
    white-space: nowrap;
  }
  .text-card-foreground {
    color: var(--color-card-foreground);
  }
  .text-destructive {
    color: var(--color-destructive);
  }
  .text-destructive-foreground {
    color: var(--color-destructive-foreground);
  }
  .text-foreground {
    color: var(--color-foreground);
  }
  .text-muted-foreground {
    color: var(--color-muted-foreground);
  }
  .text-primary {
    color: var(--color-primary);
  }
  .text-primary-foreground {
    color: var(--color-primary-foreground);
  }
  .text-secondary-foreground {
    color: var(--color-secondary-foreground);
  }
  .text-slate-600 {
    color: var(--color-slate-600);
  }
  .text-slate-700 {
    color: var(--color-slate-700);
  }
  .text-slate-900 {
    color: var(--color-slate-900);
  }
  .underline-offset-4 {
    text-underline-offset: 4px;
  }
  .shadow {
    --tw-shadow: 0 1px 3px 0 var(--tw-shadow-color, rgb(0 0 0 / 0.1)), 0 1px 2px -1px var(--tw-shadow-color, rgb(0 0 0 / 0.1));
    box-shadow: var(--tw-inset-shadow), var(--tw-inset-ring-shadow), var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow);
  }
  .shadow-sm {
    --tw-shadow: 0 1px 3px 0 var(--tw-shadow-color, rgb(0 0 0 / 0.1)), 0 1px 2px -1px var(--tw-shadow-color, rgb(0 0 0 / 0.1));
    box-shadow: var(--tw-inset-shadow), var(--tw-inset-ring-shadow), var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow);
  }
  .outline {
    outline-style: var(--tw-outline-style);
    outline-width: 1px;
  }
  .transition-all {
    transition-property: all;
    transition-timing-function: var(--tw-ease, var(--default-transition-timing-function));
    transition-duration: var(--tw-duration, var(--default-transition-duration));
  }
  .transition-colors {
    transition-property: color, background-color, border-color, outline-color, text-decoration-color, fill, stroke, --tw-gradient-from, --tw-gradient-via, --tw-gradient-to;
    transition-timing-function: var(--tw-ease, var(--default-transition-timing-function));
    transition-duration: var(--tw-duration, var(--default-transition-duration));
  }
  .hover\:bg-accent {
    &:hover {
      @media (hover: hover) {
        background-color: var(--color-accent);
      }
    }
  }
  .hover\:bg-destructive\/80 {
    &:hover {
      @media (hover: hover) {
        background-color: color-mix(in srgb, hsl(var(--destructive)) 80%, transparent);
        @supports (color: color-mix(in lab, red, red)) {
          background-color: color-mix(in oklab, var(--color-destructive) 80%, transparent);
        }
      }
    }
  }
  .hover\:bg-destructive\/90 {
    &:hover {
      @media (hover: hover) {
        background-color: color-mix(in srgb, hsl(var(--destructive)) 90%, transparent);
        @supports (color: color-mix(in lab, red, red)) {
          background-color: color-mix(in oklab, var(--color-destructive) 90%, transparent);
        }
      }
    }
  }
  .hover\:bg-primary\/80 {
    &:hover {
      @media (hover: hover) {
        background-color: color-mix(in srgb, hsl(var(--primary)) 80%, transparent);
        @supports (color: color-mix(in lab, red, red)) {
          background-color: color-mix(in oklab, var(--color-primary) 80%, transparent);
        }
      }
    }
  }
  .hover\:bg-primary\/90 {
    &:hover {
      @media (hover: hover) {
        background-color: color-mix(in srgb, hsl(var(--primary)) 90%, transparent);
        @supports (color: color-mix(in lab, red, red)) {
          background-color: color-mix(in oklab, var(--color-primary) 90%, transparent);
        }
      }
    }
  }
  .hover\:bg-secondary\/80 {
    &:hover {
      @media (hover: hover) {
        background-color: color-mix(in srgb, hsl(var(--secondary)) 80%, transparent);
        @supports (color: color-mix(in lab, red, red)) {
          background-color: color-mix(in oklab, var(--color-secondary) 80%, transparent);
        }
      }
    }
  }
  .hover\:text-accent-foreground {
    &:hover {
      @media (hover: hover) {
        color: var(--color-accent-foreground);
      }
    }
  }
  .hover\:underline {
    &:hover {
      @media (hover: hover) {
        text-decoration-line: underline;
      }
    }
  }
  .focus\:ring-2 {
    &:focus {
      --tw-ring-shadow: var(--tw-ring-inset,) 0 0 0 calc(2px + var(--tw-ring-offset-width)) var(--tw-ring-color, currentcolor);
      box-shadow: var(--tw-inset-shadow), var(--tw-inset-ring-shadow), var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow);
    }
  }
  .focus\:ring-ring {
    &:focus {
      --tw-ring-color: var(--color-ring);
    }
  }
  .focus\:ring-offset-2 {
    &:focus {
      --tw-ring-offset-width: 2px;
      --tw-ring-offset-shadow: var(--tw-ring-inset,) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
    }
  }
  .focus\:outline-none {
    &:focus {
      --tw-outline-style: none;
      outline-style: none;
    }
  }
  .focus-visible\:ring-1 {
    &:focus-visible {
      --tw-ring-shadow: var(--tw-ring-inset,) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color, currentcolor);
      box-shadow: var(--tw-inset-shadow), var(--tw-inset-ring-shadow), var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow);
    }
  }
  .focus-visible\:ring-ring {
    &:focus-visible {
      --tw-ring-color: var(--color-ring);
    }
  }
  .focus-visible\:outline-none {
    &:focus-visible {
      --tw-outline-style: none;
      outline-style: none;
    }
  }
  .disabled\:pointer-events-none {
    &:disabled {
      pointer-events: none;
    }
  }
  .disabled\:opacity-50 {
    &:disabled {
      opacity: 50%;
    }
  }
  .md\:grid-cols-3 {
    @media (width >= 48rem) {
      grid-template-columns: repeat(3, minmax(0, 1fr));
    }
  }
  .md\:grid-cols-4 {
    @media (width >= 48rem) {
      grid-template-columns: repeat(4, minmax(0, 1fr));
    }
  }
  .dark\:border-destructive {
    @media (prefers-color-scheme: dark) {
      border-color: var(--color-destructive);
    }
  }
  .\[\&_p\]\:leading-relaxed {
    & p {
      --tw-leading: var(--leading-relaxed);
      line-height: var(--leading-relaxed);
    }
  }
  .\[\&_svg\]\:pointer-events-none {
    & svg {
      pointer-events: none;
    }
  }
  .\[\&_svg\]\:size-4 {
    & svg {
      width: calc(var(--spacing) * 4);
      height: calc(var(--spacing) * 4);
    }
  }
  .\[\&_svg\]\:shrink-0 {
    & svg {
      flex-shrink: 0;
    }
  }
  .\[\&\>svg\]\:absolute {
    &>svg {
      position: absolute;
    }
  }
  .\[\&\>svg\]\:top-4 {
    &>svg {
      top: calc(var(--spacing) * 4);
    }
  }
  .\[\&\>svg\]\:left-4 {
    &>svg {
      left: calc(var(--spacing) * 4);
    }
  }
  .\[\&\>svg\]\:text-destructive {
    &>svg {
      color: var(--color-destructive);
    }
  }
  .\[\&\>svg\]\:text-foreground {
    &>svg {
      color: var(--color-foreground);
    }
  }
  .\[\&\>svg\+div\]\:translate-y-\[-3px\] {
    &>svg+div {
      --tw-translate-y: -3px;
      translate: var(--tw-translate-x) var(--tw-translate-y);
    }
  }
  .\[\&\>svg\~\*\]\:pl-7 {
    &>svg~* {
      padding-left: calc(var(--spacing) * 7);
    }
  }
}
@layer base {
  :root {
    --background: 0 0% 100%;
    --foreground: 222.2 47.4% 11.2%;
    --muted: 210 40% 96.1%;
    --muted-foreground: 215.4 16.3% 46.9%;
    --popover: 0 0% 100%;
    --popover-foreground: 222.2 47.4% 11.2%;
    --border: 214.3 31.8% 91.4%;
    --input: 214.3 31.8% 91.4%;
    --card: 0 0% 100%;
    --card-foreground: 222.2 47.4% 11.2%;
    --primary: 222.2 47.4% 11.2%;
    --primary-foreground: 210 40% 98%;
    --secondary: 210 40% 96.1%;
    --secondary-foreground: 222.2 47.4% 11.2%;
    --accent: 210 40% 96.1%;
    --accent-foreground: 222.2 47.4% 11.2%;
    --destructive: 0 100% 50%;
    --destructive-foreground: 210 40% 98%;
    --ring: 215 20.2% 65.1%;
    --radius: 0.5rem;
    --chart-1: 12 76% 61%;
    --chart-2: 173 58% 39%;
    --chart-3: 197 37% 24%;
    --chart-4: 43 74% 66%;
    --chart-5: 27 87% 67%;
    --sidebar-background: 0 0% 98%;
    --sidebar-foreground: 240 5.3% 26.1%;
    --sidebar-primary: 240 5.9% 10%;
    --sidebar-primary-foreground: 0 0% 98%;
    --sidebar-accent: 240 4.8% 95.9%;
    --sidebar-accent-foreground: 240 5.9% 10%;
    --sidebar-border: 220 13% 91%;
    --sidebar-ring: 217.2 91.2% 59.8%;
  }
  @media (prefers-color-scheme: dark) {
    --background: 224 71% 4%;
    --foreground: 213 31% 91%;
    --muted: 223 47% 11%;
    --muted-foreground: 215.4 16.3% 56.9%;
    --popover: 224 71% 4%;
    --popover-foreground: 215 20.2% 65.1%;
    --border: 216 34% 17%;
    --input: 216 34% 17%;
    --card: 224 71% 4%;
    --card-foreground: 213 31% 91%;
    --primary: 210 40% 98%;
    --primary-foreground: 222.2 47.4% 1.2%;
    --secondary: 222.2 47.4% 11.2%;
    --secondary-foreground: 210 40% 98%;
    --accent: 216 34% 17%;
    --accent-foreground: 210 40% 98%;
    --destructive: 0 63% 31%;
    --destructive-foreground: 210 40% 98%;
    --ring: 216 34% 17%;
    --radius: 0.5rem;
    --chart-1: 220 70% 50%;
    --chart-2: 160 60% 45%;
    --chart-3: 30 80% 55%;
    --chart-4: 280 65% 60%;
    --chart-5: 340 75% 55%;
    --sidebar-background: 240 5.9% 10%;
    --sidebar-foreground: 240 4.8% 95.9%;
    --sidebar-primary: 224.3 76.3% 48%;
    --sidebar-primary-foreground: 0 0% 100%;
    --sidebar-accent: 240 3.7% 15.9%;
    --sidebar-accent-foreground: 240 4.8% 95.9%;
    --sidebar-border: 240 3.7% 15.9%;
    --sidebar-ring: 217.2 91.2% 59.8%;
  }
  *, ::before, ::after {
    border-color: var(--color-border);
  }
}
@property --tw-rotate-x {
  syntax: "*";
  inherits: false;
}
@property --tw-rotate-y {
  syntax: "*";
  inherits: false;
}
@property --tw-rotate-z {
  syntax: "*";
  inherits: false;
}
@property --tw-skew-x {
  syntax: "*";
  inherits: false;
}
@property --tw-skew-y {
  syntax: "*";
  inherits: false;
}
@property --tw-space-y-reverse {
  syntax: "*";
  inherits: false;
  initial-value: 0;
}
@property --tw-border-style {
  syntax: "*";
  inherits: false;
  initial-value: solid;
}
@property --tw-gradient-position {
  syntax: "*";
  inherits: false;
}
@property --tw-gradient-from {
  syntax: "<color>";
  inherits: false;
  initial-value: #0000;
}
@property --tw-gradient-via {
  syntax: "<color>";
  inherits: false;
  initial-value: #0000;
}
@property --tw-gradient-to {
  syntax: "<color>";
  inherits: false;
  initial-value: #0000;
}
@property --tw-gradient-stops {
  syntax: "*";
  inherits: false;
}
@property --tw-gradient-via-stops {
  syntax: "*";
  inherits: false;
}
@property --tw-gradient-from-position {
  syntax: "<length-percentage>";
  inherits: false;
  initial-value: 0%;
}
@property --tw-gradient-via-position {
  syntax: "<length-percentage>";
  inherits: false;
  initial-value: 50%;
}
@property --tw-gradient-to-position {
  syntax: "<length-percentage>";
  inherits: false;
  initial-value: 100%;
}
@property --tw-leading {
  syntax: "*";
  inherits: false;
}
@property --tw-font-weight {
  syntax: "*";
  inherits: false;
}
@property --tw-tracking {
  syntax: "*";
  inherits: false;
}
@property --tw-shadow {
  syntax: "*";
  inherits: false;
  initial-value: 0 0 #0000;
}
@property --tw-shadow-color {
  syntax: "*";
  inherits: false;
}
@property --tw-shadow-alpha {
  syntax: "<percentage>";
  inherits: false;
  initial-value: 100%;
}
@property --tw-inset-shadow {
  syntax: "*";
  inherits: false;
  initial-value: 0 0 #0000;
}
@property --tw-inset-shadow-color {
  syntax: "*";
  inherits: false;
}
@property --tw-inset-shadow-alpha {
  syntax: "<percentage>";
  inherits: false;
  initial-value: 100%;
}
@property --tw-ring-color {
  syntax: "*";
  inherits: false;
}
@property --tw-ring-shadow {
  syntax: "*";
  inherits: false;
  initial-value: 0 0 #0000;
}
@property --tw-inset-ring-color {
  syntax: "*";
  inherits: false;
}
@property --tw-inset-ring-shadow {
  syntax: "*";
  inherits: false;
  initial-value: 0 0 #0000;
}
@property --tw-ring-inset {
  syntax: "*";
  inherits: false;
}
@property --tw-ring-offset-width {
  syntax: "<length>";
  inherits: false;
  initial-value: 0px;
}
@property --tw-ring-offset-color {
  syntax: "*";
  inherits: false;
  initial-value: #fff;
}
@property --tw-ring-offset-shadow {
  syntax: "*";
  inherits: false;
  initial-value: 0 0 #0000;
}
@property --tw-outline-style {
  syntax: "*";
  inherits: false;
  initial-value: solid;
}
@property --tw-translate-x {
  syntax: "*";
  inherits: false;
  initial-value: 0;
}
@property --tw-translate-y {
  syntax: "*";
  inherits: false;
  initial-value: 0;
}
@property --tw-translate-z {
  syntax: "*";
  inherits: false;
  initial-value: 0;
}
@layer properties {
  @supports ((-webkit-hyphens: none) and (not (margin-trim: inline))) or ((-moz-orient: inline) and (not (color:rgb(from red r g b)))) {
    *, ::before, ::after, ::backdrop {
      --tw-rotate-x: initial;
      --tw-rotate-y: initial;
      --tw-rotate-z: initial;
      --tw-skew-x: initial;
      --tw-skew-y: initial;
      --tw-space-y-reverse: 0;
      --tw-border-style: solid;
      --tw-gradient-position: initial;
      --tw-gradient-from: #0000;
      --tw-gradient-via: #0000;
      --tw-gradient-to: #0000;
      --tw-gradient-stops: initial;
      --tw-gradient-via-stops: initial;
      --tw-gradient-from-position: 0%;
      --tw-gradient-via-position: 50%;
      --tw-gradient-to-position: 100%;
      --tw-leading: initial;
      --tw-font-weight: initial;
      --tw-tracking: initial;
      --tw-shadow: 0 0 #0000;
      --tw-shadow-color: initial;
      --tw-shadow-alpha: 100%;
      --tw-inset-shadow: 0 0 #0000;
      --tw-inset-shadow-color: initial;
      --tw-inset-shadow-alpha: 100%;
      --tw-ring-color: initial;
      --tw-ring-shadow: 0 0 #0000;
      --tw-inset-ring-color: initial;
      --tw-inset-ring-shadow: 0 0 #0000;
      --tw-ring-inset: initial;
      --tw-ring-offset-width: 0px;
      --tw-ring-offset-color: #fff;
      --tw-ring-offset-shadow: 0 0 #0000;
      --tw-outline-style: solid;
      --tw-translate-x: 0;
      --tw-translate-y: 0;
      --tw-translate-z: 0;
    }
  }
}

</style>
<style>html,body,#root{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}html,body{font-family:-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Oxygen,Ubuntu,Cantarell,Helvetica Neue,Arial,sans-serif!important}button,input,textarea,select{font-family:inherit}</style></head>
  <body>
    <div id="root"><div data-source-pos="370:4-440:10" data-source-name="div" class="min-h-screen w-full bg-gradient-to-b from-slate-50 to-white text-slate-900 p-6"><div data-source-pos="371:6-439:12" data-source-name="div" class="max-w-5xl mx-auto space-y-6"><header data-source-pos="372:8-383:17" data-source-name="header" class="flex items-center justify-between"><div data-source-pos="373:10-378:16" data-source-name="div"><h1 data-source-pos="374:12-376:17" data-source-name="h1" class="text-2xl font-bold tracking-tight flex items-center gap-2"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-shield-check w-6 h-6" aria-hidden="true" data-source-pos="375:14-375:49" data-source-name="ShieldCheck"><path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z"></path><path d="m9 12 2 2 4-4"></path></svg> Governance Challenge: ERP Project</h1><p data-source-pos="377:12-377:112" data-source-name="p" class="text-sm text-slate-600">Short game to practice IT Governance decisions.</p></div><div data-source-pos="379:10-382:16" data-source-name="div" class="flex items-center gap-3"><div class="inline-flex items-center rounded-full border px-2.5 py-0.5 font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent bg-secondary text-secondary-foreground hover:bg-secondary/80 text-xs" data-source-pos="380:12-380:79" data-source-name="Badge">Demo version</div><button class="inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm font-medium transition-colors focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-ring disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 border border-input bg-background shadow-sm hover:bg-accent hover:text-accent-foreground h-9 px-4 py-2 gap-2" data-source-pos="381:12-381:124" data-source-name="Button"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-refresh-ccw w-4 h-4" aria-hidden="true" data-source-pos="381:72-381:105" data-source-name="RefreshCcw"><path d="M21 12a9 9 0 0 0-9-9 9.75 9.75 0 0 0-6.74 2.74L3 8"></path><path d="M3 3v5h5"></path><path d="M3 12a9 9 0 0 0 9 9 9.75 9.75 0 0 0 6.74-2.74L21 16"></path><path d="M16 16h5v5"></path></svg> Restart</button></div></header><div class="rounded-lg border bg-card text-card-foreground shadow-sm border-slate-200" data-source-pos="385:8-400:15" data-source-name="Card"><div class="flex flex-col space-y-1.5 p-6 pb-2" data-source-pos="386:10-396:23" data-source-name="CardHeader"><div data-source-pos="387:12-395:18" data-source-name="div" class="flex items-center justify-between"><div class="font-semibold tracking-tight text-lg" data-source-pos="388:14-388:65" data-source-name="CardTitle">Progress</div><div data-source-pos="389:14-394:20" data-source-name="div" class="flex gap-3 text-xs text-slate-600"><span data-source-pos="390:16-390:137" data-source-name="span" class="flex items-center gap-1"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-clock w-4 h-4" aria-hidden="true" data-source-pos="390:58-390:86" data-source-name="Clock"><path d="M12 6v6l4 2"></path><circle cx="12" cy="12" r="10"></circle></svg> Time: <strong data-source-pos="390:95-390:130" data-source-name="strong">50</strong></span><span data-source-pos="391:16-391:147" data-source-name="span" class="flex items-center gap-1"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-coins w-4 h-4" aria-hidden="true" data-source-pos="391:58-391:86" data-source-name="Coins"><circle cx="8" cy="8" r="6"></circle><path d="M18.09 10.37A6 6 0 1 1 10.34 18"></path><path d="M7 6h1v4"></path><path d="m16.71 13.88.7.71-2.82 2.82"></path></svg> Budget: <strong data-source-pos="391:100-391:140" data-source-name="strong">50</strong></span><span data-source-pos="392:16-392:143" data-source-name="span" class="flex items-center gap-1"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-users w-4 h-4" aria-hidden="true" data-source-pos="392:58-392:86" data-source-name="Users"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path><path d="M16 3.128a4 4 0 0 1 0 7.744"></path><path d="M22 21v-2a4 4 0 0 0-3-3.87"></path><circle cx="9" cy="7" r="4"></circle></svg> Confidence: <strong data-source-pos="392:98-392:136" data-source-name="strong">50</strong></span><span data-source-pos="393:16-393:133" data-source-name="span" class="flex items-center gap-1"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle-alert w-4 h-4" aria-hidden="true" data-source-pos="393:58-393:92" data-source-name="CircleAlert"><circle cx="12" cy="12" r="10"></circle><line x1="12" x2="12" y1="8" y2="12"></line><line x1="12" x2="12.01" y1="16" y2="16"></line></svg> Risk: <strong data-source-pos="393:101-393:126" data-source-name="strong">20</strong></span></div></div></div><div class="p-6 pt-0" data-source-pos="397:10-399:24" data-source-name="CardContent"><div aria-valuemax="100" aria-valuemin="0" role="progressbar" data-state="indeterminate" data-max="100" class="relative w-full overflow-hidden rounded-full bg-secondary h-2" data-source-pos="398:12-398:69" data-source-name="Progress"><div data-state="indeterminate" data-max="100" class="h-full w-full flex-1 bg-primary transition-all" style="transform: translateX(-100%);"></div></div></div></div><div class="rounded-lg border bg-card text-card-foreground shadow-sm border-slate-200" data-source-pos="404:12-432:19" data-source-name="Card"><div class="flex flex-col space-y-1.5 p-6" data-source-pos="405:14-413:27" data-source-name="CardHeader"><div data-source-pos="406:16-412:22" data-source-name="div" class="flex items-center justify-between gap-4"><div data-source-pos="407:18-410:24" data-source-name="div"><div class="font-semibold tracking-tight text-xl" data-source-pos="408:20-408:78" data-source-name="CardTitle">Phase 1 – Planificación</div><p data-source-pos="409:20-409:92" data-source-name="p" class="text-sm text-slate-600">Principle: Alineamiento estratégico y gestión de riesgos</p></div><div class="inline-flex items-center rounded-full border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent bg-primary text-primary-foreground hover:bg-primary/80" data-source-pos="411:18-411:113" data-source-name="Badge"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-book-open-text w-4 h-4 mr-1" aria-hidden="true" data-source-pos="411:25-411:65" data-source-name="BookOpenText"><path d="M12 7v14"></path><path d="M16 12h2"></path><path d="M16 8h2"></path><path d="M3 18a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h5a4 4 0 0 1 4 4 4 4 0 0 1 4-4h5a1 1 0 0 1 1 1v13a1 1 0 0 1-1 1h-6a3 3 0 0 0-3 3 3 3 0 0 0-3-3z"></path><path d="M6 12h2"></path><path d="M6 8h2"></path></svg> Phase 1 / 5</div></div></div><div class="p-6 pt-0 space-y-4" data-source-pos="414:14-431:28" data-source-name="CardContent"><p data-source-pos="415:16-415:67" data-source-name="p" class="text-slate-700">Se va a implementar un ERP para una entidad pública. Debes preparar el marco de gobernanza inicial, el plan y la estructura de roles.</p><div data-orientation="horizontal" role="none" class="shrink-0 bg-border h-[1px] w-full" data-source-pos="416:16-416:28" data-source-name="Separator"></div><div data-source-pos="417:16-430:22" data-source-name="div" class="grid md:grid-cols-3 gap-4"><div class="rounded-lg border bg-card text-card-foreground shadow-sm border-slate-200" data-source-pos="419:20-428:27" data-source-name="Card"><div class="flex flex-col space-y-1.5 p-6 pb-2" data-source-pos="420:22-422:35" data-source-name="CardHeader"><div class="font-semibold tracking-tight text-base" data-source-pos="421:24-421:80" data-source-name="CardTitle">Establecer comité de gobernanza y matriz RACI</div></div><div class="p-6 pt-0 space-y-3" data-source-pos="423:22-427:36" data-source-name="CardContent"><p data-source-pos="424:24-424:83" data-source-name="p" class="text-sm text-slate-700">Define roles claros (patrocinador, PMO, auditoría interna). Sesiones de kickoff con stakeholders clave.</p><div data-source-pos="425:24-425:130" data-source-name="div" class="text-xs text-slate-600 bg-slate-50 rounded-xl p-2">Impact: Time -5 | Budget -5 | Confidence +8 | Risk -8</div><button class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md text-sm font-medium transition-colors focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-ring disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 bg-primary text-primary-foreground shadow hover:bg-primary/90 h-9 px-4 py-2 w-full" data-source-pos="426:24-426:96" data-source-name="Button">Choose</button></div></div><div class="rounded-lg border bg-card text-card-foreground shadow-sm border-slate-200" data-source-pos="419:20-428:27" data-source-name="Card"><div class="flex flex-col space-y-1.5 p-6 pb-2" data-source-pos="420:22-422:35" data-source-name="CardHeader"><div class="font-semibold tracking-tight text-base" data-source-pos="421:24-421:80" data-source-name="CardTitle">Plan mínimo viable, arranque rápido</div></div><div class="p-6 pt-0 space-y-3" data-source-pos="423:22-427:36" data-source-name="CardContent"><p data-source-pos="424:24-424:83" data-source-name="p" class="text-sm text-slate-700">Reducir el arranque formal para ganar velocidad. Documentación ligera y decisiones ad-hoc.</p><div data-source-pos="425:24-425:130" data-source-name="div" class="text-xs text-slate-600 bg-slate-50 rounded-xl p-2">Impact: Time +5 | Confidence -4 | Risk +8</div><button class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md text-sm font-medium transition-colors focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-ring disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 bg-primary text-primary-foreground shadow hover:bg-primary/90 h-9 px-4 py-2 w-full" data-source-pos="426:24-426:96" data-source-name="Button">Choose</button></div></div><div class="rounded-lg border bg-card text-card-foreground shadow-sm border-slate-200" data-source-pos="419:20-428:27" data-source-name="Card"><div class="flex flex-col space-y-1.5 p-6 pb-2" data-source-pos="420:22-422:35" data-source-name="CardHeader"><div class="font-semibold tracking-tight text-base" data-source-pos="421:24-421:80" data-source-name="CardTitle">Consultoría breve para evaluación de riesgos</div></div><div class="p-6 pt-0 space-y-3" data-source-pos="423:22-427:36" data-source-name="CardContent"><p data-source-pos="424:24-424:83" data-source-name="p" class="text-sm text-slate-700">Traer un tercero para mapa de riesgos temprano (ciber, procesos, adopción).</p><div data-source-pos="425:24-425:130" data-source-name="div" class="text-xs text-slate-600 bg-slate-50 rounded-xl p-2">Impact: Time -3 | Budget -8 | Confidence +3 | Risk -10</div><button class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md text-sm font-medium transition-colors focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-ring disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 bg-primary text-primary-foreground shadow hover:bg-primary/90 h-9 px-4 py-2 w-full" data-source-pos="426:24-426:96" data-source-name="Button">Choose</button></div></div></div></div></div></div></div></div>
    <script type="module">// external:https://cdn.jsdelivr.net/npm/react@18.3.1/+esm
var e = { exports: {} };
var t = {};
var r = Symbol.for("react.element");
var n = Symbol.for("react.portal");
var o = Symbol.for("react.fragment");
var u = Symbol.for("react.strict_mode");
var s = Symbol.for("react.profiler");
var a = Symbol.for("react.provider");
var c = Symbol.for("react.context");
var i = Symbol.for("react.forward_ref");
var f = Symbol.for("react.suspense");
var l = Symbol.for("react.memo");
var p = Symbol.for("react.lazy");
var y = Symbol.iterator;
var d = { isMounted: function() {
  return false;
}, enqueueForceUpdate: function() {
}, enqueueReplaceState: function() {
}, enqueueSetState: function() {
} };
var _ = Object.assign;
var x = {};
function m(e10, t18, r10) {
  this.props = e10, this.context = t18, this.refs = x, this.updater = r10 || d;
}
function h() {
}
function v(e10, t18, r10) {
  this.props = e10, this.context = t18, this.refs = x, this.updater = r10 || d;
}
m.prototype.isReactComponent = {}, m.prototype.setState = function(e10, t18) {
  if ("object" != typeof e10 && "function" != typeof e10 && null != e10) throw Error("setState(...): takes an object of state variables to update or a function which returns an object of state variables.");
  this.updater.enqueueSetState(this, e10, t18, "setState");
}, m.prototype.forceUpdate = function(e10) {
  this.updater.enqueueForceUpdate(this, e10, "forceUpdate");
}, h.prototype = m.prototype;
var b = v.prototype = new h();
b.constructor = v, _(b, m.prototype), b.isPureReactComponent = true;
var S = Array.isArray;
var E = Object.prototype.hasOwnProperty;
var R = { current: null };
var C = { key: true, ref: true, __self: true, __source: true };
function w(e10, t18, n14) {
  var o21, u6 = {}, s19 = null, a20 = null;
  if (null != t18) for (o21 in void 0 !== t18.ref && (a20 = t18.ref), void 0 !== t18.key && (s19 = "" + t18.key), t18) E.call(t18, o21) && !C.hasOwnProperty(o21) && (u6[o21] = t18[o21]);
  var c16 = arguments.length - 2;
  if (1 === c16) u6.children = n14;
  else if (1 < c16) {
    for (var i19 = Array(c16), f7 = 0; f7 < c16; f7++) i19[f7] = arguments[f7 + 2];
    u6.children = i19;
  }
  if (e10 && e10.defaultProps) for (o21 in c16 = e10.defaultProps) void 0 === u6[o21] && (u6[o21] = c16[o21]);
  return { $$typeof: r, type: e10, key: s19, ref: a20, props: u6, _owner: R.current };
}
function $(e10) {
  return "object" == typeof e10 && null !== e10 && e10.$$typeof === r;
}
var k = /\/+/g;
function g(e10, t18) {
  return "object" == typeof e10 && null !== e10 && null != e10.key ? function(e11) {
    var t19 = { "=": "=0", ":": "=2" };
    return "$" + e11.replace(/[=:]/g, function(e12) {
      return t19[e12];
    });
  }("" + e10.key) : t18.toString(36);
}
function O(e10, t18, o21, u6, s19) {
  var a20 = typeof e10;
  "undefined" !== a20 && "boolean" !== a20 || (e10 = null);
  var c16 = false;
  if (null === e10) c16 = true;
  else switch (a20) {
    case "string":
    case "number":
      c16 = true;
      break;
    case "object":
      switch (e10.$$typeof) {
        case r:
        case n:
          c16 = true;
      }
  }
  if (c16) return s19 = s19(c16 = e10), e10 = "" === u6 ? "." + g(c16, 0) : u6, S(s19) ? (o21 = "", null != e10 && (o21 = e10.replace(k, "$&/") + "/"), O(s19, t18, o21, "", function(e11) {
    return e11;
  })) : null != s19 && ($(s19) && (s19 = function(e11, t19) {
    return { $$typeof: r, type: e11.type, key: t19, ref: e11.ref, props: e11.props, _owner: e11._owner };
  }(s19, o21 + (!s19.key || c16 && c16.key === s19.key ? "" : ("" + s19.key).replace(k, "$&/") + "/") + e10)), t18.push(s19)), 1;
  if (c16 = 0, u6 = "" === u6 ? "." : u6 + ":", S(e10)) for (var i19 = 0; i19 < e10.length; i19++) {
    var f7 = u6 + g(a20 = e10[i19], i19);
    c16 += O(a20, t18, o21, f7, s19);
  }
  else if (f7 = function(e11) {
    return null === e11 || "object" != typeof e11 ? null : "function" == typeof (e11 = y && e11[y] || e11["@@iterator"]) ? e11 : null;
  }(e10), "function" == typeof f7) for (e10 = f7.call(e10), i19 = 0; !(a20 = e10.next()).done; ) c16 += O(a20 = a20.value, t18, o21, f7 = u6 + g(a20, i19++), s19);
  else if ("object" === a20) throw t18 = String(e10), Error("Objects are not valid as a React child (found: " + ("[object Object]" === t18 ? "object with keys {" + Object.keys(e10).join(", ") + "}" : t18) + "). If you meant to render a collection of children, use an array instead.");
  return c16;
}
function j(e10, t18, r10) {
  if (null == e10) return e10;
  var n14 = [], o21 = 0;
  return O(e10, n14, "", "", function(e11) {
    return t18.call(r10, e11, o21++);
  }), n14;
}
function I(e10) {
  if (-1 === e10._status) {
    var t18 = e10._result;
    (t18 = t18()).then(function(t19) {
      0 !== e10._status && -1 !== e10._status || (e10._status = 1, e10._result = t19);
    }, function(t19) {
      0 !== e10._status && -1 !== e10._status || (e10._status = 2, e10._result = t19);
    }), -1 === e10._status && (e10._status = 0, e10._result = t18);
  }
  if (1 === e10._status) return e10._result.default;
  throw e10._result;
}
var P = { current: null };
var T = { transition: null };
var D = { ReactCurrentDispatcher: P, ReactCurrentBatchConfig: T, ReactCurrentOwner: R };
function V() {
  throw Error("act(...) is not supported in production builds of React.");
}
t.Children = { map: j, forEach: function(e10, t18, r10) {
  j(e10, function() {
    t18.apply(this, arguments);
  }, r10);
}, count: function(e10) {
  var t18 = 0;
  return j(e10, function() {
    t18++;
  }), t18;
}, toArray: function(e10) {
  return j(e10, function(e11) {
    return e11;
  }) || [];
}, only: function(e10) {
  if (!$(e10)) throw Error("React.Children.only expected to receive a single React element child.");
  return e10;
} }, t.Component = m, t.Fragment = o, t.Profiler = s, t.PureComponent = v, t.StrictMode = u, t.Suspense = f, t.__SECRET_INTERNALS_DO_NOT_USE_OR_YOU_WILL_BE_FIRED = D, t.act = V, t.cloneElement = function(e10, t18, n14) {
  if (null == e10) throw Error("React.cloneElement(...): The argument must be a React element, but you passed " + e10 + ".");
  var o21 = _({}, e10.props), u6 = e10.key, s19 = e10.ref, a20 = e10._owner;
  if (null != t18) {
    if (void 0 !== t18.ref && (s19 = t18.ref, a20 = R.current), void 0 !== t18.key && (u6 = "" + t18.key), e10.type && e10.type.defaultProps) var c16 = e10.type.defaultProps;
    for (i19 in t18) E.call(t18, i19) && !C.hasOwnProperty(i19) && (o21[i19] = void 0 === t18[i19] && void 0 !== c16 ? c16[i19] : t18[i19]);
  }
  var i19 = arguments.length - 2;
  if (1 === i19) o21.children = n14;
  else if (1 < i19) {
    c16 = Array(i19);
    for (var f7 = 0; f7 < i19; f7++) c16[f7] = arguments[f7 + 2];
    o21.children = c16;
  }
  return { $$typeof: r, type: e10.type, key: u6, ref: s19, props: o21, _owner: a20 };
}, t.createContext = function(e10) {
  return (e10 = { $$typeof: c, _currentValue: e10, _currentValue2: e10, _threadCount: 0, Provider: null, Consumer: null, _defaultValue: null, _globalName: null }).Provider = { $$typeof: a, _context: e10 }, e10.Consumer = e10;
}, t.createElement = w, t.createFactory = function(e10) {
  var t18 = w.bind(null, e10);
  return t18.type = e10, t18;
}, t.createRef = function() {
  return { current: null };
}, t.forwardRef = function(e10) {
  return { $$typeof: i, render: e10 };
}, t.isValidElement = $, t.lazy = function(e10) {
  return { $$typeof: p, _payload: { _status: -1, _result: e10 }, _init: I };
}, t.memo = function(e10, t18) {
  return { $$typeof: l, type: e10, compare: void 0 === t18 ? null : t18 };
}, t.startTransition = function(e10) {
  var t18 = T.transition;
  T.transition = {};
  try {
    e10();
  } finally {
    T.transition = t18;
  }
}, t.unstable_act = V, t.useCallback = function(e10, t18) {
  return P.current.useCallback(e10, t18);
}, t.useContext = function(e10) {
  return P.current.useContext(e10);
}, t.useDebugValue = function() {
}, t.useDeferredValue = function(e10) {
  return P.current.useDeferredValue(e10);
}, t.useEffect = function(e10, t18) {
  return P.current.useEffect(e10, t18);
}, t.useId = function() {
  return P.current.useId();
}, t.useImperativeHandle = function(e10, t18, r10) {
  return P.current.useImperativeHandle(e10, t18, r10);
}, t.useInsertionEffect = function(e10, t18) {
  return P.current.useInsertionEffect(e10, t18);
}, t.useLayoutEffect = function(e10, t18) {
  return P.current.useLayoutEffect(e10, t18);
}, t.useMemo = function(e10, t18) {
  return P.current.useMemo(e10, t18);
}, t.useReducer = function(e10, t18, r10) {
  return P.current.useReducer(e10, t18, r10);
}, t.useRef = function(e10) {
  return P.current.useRef(e10);
}, t.useState = function(e10) {
  return P.current.useState(e10);
}, t.useSyncExternalStore = function(e10, t18, r10) {
  return P.current.useSyncExternalStore(e10, t18, r10);
}, t.useTransition = function() {
  return P.current.useTransition();
}, t.version = "18.3.1", e.exports = t;
var L = e.exports;
var F = e.exports.Children;
var U = e.exports.Component;
var A = e.exports.Fragment;
var N = e.exports.Profiler;
var M = e.exports.PureComponent;
var q = e.exports.StrictMode;
var z = e.exports.Suspense;
var B = e.exports.__SECRET_INTERNALS_DO_NOT_USE_OR_YOU_WILL_BE_FIRED;
var H = e.exports.act;
var W = e.exports.cloneElement;
var Y = e.exports.createContext;
var G = e.exports.createElement;
var J = e.exports.createFactory;
var K = e.exports.createRef;
var Q = e.exports.forwardRef;
var X = e.exports.isValidElement;
var Z = e.exports.lazy;
var ee = e.exports.memo;
var te = e.exports.startTransition;
var re = e.exports.unstable_act;
var ne = e.exports.useCallback;
var oe = e.exports.useContext;
var ue = e.exports.useDebugValue;
var se = e.exports.useDeferredValue;
var ae = e.exports.useEffect;
var ce = e.exports.useId;
var ie = e.exports.useImperativeHandle;
var fe = e.exports.useInsertionEffect;
var le = e.exports.useLayoutEffect;
var pe = e.exports.useMemo;
var ye = e.exports.useReducer;
var de = e.exports.useRef;
var _e = e.exports.useState;
var xe = e.exports.useSyncExternalStore;
var me = e.exports.useTransition;
var he = e.exports.version;

// external:https://cdn.jsdelivr.net/npm/scheduler@0.23.2/+esm
var e2 = { exports: {} };
var n2 = {};
!function(e10) {
  function n14(e11, n15) {
    var t19 = e11.length;
    e11.push(n15);
    e: for (; 0 < t19; ) {
      var r11 = t19 - 1 >>> 1, l13 = e11[r11];
      if (!(0 < a20(l13, n15))) break e;
      e11[r11] = n15, e11[t19] = l13, t19 = r11;
    }
  }
  function t18(e11) {
    return 0 === e11.length ? null : e11[0];
  }
  function r10(e11) {
    if (0 === e11.length) return null;
    var n15 = e11[0], t19 = e11.pop();
    if (t19 !== n15) {
      e11[0] = t19;
      e: for (var r11 = 0, l13 = e11.length, i20 = l13 >>> 1; r11 < i20; ) {
        var o22 = 2 * (r11 + 1) - 1, u7 = e11[o22], s20 = o22 + 1, c17 = e11[s20];
        if (0 > a20(u7, t19)) s20 < l13 && 0 > a20(c17, u7) ? (e11[r11] = c17, e11[s20] = t19, r11 = s20) : (e11[r11] = u7, e11[o22] = t19, r11 = o22);
        else {
          if (!(s20 < l13 && 0 > a20(c17, t19))) break e;
          e11[r11] = c17, e11[s20] = t19, r11 = s20;
        }
      }
    }
    return n15;
  }
  function a20(e11, n15) {
    var t19 = e11.sortIndex - n15.sortIndex;
    return 0 !== t19 ? t19 : e11.id - n15.id;
  }
  if ("object" == typeof performance && "function" == typeof performance.now) {
    var l12 = performance;
    e10.unstable_now = function() {
      return l12.now();
    };
  } else {
    var i19 = Date, o21 = i19.now();
    e10.unstable_now = function() {
      return i19.now() - o21;
    };
  }
  var u6 = [], s19 = [], c16 = 1, f7 = null, b5 = 3, p9 = false, d6 = false, _6 = false, v6 = "function" == typeof setTimeout ? setTimeout : null, y6 = "function" == typeof clearTimeout ? clearTimeout : null, x7 = "undefined" != typeof setImmediate ? setImmediate : null;
  function m8(e11) {
    for (var a21 = t18(s19); null !== a21; ) {
      if (null === a21.callback) r10(s19);
      else {
        if (!(a21.startTime <= e11)) break;
        r10(s19), a21.sortIndex = a21.expirationTime, n14(u6, a21);
      }
      a21 = t18(s19);
    }
  }
  function g6(e11) {
    if (_6 = false, m8(e11), !d6) if (null !== t18(u6)) d6 = true, N4(k5);
    else {
      var n15 = t18(s19);
      null !== n15 && R4(g6, n15.startTime - e11);
    }
  }
  function k5(n15, a21) {
    d6 = false, _6 && (_6 = false, y6(I4), I4 = -1), p9 = true;
    var l13 = b5;
    try {
      for (m8(a21), f7 = t18(u6); null !== f7 && (!(f7.expirationTime > a21) || n15 && !L4()); ) {
        var i20 = f7.callback;
        if ("function" == typeof i20) {
          f7.callback = null, b5 = f7.priorityLevel;
          var o22 = i20(f7.expirationTime <= a21);
          a21 = e10.unstable_now(), "function" == typeof o22 ? f7.callback = o22 : f7 === t18(u6) && r10(u6), m8(a21);
        } else r10(u6);
        f7 = t18(u6);
      }
      if (null !== f7) var c17 = true;
      else {
        var v7 = t18(s19);
        null !== v7 && R4(g6, v7.startTime - a21), c17 = false;
      }
      return c17;
    } finally {
      f7 = null, b5 = l13, p9 = false;
    }
  }
  "undefined" != typeof navigator && void 0 !== navigator.scheduling && void 0 !== navigator.scheduling.isInputPending && navigator.scheduling.isInputPending.bind(navigator.scheduling);
  var h7, w4 = false, P4 = null, I4 = -1, C4 = 5, T4 = -1;
  function L4() {
    return !(e10.unstable_now() - T4 < C4);
  }
  function F4() {
    if (null !== P4) {
      var n15 = e10.unstable_now();
      T4 = n15;
      var t19 = true;
      try {
        t19 = P4(true, n15);
      } finally {
        t19 ? h7() : (w4 = false, P4 = null);
      }
    } else w4 = false;
  }
  if ("function" == typeof x7) h7 = function() {
    x7(F4);
  };
  else if ("undefined" != typeof MessageChannel) {
    var E4 = new MessageChannel(), M4 = E4.port2;
    E4.port1.onmessage = F4, h7 = function() {
      M4.postMessage(null);
    };
  } else h7 = function() {
    v6(F4, 0);
  };
  function N4(e11) {
    P4 = e11, w4 || (w4 = true, h7());
  }
  function R4(n15, t19) {
    I4 = v6(function() {
      n15(e10.unstable_now());
    }, t19);
  }
  e10.unstable_IdlePriority = 5, e10.unstable_ImmediatePriority = 1, e10.unstable_LowPriority = 4, e10.unstable_NormalPriority = 3, e10.unstable_Profiling = null, e10.unstable_UserBlockingPriority = 2, e10.unstable_cancelCallback = function(e11) {
    e11.callback = null;
  }, e10.unstable_continueExecution = function() {
    d6 || p9 || (d6 = true, N4(k5));
  }, e10.unstable_forceFrameRate = function(e11) {
    0 > e11 || 125 < e11 ? console.error("forceFrameRate takes a positive int between 0 and 125, forcing frame rates higher than 125 fps is not supported") : C4 = 0 < e11 ? Math.floor(1e3 / e11) : 5;
  }, e10.unstable_getCurrentPriorityLevel = function() {
    return b5;
  }, e10.unstable_getFirstCallbackNode = function() {
    return t18(u6);
  }, e10.unstable_next = function(e11) {
    switch (b5) {
      case 1:
      case 2:
      case 3:
        var n15 = 3;
        break;
      default:
        n15 = b5;
    }
    var t19 = b5;
    b5 = n15;
    try {
      return e11();
    } finally {
      b5 = t19;
    }
  }, e10.unstable_pauseExecution = function() {
  }, e10.unstable_requestPaint = function() {
  }, e10.unstable_runWithPriority = function(e11, n15) {
    switch (e11) {
      case 1:
      case 2:
      case 3:
      case 4:
      case 5:
        break;
      default:
        e11 = 3;
    }
    var t19 = b5;
    b5 = e11;
    try {
      return n15();
    } finally {
      b5 = t19;
    }
  }, e10.unstable_scheduleCallback = function(r11, a21, l13) {
    var i20 = e10.unstable_now();
    switch ("object" == typeof l13 && null !== l13 ? l13 = "number" == typeof (l13 = l13.delay) && 0 < l13 ? i20 + l13 : i20 : l13 = i20, r11) {
      case 1:
        var o22 = -1;
        break;
      case 2:
        o22 = 250;
        break;
      case 5:
        o22 = 1073741823;
        break;
      case 4:
        o22 = 1e4;
        break;
      default:
        o22 = 5e3;
    }
    return r11 = { id: c16++, callback: a21, priorityLevel: r11, startTime: l13, expirationTime: o22 = l13 + o22, sortIndex: -1 }, l13 > i20 ? (r11.sortIndex = l13, n14(s19, r11), null === t18(u6) && r11 === t18(s19) && (_6 ? (y6(I4), I4 = -1) : _6 = true, R4(g6, l13 - i20))) : (r11.sortIndex = o22, n14(u6, r11), d6 || p9 || (d6 = true, N4(k5))), r11;
  }, e10.unstable_shouldYield = L4, e10.unstable_wrapCallback = function(e11) {
    var n15 = b5;
    return function() {
      var t19 = b5;
      b5 = n15;
      try {
        return e11.apply(this, arguments);
      } finally {
        b5 = t19;
      }
    };
  };
}(n2), e2.exports = n2;
var t2 = e2.exports;
var r2 = e2.exports.unstable_IdlePriority;
var a2 = e2.exports.unstable_ImmediatePriority;
var l2 = e2.exports.unstable_LowPriority;
var i2 = e2.exports.unstable_NormalPriority;
var o2 = e2.exports.unstable_Profiling;
var u2 = e2.exports.unstable_UserBlockingPriority;
var s2 = e2.exports.unstable_cancelCallback;
var c2 = e2.exports.unstable_continueExecution;
var f2 = e2.exports.unstable_forceFrameRate;
var b2 = e2.exports.unstable_getCurrentPriorityLevel;
var p2 = e2.exports.unstable_getFirstCallbackNode;
var d2 = e2.exports.unstable_next;
var _2 = e2.exports.unstable_now;
var v2 = e2.exports.unstable_pauseExecution;
var y2 = e2.exports.unstable_requestPaint;
var x2 = e2.exports.unstable_runWithPriority;
var m2 = e2.exports.unstable_scheduleCallback;
var g2 = e2.exports.unstable_shouldYield;
var k2 = e2.exports.unstable_wrapCallback;

// external:https://cdn.jsdelivr.net/npm/react-dom@18.3.1/+esm
var t3 = { exports: {} };
var r3 = {};
var l3 = L;
var a3 = t2;
function u3(e10) {
  for (var n14 = "https://reactjs.org/docs/error-decoder.html?invariant=" + e10, t18 = 1; t18 < arguments.length; t18++) n14 += "&args[]=" + encodeURIComponent(arguments[t18]);
  return "Minified React error #" + e10 + "; visit " + n14 + " for the full message or use the non-minified dev environment for full errors and additional helpful warnings.";
}
var o3 = /* @__PURE__ */ new Set();
var i3 = {};
function s3(e10, n14) {
  c3(e10, n14);
  c3(e10 + "Capture", n14);
}
function c3(e10, n14) {
  i3[e10] = n14;
  for (e10 = 0; e10 < n14.length; e10++) o3.add(n14[e10]);
}
var f3 = !("undefined" === typeof window || "undefined" === typeof window.document || "undefined" === typeof window.document.createElement);
var d3 = Object.prototype.hasOwnProperty;
var p3 = /^[:A-Z_a-z\u00C0-\u00D6\u00D8-\u00F6\u00F8-\u02FF\u0370-\u037D\u037F-\u1FFF\u200C-\u200D\u2070-\u218F\u2C00-\u2FEF\u3001-\uD7FF\uF900-\uFDCF\uFDF0-\uFFFD][:A-Z_a-z\u00C0-\u00D6\u00D8-\u00F6\u00F8-\u02FF\u0370-\u037D\u037F-\u1FFF\u200C-\u200D\u2070-\u218F\u2C00-\u2FEF\u3001-\uD7FF\uF900-\uFDCF\uFDF0-\uFFFD\-.0-9\u00B7\u0300-\u036F\u203F-\u2040]*$/;
var h2 = {};
var m3 = {};
function g3(e10) {
  if (d3.call(m3, e10)) return true;
  if (d3.call(h2, e10)) return false;
  if (p3.test(e10)) return m3[e10] = true;
  h2[e10] = true;
  return false;
}
function v3(e10, n14, t18, r10) {
  if (null !== t18 && 0 === t18.type) return false;
  switch (typeof n14) {
    case "function":
    case "symbol":
      return true;
    case "boolean":
      if (r10) return false;
      if (null !== t18) return !t18.acceptsBooleans;
      e10 = e10.toLowerCase().slice(0, 5);
      return "data-" !== e10 && "aria-" !== e10;
    default:
      return false;
  }
}
function y3(e10, n14, t18, r10) {
  if (null === n14 || "undefined" === typeof n14 || v3(e10, n14, t18, r10)) return true;
  if (r10) return false;
  if (null !== t18) switch (t18.type) {
    case 3:
      return !n14;
    case 4:
      return false === n14;
    case 5:
      return isNaN(n14);
    case 6:
      return isNaN(n14) || 1 > n14;
  }
  return false;
}
function b3(e10, n14, t18, r10, l12, a20, u6) {
  this.acceptsBooleans = 2 === n14 || 3 === n14 || 4 === n14;
  this.attributeName = r10;
  this.attributeNamespace = l12;
  this.mustUseProperty = t18;
  this.propertyName = e10;
  this.type = n14;
  this.sanitizeURL = a20;
  this.removeEmptyString = u6;
}
var k3 = {};
"children dangerouslySetInnerHTML defaultValue defaultChecked innerHTML suppressContentEditableWarning suppressHydrationWarning style".split(" ").forEach(function(e10) {
  k3[e10] = new b3(e10, 0, false, e10, null, false, false);
});
[["acceptCharset", "accept-charset"], ["className", "class"], ["htmlFor", "for"], ["httpEquiv", "http-equiv"]].forEach(function(e10) {
  var n14 = e10[0];
  k3[n14] = new b3(n14, 1, false, e10[1], null, false, false);
});
["contentEditable", "draggable", "spellCheck", "value"].forEach(function(e10) {
  k3[e10] = new b3(e10, 2, false, e10.toLowerCase(), null, false, false);
});
["autoReverse", "externalResourcesRequired", "focusable", "preserveAlpha"].forEach(function(e10) {
  k3[e10] = new b3(e10, 2, false, e10, null, false, false);
});
"allowFullScreen async autoFocus autoPlay controls default defer disabled disablePictureInPicture disableRemotePlayback formNoValidate hidden loop noModule noValidate open playsInline readOnly required reversed scoped seamless itemScope".split(" ").forEach(function(e10) {
  k3[e10] = new b3(e10, 3, false, e10.toLowerCase(), null, false, false);
});
["checked", "multiple", "muted", "selected"].forEach(function(e10) {
  k3[e10] = new b3(e10, 3, true, e10, null, false, false);
});
["capture", "download"].forEach(function(e10) {
  k3[e10] = new b3(e10, 4, false, e10, null, false, false);
});
["cols", "rows", "size", "span"].forEach(function(e10) {
  k3[e10] = new b3(e10, 6, false, e10, null, false, false);
});
["rowSpan", "start"].forEach(function(e10) {
  k3[e10] = new b3(e10, 5, false, e10.toLowerCase(), null, false, false);
});
var w2 = /[\-:]([a-z])/g;
function S2(e10) {
  return e10[1].toUpperCase();
}
"accent-height alignment-baseline arabic-form baseline-shift cap-height clip-path clip-rule color-interpolation color-interpolation-filters color-profile color-rendering dominant-baseline enable-background fill-opacity fill-rule flood-color flood-opacity font-family font-size font-size-adjust font-stretch font-style font-variant font-weight glyph-name glyph-orientation-horizontal glyph-orientation-vertical horiz-adv-x horiz-origin-x image-rendering letter-spacing lighting-color marker-end marker-mid marker-start overline-position overline-thickness paint-order panose-1 pointer-events rendering-intent shape-rendering stop-color stop-opacity strikethrough-position strikethrough-thickness stroke-dasharray stroke-dashoffset stroke-linecap stroke-linejoin stroke-miterlimit stroke-opacity stroke-width text-anchor text-decoration text-rendering underline-position underline-thickness unicode-bidi unicode-range units-per-em v-alphabetic v-hanging v-ideographic v-mathematical vector-effect vert-adv-y vert-origin-x vert-origin-y word-spacing writing-mode xmlns:xlink x-height".split(" ").forEach(function(e10) {
  var n14 = e10.replace(w2, S2);
  k3[n14] = new b3(n14, 1, false, e10, null, false, false);
});
"xlink:actuate xlink:arcrole xlink:role xlink:show xlink:title xlink:type".split(" ").forEach(function(e10) {
  var n14 = e10.replace(w2, S2);
  k3[n14] = new b3(n14, 1, false, e10, "http://www.w3.org/1999/xlink", false, false);
});
["xml:base", "xml:lang", "xml:space"].forEach(function(e10) {
  var n14 = e10.replace(w2, S2);
  k3[n14] = new b3(n14, 1, false, e10, "http://www.w3.org/XML/1998/namespace", false, false);
});
["tabIndex", "crossOrigin"].forEach(function(e10) {
  k3[e10] = new b3(e10, 1, false, e10.toLowerCase(), null, false, false);
});
k3.xlinkHref = new b3("xlinkHref", 1, false, "xlink:href", "http://www.w3.org/1999/xlink", true, false);
["src", "href", "action", "formAction"].forEach(function(e10) {
  k3[e10] = new b3(e10, 1, false, e10.toLowerCase(), null, true, true);
});
function x3(e10, n14, t18, r10) {
  var l12 = k3.hasOwnProperty(n14) ? k3[n14] : null;
  if (null !== l12 ? 0 !== l12.type : r10 || !(2 < n14.length) || "o" !== n14[0] && "O" !== n14[0] || "n" !== n14[1] && "N" !== n14[1]) y3(n14, t18, l12, r10) && (t18 = null), r10 || null === l12 ? g3(n14) && (null === t18 ? e10.removeAttribute(n14) : e10.setAttribute(n14, "" + t18)) : l12.mustUseProperty ? e10[l12.propertyName] = null === t18 ? 3 === l12.type ? false : "" : t18 : (n14 = l12.attributeName, r10 = l12.attributeNamespace, null === t18 ? e10.removeAttribute(n14) : (l12 = l12.type, t18 = 3 === l12 || 4 === l12 && true === t18 ? "" : "" + t18, r10 ? e10.setAttributeNS(r10, n14, t18) : e10.setAttribute(n14, t18)));
}
var E2 = l3.__SECRET_INTERNALS_DO_NOT_USE_OR_YOU_WILL_BE_FIRED;
var C2 = Symbol.for("react.element");
var N2 = Symbol.for("react.portal");
var _3 = Symbol.for("react.fragment");
var z2 = Symbol.for("react.strict_mode");
var P2 = Symbol.for("react.profiler");
var L2 = Symbol.for("react.provider");
var T2 = Symbol.for("react.context");
var M2 = Symbol.for("react.forward_ref");
var F2 = Symbol.for("react.suspense");
var R2 = Symbol.for("react.suspense_list");
var D2 = Symbol.for("react.memo");
var O2 = Symbol.for("react.lazy");
var I2 = Symbol.for("react.offscreen");
var U2 = Symbol.iterator;
function V2(e10) {
  if (null === e10 || "object" !== typeof e10) return null;
  e10 = U2 && e10[U2] || e10["@@iterator"];
  return "function" === typeof e10 ? e10 : null;
}
var A2 = Object.assign;
var B2;
function H2(e10) {
  if (void 0 === B2) try {
    throw Error();
  } catch (e11) {
    var n14 = e11.stack.trim().match(/\n( *(at )?)/);
    B2 = n14 && n14[1] || "";
  }
  return "\n" + B2 + e10;
}
var W2 = false;
function Q2(e10, n14) {
  if (!e10 || W2) return "";
  W2 = true;
  var t18 = Error.prepareStackTrace;
  Error.prepareStackTrace = void 0;
  try {
    if (n14) if (n14 = function() {
      throw Error();
    }, Object.defineProperty(n14.prototype, "props", { set: function() {
      throw Error();
    } }), "object" === typeof Reflect && Reflect.construct) {
      try {
        Reflect.construct(n14, []);
      } catch (e11) {
        var r10 = e11;
      }
      Reflect.construct(e10, [], n14);
    } else {
      try {
        n14.call();
      } catch (e11) {
        r10 = e11;
      }
      e10.call(n14.prototype);
    }
    else {
      try {
        throw Error();
      } catch (e11) {
        r10 = e11;
      }
      e10();
    }
  } catch (n15) {
    if (n15 && r10 && "string" === typeof n15.stack) {
      for (var l12 = n15.stack.split("\n"), a20 = r10.stack.split("\n"), u6 = l12.length - 1, o21 = a20.length - 1; 1 <= u6 && 0 <= o21 && l12[u6] !== a20[o21]; ) o21--;
      for (; 1 <= u6 && 0 <= o21; u6--, o21--) if (l12[u6] !== a20[o21]) {
        if (1 !== u6 || 1 !== o21) {
          do {
            if (u6--, o21--, 0 > o21 || l12[u6] !== a20[o21]) {
              var i19 = "\n" + l12[u6].replace(" at new ", " at ");
              e10.displayName && i19.includes("<anonymous>") && (i19 = i19.replace("<anonymous>", e10.displayName));
              return i19;
            }
          } while (1 <= u6 && 0 <= o21);
        }
        break;
      }
    }
  } finally {
    W2 = false, Error.prepareStackTrace = t18;
  }
  return (e10 = e10 ? e10.displayName || e10.name : "") ? H2(e10) : "";
}
function j2(e10) {
  switch (e10.tag) {
    case 5:
      return H2(e10.type);
    case 16:
      return H2("Lazy");
    case 13:
      return H2("Suspense");
    case 19:
      return H2("SuspenseList");
    case 0:
    case 2:
    case 15:
      return e10 = Q2(e10.type, false), e10;
    case 11:
      return e10 = Q2(e10.type.render, false), e10;
    case 1:
      return e10 = Q2(e10.type, true), e10;
    default:
      return "";
  }
}
function $2(e10) {
  if (null == e10) return null;
  if ("function" === typeof e10) return e10.displayName || e10.name || null;
  if ("string" === typeof e10) return e10;
  switch (e10) {
    case _3:
      return "Fragment";
    case N2:
      return "Portal";
    case P2:
      return "Profiler";
    case z2:
      return "StrictMode";
    case F2:
      return "Suspense";
    case R2:
      return "SuspenseList";
  }
  if ("object" === typeof e10) switch (e10.$$typeof) {
    case T2:
      return (e10.displayName || "Context") + ".Consumer";
    case L2:
      return (e10._context.displayName || "Context") + ".Provider";
    case M2:
      var n14 = e10.render;
      e10 = e10.displayName;
      e10 || (e10 = n14.displayName || n14.name || "", e10 = "" !== e10 ? "ForwardRef(" + e10 + ")" : "ForwardRef");
      return e10;
    case D2:
      return n14 = e10.displayName || null, null !== n14 ? n14 : $2(e10.type) || "Memo";
    case O2:
      n14 = e10._payload;
      e10 = e10._init;
      try {
        return $2(e10(n14));
      } catch (e11) {
      }
  }
  return null;
}
function K2(e10) {
  var n14 = e10.type;
  switch (e10.tag) {
    case 24:
      return "Cache";
    case 9:
      return (n14.displayName || "Context") + ".Consumer";
    case 10:
      return (n14._context.displayName || "Context") + ".Provider";
    case 18:
      return "DehydratedFragment";
    case 11:
      return e10 = n14.render, e10 = e10.displayName || e10.name || "", n14.displayName || ("" !== e10 ? "ForwardRef(" + e10 + ")" : "ForwardRef");
    case 7:
      return "Fragment";
    case 5:
      return n14;
    case 4:
      return "Portal";
    case 3:
      return "Root";
    case 6:
      return "Text";
    case 16:
      return $2(n14);
    case 8:
      return n14 === z2 ? "StrictMode" : "Mode";
    case 22:
      return "Offscreen";
    case 12:
      return "Profiler";
    case 21:
      return "Scope";
    case 13:
      return "Suspense";
    case 19:
      return "SuspenseList";
    case 25:
      return "TracingMarker";
    case 1:
    case 0:
    case 17:
    case 2:
    case 14:
    case 15:
      if ("function" === typeof n14) return n14.displayName || n14.name || null;
      if ("string" === typeof n14) return n14;
  }
  return null;
}
function q2(e10) {
  switch (typeof e10) {
    case "boolean":
    case "number":
    case "string":
    case "undefined":
      return e10;
    case "object":
      return e10;
    default:
      return "";
  }
}
function Y2(e10) {
  var n14 = e10.type;
  return (e10 = e10.nodeName) && "input" === e10.toLowerCase() && ("checkbox" === n14 || "radio" === n14);
}
function X2(e10) {
  var n14 = Y2(e10) ? "checked" : "value", t18 = Object.getOwnPropertyDescriptor(e10.constructor.prototype, n14), r10 = "" + e10[n14];
  if (!e10.hasOwnProperty(n14) && "undefined" !== typeof t18 && "function" === typeof t18.get && "function" === typeof t18.set) {
    var l12 = t18.get, a20 = t18.set;
    Object.defineProperty(e10, n14, { configurable: true, get: function() {
      return l12.call(this);
    }, set: function(e11) {
      r10 = "" + e11;
      a20.call(this, e11);
    } });
    Object.defineProperty(e10, n14, { enumerable: t18.enumerable });
    return { getValue: function() {
      return r10;
    }, setValue: function(e11) {
      r10 = "" + e11;
    }, stopTracking: function() {
      e10._valueTracker = null;
      delete e10[n14];
    } };
  }
}
function G2(e10) {
  e10._valueTracker || (e10._valueTracker = X2(e10));
}
function Z2(e10) {
  if (!e10) return false;
  var n14 = e10._valueTracker;
  if (!n14) return true;
  var t18 = n14.getValue();
  var r10 = "";
  e10 && (r10 = Y2(e10) ? e10.checked ? "true" : "false" : e10.value);
  e10 = r10;
  return e10 !== t18 ? (n14.setValue(e10), true) : false;
}
function J2(e10) {
  e10 = e10 || ("undefined" !== typeof document ? document : void 0);
  if ("undefined" === typeof e10) return null;
  try {
    return e10.activeElement || e10.body;
  } catch (n14) {
    return e10.body;
  }
}
function ee2(e10, n14) {
  var t18 = n14.checked;
  return A2({}, n14, { defaultChecked: void 0, defaultValue: void 0, value: void 0, checked: null != t18 ? t18 : e10._wrapperState.initialChecked });
}
function ne2(e10, n14) {
  var t18 = null == n14.defaultValue ? "" : n14.defaultValue, r10 = null != n14.checked ? n14.checked : n14.defaultChecked;
  t18 = q2(null != n14.value ? n14.value : t18);
  e10._wrapperState = { initialChecked: r10, initialValue: t18, controlled: "checkbox" === n14.type || "radio" === n14.type ? null != n14.checked : null != n14.value };
}
function te2(e10, n14) {
  n14 = n14.checked;
  null != n14 && x3(e10, "checked", n14, false);
}
function re2(e10, n14) {
  te2(e10, n14);
  var t18 = q2(n14.value), r10 = n14.type;
  if (null != t18) if ("number" === r10) {
    if (0 === t18 && "" === e10.value || e10.value != t18) e10.value = "" + t18;
  } else e10.value !== "" + t18 && (e10.value = "" + t18);
  else if ("submit" === r10 || "reset" === r10) {
    e10.removeAttribute("value");
    return;
  }
  n14.hasOwnProperty("value") ? ae2(e10, n14.type, t18) : n14.hasOwnProperty("defaultValue") && ae2(e10, n14.type, q2(n14.defaultValue));
  null == n14.checked && null != n14.defaultChecked && (e10.defaultChecked = !!n14.defaultChecked);
}
function le2(e10, n14, t18) {
  if (n14.hasOwnProperty("value") || n14.hasOwnProperty("defaultValue")) {
    var r10 = n14.type;
    if (!("submit" !== r10 && "reset" !== r10 || void 0 !== n14.value && null !== n14.value)) return;
    n14 = "" + e10._wrapperState.initialValue;
    t18 || n14 === e10.value || (e10.value = n14);
    e10.defaultValue = n14;
  }
  t18 = e10.name;
  "" !== t18 && (e10.name = "");
  e10.defaultChecked = !!e10._wrapperState.initialChecked;
  "" !== t18 && (e10.name = t18);
}
function ae2(e10, n14, t18) {
  if ("number" !== n14 || J2(e10.ownerDocument) !== e10) null == t18 ? e10.defaultValue = "" + e10._wrapperState.initialValue : e10.defaultValue !== "" + t18 && (e10.defaultValue = "" + t18);
}
var ue2 = Array.isArray;
function oe2(e10, n14, t18, r10) {
  e10 = e10.options;
  if (n14) {
    n14 = {};
    for (var l12 = 0; l12 < t18.length; l12++) n14["$" + t18[l12]] = true;
    for (t18 = 0; t18 < e10.length; t18++) l12 = n14.hasOwnProperty("$" + e10[t18].value), e10[t18].selected !== l12 && (e10[t18].selected = l12), l12 && r10 && (e10[t18].defaultSelected = true);
  } else {
    t18 = "" + q2(t18);
    n14 = null;
    for (l12 = 0; l12 < e10.length; l12++) {
      if (e10[l12].value === t18) {
        e10[l12].selected = true;
        r10 && (e10[l12].defaultSelected = true);
        return;
      }
      null !== n14 || e10[l12].disabled || (n14 = e10[l12]);
    }
    null !== n14 && (n14.selected = true);
  }
}
function ie2(e10, n14) {
  if (null != n14.dangerouslySetInnerHTML) throw Error(u3(91));
  return A2({}, n14, { value: void 0, defaultValue: void 0, children: "" + e10._wrapperState.initialValue });
}
function se2(e10, n14) {
  var t18 = n14.value;
  if (null == t18) {
    t18 = n14.children;
    n14 = n14.defaultValue;
    if (null != t18) {
      if (null != n14) throw Error(u3(92));
      if (ue2(t18)) {
        if (1 < t18.length) throw Error(u3(93));
        t18 = t18[0];
      }
      n14 = t18;
    }
    null == n14 && (n14 = "");
    t18 = n14;
  }
  e10._wrapperState = { initialValue: q2(t18) };
}
function ce2(e10, n14) {
  var t18 = q2(n14.value), r10 = q2(n14.defaultValue);
  null != t18 && (t18 = "" + t18, t18 !== e10.value && (e10.value = t18), null == n14.defaultValue && e10.defaultValue !== t18 && (e10.defaultValue = t18));
  null != r10 && (e10.defaultValue = "" + r10);
}
function fe2(e10) {
  var n14 = e10.textContent;
  n14 === e10._wrapperState.initialValue && "" !== n14 && null !== n14 && (e10.value = n14);
}
function de2(e10) {
  switch (e10) {
    case "svg":
      return "http://www.w3.org/2000/svg";
    case "math":
      return "http://www.w3.org/1998/Math/MathML";
    default:
      return "http://www.w3.org/1999/xhtml";
  }
}
function pe2(e10, n14) {
  return null == e10 || "http://www.w3.org/1999/xhtml" === e10 ? de2(n14) : "http://www.w3.org/2000/svg" === e10 && "foreignObject" === n14 ? "http://www.w3.org/1999/xhtml" : e10;
}
var he2;
var me2 = function(e10) {
  return "undefined" !== typeof MSApp && MSApp.execUnsafeLocalFunction ? function(n14, t18, r10, l12) {
    MSApp.execUnsafeLocalFunction(function() {
      return e10(n14, t18, r10, l12);
    });
  } : e10;
}(function(e10, n14) {
  if ("http://www.w3.org/2000/svg" !== e10.namespaceURI || "innerHTML" in e10) e10.innerHTML = n14;
  else {
    he2 = he2 || document.createElement("div");
    he2.innerHTML = "<svg>" + n14.valueOf().toString() + "</svg>";
    for (n14 = he2.firstChild; e10.firstChild; ) e10.removeChild(e10.firstChild);
    for (; n14.firstChild; ) e10.appendChild(n14.firstChild);
  }
});
function ge(e10, n14) {
  if (n14) {
    var t18 = e10.firstChild;
    if (t18 && t18 === e10.lastChild && 3 === t18.nodeType) {
      t18.nodeValue = n14;
      return;
    }
  }
  e10.textContent = n14;
}
var ve = { animationIterationCount: true, aspectRatio: true, borderImageOutset: true, borderImageSlice: true, borderImageWidth: true, boxFlex: true, boxFlexGroup: true, boxOrdinalGroup: true, columnCount: true, columns: true, flex: true, flexGrow: true, flexPositive: true, flexShrink: true, flexNegative: true, flexOrder: true, gridArea: true, gridRow: true, gridRowEnd: true, gridRowSpan: true, gridRowStart: true, gridColumn: true, gridColumnEnd: true, gridColumnSpan: true, gridColumnStart: true, fontWeight: true, lineClamp: true, lineHeight: true, opacity: true, order: true, orphans: true, tabSize: true, widows: true, zIndex: true, zoom: true, fillOpacity: true, floodOpacity: true, stopOpacity: true, strokeDasharray: true, strokeDashoffset: true, strokeMiterlimit: true, strokeOpacity: true, strokeWidth: true };
var ye2 = ["Webkit", "ms", "Moz", "O"];
Object.keys(ve).forEach(function(e10) {
  ye2.forEach(function(n14) {
    n14 = n14 + e10.charAt(0).toUpperCase() + e10.substring(1);
    ve[n14] = ve[e10];
  });
});
function be(e10, n14, t18) {
  return null == n14 || "boolean" === typeof n14 || "" === n14 ? "" : t18 || "number" !== typeof n14 || 0 === n14 || ve.hasOwnProperty(e10) && ve[e10] ? ("" + n14).trim() : n14 + "px";
}
function ke(e10, n14) {
  e10 = e10.style;
  for (var t18 in n14) if (n14.hasOwnProperty(t18)) {
    var r10 = 0 === t18.indexOf("--"), l12 = be(t18, n14[t18], r10);
    "float" === t18 && (t18 = "cssFloat");
    r10 ? e10.setProperty(t18, l12) : e10[t18] = l12;
  }
}
var we = A2({ menuitem: true }, { area: true, base: true, br: true, col: true, embed: true, hr: true, img: true, input: true, keygen: true, link: true, meta: true, param: true, source: true, track: true, wbr: true });
function Se(e10, n14) {
  if (n14) {
    if (we[e10] && (null != n14.children || null != n14.dangerouslySetInnerHTML)) throw Error(u3(137, e10));
    if (null != n14.dangerouslySetInnerHTML) {
      if (null != n14.children) throw Error(u3(60));
      if ("object" !== typeof n14.dangerouslySetInnerHTML || !("__html" in n14.dangerouslySetInnerHTML)) throw Error(u3(61));
    }
    if (null != n14.style && "object" !== typeof n14.style) throw Error(u3(62));
  }
}
function xe2(e10, n14) {
  if (-1 === e10.indexOf("-")) return "string" === typeof n14.is;
  switch (e10) {
    case "annotation-xml":
    case "color-profile":
    case "font-face":
    case "font-face-src":
    case "font-face-uri":
    case "font-face-format":
    case "font-face-name":
    case "missing-glyph":
      return false;
    default:
      return true;
  }
}
var Ee = null;
function Ce(e10) {
  e10 = e10.target || e10.srcElement || window;
  e10.correspondingUseElement && (e10 = e10.correspondingUseElement);
  return 3 === e10.nodeType ? e10.parentNode : e10;
}
var Ne = null;
var _e2 = null;
var ze = null;
function Pe(e10) {
  if (e10 = Hl(e10)) {
    if ("function" !== typeof Ne) throw Error(u3(280));
    var n14 = e10.stateNode;
    n14 && (n14 = Ql(n14), Ne(e10.stateNode, e10.type, n14));
  }
}
function Le(e10) {
  _e2 ? ze ? ze.push(e10) : ze = [e10] : _e2 = e10;
}
function Te() {
  if (_e2) {
    var e10 = _e2, n14 = ze;
    ze = _e2 = null;
    Pe(e10);
    if (n14) for (e10 = 0; e10 < n14.length; e10++) Pe(n14[e10]);
  }
}
function Me(e10, n14) {
  return e10(n14);
}
function Fe() {
}
var Re = false;
function De(e10, n14, t18) {
  if (Re) return e10(n14, t18);
  Re = true;
  try {
    return Me(e10, n14, t18);
  } finally {
    if (Re = false, null !== _e2 || null !== ze) Fe(), Te();
  }
}
function Oe(e10, n14) {
  var t18 = e10.stateNode;
  if (null === t18) return null;
  var r10 = Ql(t18);
  if (null === r10) return null;
  t18 = r10[n14];
  e: switch (n14) {
    case "onClick":
    case "onClickCapture":
    case "onDoubleClick":
    case "onDoubleClickCapture":
    case "onMouseDown":
    case "onMouseDownCapture":
    case "onMouseMove":
    case "onMouseMoveCapture":
    case "onMouseUp":
    case "onMouseUpCapture":
    case "onMouseEnter":
      (r10 = !r10.disabled) || (e10 = e10.type, r10 = !("button" === e10 || "input" === e10 || "select" === e10 || "textarea" === e10));
      e10 = !r10;
      break e;
    default:
      e10 = false;
  }
  if (e10) return null;
  if (t18 && "function" !== typeof t18) throw Error(u3(231, n14, typeof t18));
  return t18;
}
var Ie = false;
if (f3) try {
  Ue = {};
  Object.defineProperty(Ue, "passive", { get: function() {
    Ie = true;
  } });
  window.addEventListener("test", Ue, Ue);
  window.removeEventListener("test", Ue, Ue);
} catch (e10) {
  Ie = false;
}
var Ue;
function Ve(e10, n14, t18, r10, l12, a20, u6, o21, i19) {
  var s19 = Array.prototype.slice.call(arguments, 3);
  try {
    n14.apply(t18, s19);
  } catch (e11) {
    this.onError(e11);
  }
}
var Ae = false;
var Be = null;
var He = false;
var We = null;
var Qe = { onError: function(e10) {
  Ae = true;
  Be = e10;
} };
function je(e10, n14, t18, r10, l12, a20, u6, o21, i19) {
  Ae = false;
  Be = null;
  Ve.apply(Qe, arguments);
}
function $e(e10, n14, t18, r10, l12, a20, o21, i19, s19) {
  je.apply(this, arguments);
  if (Ae) {
    if (Ae) {
      var c16 = Be;
      Ae = false;
      Be = null;
    } else throw Error(u3(198));
    He || (He = true, We = c16);
  }
}
function Ke(e10) {
  var n14 = e10, t18 = e10;
  if (e10.alternate) for (; n14.return; ) n14 = n14.return;
  else {
    e10 = n14;
    do {
      n14 = e10, 0 !== (n14.flags & 4098) && (t18 = n14.return), e10 = n14.return;
    } while (e10);
  }
  return 3 === n14.tag ? t18 : null;
}
function qe(e10) {
  if (13 === e10.tag) {
    var n14 = e10.memoizedState;
    null === n14 && (e10 = e10.alternate, null !== e10 && (n14 = e10.memoizedState));
    if (null !== n14) return n14.dehydrated;
  }
  return null;
}
function Ye(e10) {
  if (Ke(e10) !== e10) throw Error(u3(188));
}
function Xe(e10) {
  var n14 = e10.alternate;
  if (!n14) {
    n14 = Ke(e10);
    if (null === n14) throw Error(u3(188));
    return n14 !== e10 ? null : e10;
  }
  for (var t18 = e10, r10 = n14; ; ) {
    var l12 = t18.return;
    if (null === l12) break;
    var a20 = l12.alternate;
    if (null === a20) {
      r10 = l12.return;
      if (null !== r10) {
        t18 = r10;
        continue;
      }
      break;
    }
    if (l12.child === a20.child) {
      for (a20 = l12.child; a20; ) {
        if (a20 === t18) return Ye(l12), e10;
        if (a20 === r10) return Ye(l12), n14;
        a20 = a20.sibling;
      }
      throw Error(u3(188));
    }
    if (t18.return !== r10.return) t18 = l12, r10 = a20;
    else {
      for (var o21 = false, i19 = l12.child; i19; ) {
        if (i19 === t18) {
          o21 = true;
          t18 = l12;
          r10 = a20;
          break;
        }
        if (i19 === r10) {
          o21 = true;
          r10 = l12;
          t18 = a20;
          break;
        }
        i19 = i19.sibling;
      }
      if (!o21) {
        for (i19 = a20.child; i19; ) {
          if (i19 === t18) {
            o21 = true;
            t18 = a20;
            r10 = l12;
            break;
          }
          if (i19 === r10) {
            o21 = true;
            r10 = a20;
            t18 = l12;
            break;
          }
          i19 = i19.sibling;
        }
        if (!o21) throw Error(u3(189));
      }
    }
    if (t18.alternate !== r10) throw Error(u3(190));
  }
  if (3 !== t18.tag) throw Error(u3(188));
  return t18.stateNode.current === t18 ? e10 : n14;
}
function Ge(e10) {
  e10 = Xe(e10);
  return null !== e10 ? Ze(e10) : null;
}
function Ze(e10) {
  if (5 === e10.tag || 6 === e10.tag) return e10;
  for (e10 = e10.child; null !== e10; ) {
    var n14 = Ze(e10);
    if (null !== n14) return n14;
    e10 = e10.sibling;
  }
  return null;
}
var Je = a3.unstable_scheduleCallback;
var en = a3.unstable_cancelCallback;
var nn = a3.unstable_shouldYield;
var tn = a3.unstable_requestPaint;
var rn = a3.unstable_now;
var ln = a3.unstable_getCurrentPriorityLevel;
var an = a3.unstable_ImmediatePriority;
var un = a3.unstable_UserBlockingPriority;
var on = a3.unstable_NormalPriority;
var sn = a3.unstable_LowPriority;
var cn = a3.unstable_IdlePriority;
var fn = null;
var dn = null;
function pn(e10) {
  if (dn && "function" === typeof dn.onCommitFiberRoot) try {
    dn.onCommitFiberRoot(fn, e10, void 0, 128 === (e10.current.flags & 128));
  } catch (e11) {
  }
}
var hn = Math.clz32 ? Math.clz32 : vn;
var mn = Math.log;
var gn = Math.LN2;
function vn(e10) {
  e10 >>>= 0;
  return 0 === e10 ? 32 : 31 - (mn(e10) / gn | 0) | 0;
}
var yn = 64;
var bn = 4194304;
function kn(e10) {
  switch (e10 & -e10) {
    case 1:
      return 1;
    case 2:
      return 2;
    case 4:
      return 4;
    case 8:
      return 8;
    case 16:
      return 16;
    case 32:
      return 32;
    case 64:
    case 128:
    case 256:
    case 512:
    case 1024:
    case 2048:
    case 4096:
    case 8192:
    case 16384:
    case 32768:
    case 65536:
    case 131072:
    case 262144:
    case 524288:
    case 1048576:
    case 2097152:
      return e10 & 4194240;
    case 4194304:
    case 8388608:
    case 16777216:
    case 33554432:
    case 67108864:
      return e10 & 130023424;
    case 134217728:
      return 134217728;
    case 268435456:
      return 268435456;
    case 536870912:
      return 536870912;
    case 1073741824:
      return 1073741824;
    default:
      return e10;
  }
}
function wn(e10, n14) {
  var t18 = e10.pendingLanes;
  if (0 === t18) return 0;
  var r10 = 0, l12 = e10.suspendedLanes, a20 = e10.pingedLanes, u6 = t18 & 268435455;
  if (0 !== u6) {
    var o21 = u6 & ~l12;
    0 !== o21 ? r10 = kn(o21) : (a20 &= u6, 0 !== a20 && (r10 = kn(a20)));
  } else u6 = t18 & ~l12, 0 !== u6 ? r10 = kn(u6) : 0 !== a20 && (r10 = kn(a20));
  if (0 === r10) return 0;
  if (0 !== n14 && n14 !== r10 && 0 === (n14 & l12) && (l12 = r10 & -r10, a20 = n14 & -n14, l12 >= a20 || 16 === l12 && 0 !== (a20 & 4194240))) return n14;
  0 !== (r10 & 4) && (r10 |= t18 & 16);
  n14 = e10.entangledLanes;
  if (0 !== n14) for (e10 = e10.entanglements, n14 &= r10; 0 < n14; ) t18 = 31 - hn(n14), l12 = 1 << t18, r10 |= e10[t18], n14 &= ~l12;
  return r10;
}
function Sn(e10, n14) {
  switch (e10) {
    case 1:
    case 2:
    case 4:
      return n14 + 250;
    case 8:
    case 16:
    case 32:
    case 64:
    case 128:
    case 256:
    case 512:
    case 1024:
    case 2048:
    case 4096:
    case 8192:
    case 16384:
    case 32768:
    case 65536:
    case 131072:
    case 262144:
    case 524288:
    case 1048576:
    case 2097152:
      return n14 + 5e3;
    case 4194304:
    case 8388608:
    case 16777216:
    case 33554432:
    case 67108864:
      return -1;
    case 134217728:
    case 268435456:
    case 536870912:
    case 1073741824:
      return -1;
    default:
      return -1;
  }
}
function xn(e10, n14) {
  for (var t18 = e10.suspendedLanes, r10 = e10.pingedLanes, l12 = e10.expirationTimes, a20 = e10.pendingLanes; 0 < a20; ) {
    var u6 = 31 - hn(a20), o21 = 1 << u6, i19 = l12[u6];
    if (-1 === i19) {
      if (0 === (o21 & t18) || 0 !== (o21 & r10)) l12[u6] = Sn(o21, n14);
    } else i19 <= n14 && (e10.expiredLanes |= o21);
    a20 &= ~o21;
  }
}
function En(e10) {
  e10 = e10.pendingLanes & -1073741825;
  return 0 !== e10 ? e10 : e10 & 1073741824 ? 1073741824 : 0;
}
function Cn() {
  var e10 = yn;
  yn <<= 1;
  0 === (yn & 4194240) && (yn = 64);
  return e10;
}
function Nn(e10) {
  for (var n14 = [], t18 = 0; 31 > t18; t18++) n14.push(e10);
  return n14;
}
function _n(e10, n14, t18) {
  e10.pendingLanes |= n14;
  536870912 !== n14 && (e10.suspendedLanes = 0, e10.pingedLanes = 0);
  e10 = e10.eventTimes;
  n14 = 31 - hn(n14);
  e10[n14] = t18;
}
function zn(e10, n14) {
  var t18 = e10.pendingLanes & ~n14;
  e10.pendingLanes = n14;
  e10.suspendedLanes = 0;
  e10.pingedLanes = 0;
  e10.expiredLanes &= n14;
  e10.mutableReadLanes &= n14;
  e10.entangledLanes &= n14;
  n14 = e10.entanglements;
  var r10 = e10.eventTimes;
  for (e10 = e10.expirationTimes; 0 < t18; ) {
    var l12 = 31 - hn(t18), a20 = 1 << l12;
    n14[l12] = 0;
    r10[l12] = -1;
    e10[l12] = -1;
    t18 &= ~a20;
  }
}
function Pn(e10, n14) {
  var t18 = e10.entangledLanes |= n14;
  for (e10 = e10.entanglements; t18; ) {
    var r10 = 31 - hn(t18), l12 = 1 << r10;
    l12 & n14 | e10[r10] & n14 && (e10[r10] |= n14);
    t18 &= ~l12;
  }
}
var Ln = 0;
function Tn(e10) {
  e10 &= -e10;
  return 1 < e10 ? 4 < e10 ? 0 !== (e10 & 268435455) ? 16 : 536870912 : 4 : 1;
}
var Mn;
var Fn;
var Rn;
var Dn;
var On;
var In = false;
var Un = [];
var Vn = null;
var An = null;
var Bn = null;
var Hn = /* @__PURE__ */ new Map();
var Wn = /* @__PURE__ */ new Map();
var Qn = [];
var jn = "mousedown mouseup touchcancel touchend touchstart auxclick dblclick pointercancel pointerdown pointerup dragend dragstart drop compositionend compositionstart keydown keypress keyup input textInput copy cut paste click change contextmenu reset submit".split(" ");
function $n(e10, n14) {
  switch (e10) {
    case "focusin":
    case "focusout":
      Vn = null;
      break;
    case "dragenter":
    case "dragleave":
      An = null;
      break;
    case "mouseover":
    case "mouseout":
      Bn = null;
      break;
    case "pointerover":
    case "pointerout":
      Hn.delete(n14.pointerId);
      break;
    case "gotpointercapture":
    case "lostpointercapture":
      Wn.delete(n14.pointerId);
  }
}
function Kn(e10, n14, t18, r10, l12, a20) {
  if (null === e10 || e10.nativeEvent !== a20) return e10 = { blockedOn: n14, domEventName: t18, eventSystemFlags: r10, nativeEvent: a20, targetContainers: [l12] }, null !== n14 && (n14 = Hl(n14), null !== n14 && Fn(n14)), e10;
  e10.eventSystemFlags |= r10;
  n14 = e10.targetContainers;
  null !== l12 && -1 === n14.indexOf(l12) && n14.push(l12);
  return e10;
}
function qn(e10, n14, t18, r10, l12) {
  switch (n14) {
    case "focusin":
      return Vn = Kn(Vn, e10, n14, t18, r10, l12), true;
    case "dragenter":
      return An = Kn(An, e10, n14, t18, r10, l12), true;
    case "mouseover":
      return Bn = Kn(Bn, e10, n14, t18, r10, l12), true;
    case "pointerover":
      var a20 = l12.pointerId;
      Hn.set(a20, Kn(Hn.get(a20) || null, e10, n14, t18, r10, l12));
      return true;
    case "gotpointercapture":
      return a20 = l12.pointerId, Wn.set(a20, Kn(Wn.get(a20) || null, e10, n14, t18, r10, l12)), true;
  }
  return false;
}
function Yn(e10) {
  var n14 = Bl(e10.target);
  if (null !== n14) {
    var t18 = Ke(n14);
    if (null !== t18) {
      if (n14 = t18.tag, 13 === n14) {
        if (n14 = qe(t18), null !== n14) {
          e10.blockedOn = n14;
          On(e10.priority, function() {
            Rn(t18);
          });
          return;
        }
      } else if (3 === n14 && t18.stateNode.current.memoizedState.isDehydrated) {
        e10.blockedOn = 3 === t18.tag ? t18.stateNode.containerInfo : null;
        return;
      }
    }
  }
  e10.blockedOn = null;
}
function Xn(e10) {
  if (null !== e10.blockedOn) return false;
  for (var n14 = e10.targetContainers; 0 < n14.length; ) {
    var t18 = ot(e10.domEventName, e10.eventSystemFlags, n14[0], e10.nativeEvent);
    if (null === t18) {
      t18 = e10.nativeEvent;
      var r10 = new t18.constructor(t18.type, t18);
      Ee = r10;
      t18.target.dispatchEvent(r10);
      Ee = null;
    } else return n14 = Hl(t18), null !== n14 && Fn(n14), e10.blockedOn = t18, false;
    n14.shift();
  }
  return true;
}
function Gn(e10, n14, t18) {
  Xn(e10) && t18.delete(n14);
}
function Zn() {
  In = false;
  null !== Vn && Xn(Vn) && (Vn = null);
  null !== An && Xn(An) && (An = null);
  null !== Bn && Xn(Bn) && (Bn = null);
  Hn.forEach(Gn);
  Wn.forEach(Gn);
}
function Jn(e10, n14) {
  e10.blockedOn === n14 && (e10.blockedOn = null, In || (In = true, a3.unstable_scheduleCallback(a3.unstable_NormalPriority, Zn)));
}
function et(e10) {
  function n14(n15) {
    return Jn(n15, e10);
  }
  if (0 < Un.length) {
    Jn(Un[0], e10);
    for (var t18 = 1; t18 < Un.length; t18++) {
      var r10 = Un[t18];
      r10.blockedOn === e10 && (r10.blockedOn = null);
    }
  }
  null !== Vn && Jn(Vn, e10);
  null !== An && Jn(An, e10);
  null !== Bn && Jn(Bn, e10);
  Hn.forEach(n14);
  Wn.forEach(n14);
  for (t18 = 0; t18 < Qn.length; t18++) r10 = Qn[t18], r10.blockedOn === e10 && (r10.blockedOn = null);
  for (; 0 < Qn.length && (t18 = Qn[0], null === t18.blockedOn); ) Yn(t18), null === t18.blockedOn && Qn.shift();
}
var nt = E2.ReactCurrentBatchConfig;
var tt = true;
function rt(e10, n14, t18, r10) {
  var l12 = Ln, a20 = nt.transition;
  nt.transition = null;
  try {
    Ln = 1, at(e10, n14, t18, r10);
  } finally {
    Ln = l12, nt.transition = a20;
  }
}
function lt(e10, n14, t18, r10) {
  var l12 = Ln, a20 = nt.transition;
  nt.transition = null;
  try {
    Ln = 4, at(e10, n14, t18, r10);
  } finally {
    Ln = l12, nt.transition = a20;
  }
}
function at(e10, n14, t18, r10) {
  if (tt) {
    var l12 = ot(e10, n14, t18, r10);
    if (null === l12) pl(e10, n14, r10, ut, t18), $n(e10, r10);
    else if (qn(l12, e10, n14, t18, r10)) r10.stopPropagation();
    else if ($n(e10, r10), n14 & 4 && -1 < jn.indexOf(e10)) {
      for (; null !== l12; ) {
        var a20 = Hl(l12);
        null !== a20 && Mn(a20);
        a20 = ot(e10, n14, t18, r10);
        null === a20 && pl(e10, n14, r10, ut, t18);
        if (a20 === l12) break;
        l12 = a20;
      }
      null !== l12 && r10.stopPropagation();
    } else pl(e10, n14, r10, null, t18);
  }
}
var ut = null;
function ot(e10, n14, t18, r10) {
  ut = null;
  e10 = Ce(r10);
  e10 = Bl(e10);
  if (null !== e10) if (n14 = Ke(e10), null === n14) e10 = null;
  else if (t18 = n14.tag, 13 === t18) {
    e10 = qe(n14);
    if (null !== e10) return e10;
    e10 = null;
  } else if (3 === t18) {
    if (n14.stateNode.current.memoizedState.isDehydrated) return 3 === n14.tag ? n14.stateNode.containerInfo : null;
    e10 = null;
  } else n14 !== e10 && (e10 = null);
  ut = e10;
  return null;
}
function it(e10) {
  switch (e10) {
    case "cancel":
    case "click":
    case "close":
    case "contextmenu":
    case "copy":
    case "cut":
    case "auxclick":
    case "dblclick":
    case "dragend":
    case "dragstart":
    case "drop":
    case "focusin":
    case "focusout":
    case "input":
    case "invalid":
    case "keydown":
    case "keypress":
    case "keyup":
    case "mousedown":
    case "mouseup":
    case "paste":
    case "pause":
    case "play":
    case "pointercancel":
    case "pointerdown":
    case "pointerup":
    case "ratechange":
    case "reset":
    case "resize":
    case "seeked":
    case "submit":
    case "touchcancel":
    case "touchend":
    case "touchstart":
    case "volumechange":
    case "change":
    case "selectionchange":
    case "textInput":
    case "compositionstart":
    case "compositionend":
    case "compositionupdate":
    case "beforeblur":
    case "afterblur":
    case "beforeinput":
    case "blur":
    case "fullscreenchange":
    case "focus":
    case "hashchange":
    case "popstate":
    case "select":
    case "selectstart":
      return 1;
    case "drag":
    case "dragenter":
    case "dragexit":
    case "dragleave":
    case "dragover":
    case "mousemove":
    case "mouseout":
    case "mouseover":
    case "pointermove":
    case "pointerout":
    case "pointerover":
    case "scroll":
    case "toggle":
    case "touchmove":
    case "wheel":
    case "mouseenter":
    case "mouseleave":
    case "pointerenter":
    case "pointerleave":
      return 4;
    case "message":
      switch (ln()) {
        case an:
          return 1;
        case un:
          return 4;
        case on:
        case sn:
          return 16;
        case cn:
          return 536870912;
        default:
          return 16;
      }
    default:
      return 16;
  }
}
var st = null;
var ct = null;
var ft = null;
function dt() {
  if (ft) return ft;
  var e10, n14 = ct, t18 = n14.length, r10, l12 = "value" in st ? st.value : st.textContent, a20 = l12.length;
  for (e10 = 0; e10 < t18 && n14[e10] === l12[e10]; e10++) ;
  var u6 = t18 - e10;
  for (r10 = 1; r10 <= u6 && n14[t18 - r10] === l12[a20 - r10]; r10++) ;
  return ft = l12.slice(e10, 1 < r10 ? 1 - r10 : void 0);
}
function pt(e10) {
  var n14 = e10.keyCode;
  "charCode" in e10 ? (e10 = e10.charCode, 0 === e10 && 13 === n14 && (e10 = 13)) : e10 = n14;
  10 === e10 && (e10 = 13);
  return 32 <= e10 || 13 === e10 ? e10 : 0;
}
function ht() {
  return true;
}
function mt() {
  return false;
}
function gt(e10) {
  function n14(n15, t18, r10, l12, a20) {
    this._reactName = n15;
    this._targetInst = r10;
    this.type = t18;
    this.nativeEvent = l12;
    this.target = a20;
    this.currentTarget = null;
    for (var u6 in e10) e10.hasOwnProperty(u6) && (n15 = e10[u6], this[u6] = n15 ? n15(l12) : l12[u6]);
    this.isDefaultPrevented = (null != l12.defaultPrevented ? l12.defaultPrevented : false === l12.returnValue) ? ht : mt;
    this.isPropagationStopped = mt;
    return this;
  }
  A2(n14.prototype, { preventDefault: function() {
    this.defaultPrevented = true;
    var e11 = this.nativeEvent;
    e11 && (e11.preventDefault ? e11.preventDefault() : "unknown" !== typeof e11.returnValue && (e11.returnValue = false), this.isDefaultPrevented = ht);
  }, stopPropagation: function() {
    var e11 = this.nativeEvent;
    e11 && (e11.stopPropagation ? e11.stopPropagation() : "unknown" !== typeof e11.cancelBubble && (e11.cancelBubble = true), this.isPropagationStopped = ht);
  }, persist: function() {
  }, isPersistent: ht });
  return n14;
}
var vt = { eventPhase: 0, bubbles: 0, cancelable: 0, timeStamp: function(e10) {
  return e10.timeStamp || Date.now();
}, defaultPrevented: 0, isConfidenceed: 0 };
var yt = gt(vt);
var bt = A2({}, vt, { view: 0, detail: 0 });
var kt = gt(bt);
var wt;
var St;
var xt;
var Et = A2({}, bt, { screenX: 0, screenY: 0, clientX: 0, clientY: 0, pageX: 0, pageY: 0, ctrlKey: 0, shiftKey: 0, altKey: 0, metaKey: 0, getModifierState: At, button: 0, buttons: 0, relatedTarget: function(e10) {
  return void 0 === e10.relatedTarget ? e10.fromElement === e10.srcElement ? e10.toElement : e10.fromElement : e10.relatedTarget;
}, movementX: function(e10) {
  if ("movementX" in e10) return e10.movementX;
  e10 !== xt && (xt && "mousemove" === e10.type ? (wt = e10.screenX - xt.screenX, St = e10.screenY - xt.screenY) : St = wt = 0, xt = e10);
  return wt;
}, movementY: function(e10) {
  return "movementY" in e10 ? e10.movementY : St;
} });
var Ct = gt(Et);
var Nt = A2({}, Et, { dataTransfer: 0 });
var _t = gt(Nt);
var zt = A2({}, bt, { relatedTarget: 0 });
var Pt = gt(zt);
var Lt = A2({}, vt, { animationName: 0, elapsedTime: 0, pseudoElement: 0 });
var Tt = gt(Lt);
var Mt = A2({}, vt, { clipboardData: function(e10) {
  return "clipboardData" in e10 ? e10.clipboardData : window.clipboardData;
} });
var Ft = gt(Mt);
var Rt = A2({}, vt, { data: 0 });
var Dt = gt(Rt);
var Ot = { Esc: "Escape", Spacebar: " ", Left: "ArrowLeft", Up: "ArrowUp", Right: "ArrowRight", Down: "ArrowDown", Del: "Delete", Win: "OS", Menu: "ContextMenu", Apps: "ContextMenu", Scroll: "ScrollLock", MozPrintableKey: "Unidentified" };
var It = { 8: "Backspace", 9: "Tab", 12: "Clear", 13: "Enter", 16: "Shift", 17: "Control", 18: "Alt", 19: "Pause", 20: "CapsLock", 27: "Escape", 32: " ", 33: "PageUp", 34: "PageDown", 35: "End", 36: "Home", 37: "ArrowLeft", 38: "ArrowUp", 39: "ArrowRight", 40: "ArrowDown", 45: "Insert", 46: "Delete", 112: "F1", 113: "F2", 114: "F3", 115: "F4", 116: "F5", 117: "F6", 118: "F7", 119: "F8", 120: "F9", 121: "F10", 122: "F11", 123: "F12", 144: "NumLock", 145: "ScrollLock", 224: "Meta" };
var Ut = { Alt: "altKey", Control: "ctrlKey", Meta: "metaKey", Shift: "shiftKey" };
function Vt(e10) {
  var n14 = this.nativeEvent;
  return n14.getModifierState ? n14.getModifierState(e10) : (e10 = Ut[e10]) ? !!n14[e10] : false;
}
function At() {
  return Vt;
}
var Bt = A2({}, bt, { key: function(e10) {
  if (e10.key) {
    var n14 = Ot[e10.key] || e10.key;
    if ("Unidentified" !== n14) return n14;
  }
  return "keypress" === e10.type ? (e10 = pt(e10), 13 === e10 ? "Enter" : String.fromCharCode(e10)) : "keydown" === e10.type || "keyup" === e10.type ? It[e10.keyCode] || "Unidentified" : "";
}, code: 0, location: 0, ctrlKey: 0, shiftKey: 0, altKey: 0, metaKey: 0, repeat: 0, locale: 0, getModifierState: At, charCode: function(e10) {
  return "keypress" === e10.type ? pt(e10) : 0;
}, keyCode: function(e10) {
  return "keydown" === e10.type || "keyup" === e10.type ? e10.keyCode : 0;
}, which: function(e10) {
  return "keypress" === e10.type ? pt(e10) : "keydown" === e10.type || "keyup" === e10.type ? e10.keyCode : 0;
} });
var Ht = gt(Bt);
var Wt = A2({}, Et, { pointerId: 0, width: 0, height: 0, pressure: 0, tangentialPressure: 0, tiltX: 0, tiltY: 0, twist: 0, pointerType: 0, isPrimary: 0 });
var Qt = gt(Wt);
var jt = A2({}, bt, { touches: 0, targetTouches: 0, changedTouches: 0, altKey: 0, metaKey: 0, ctrlKey: 0, shiftKey: 0, getModifierState: At });
var $t = gt(jt);
var Kt = A2({}, vt, { propertyName: 0, elapsedTime: 0, pseudoElement: 0 });
var qt = gt(Kt);
var Yt = A2({}, Et, { deltaX: function(e10) {
  return "deltaX" in e10 ? e10.deltaX : "wheelDeltaX" in e10 ? -e10.wheelDeltaX : 0;
}, deltaY: function(e10) {
  return "deltaY" in e10 ? e10.deltaY : "wheelDeltaY" in e10 ? -e10.wheelDeltaY : "wheelDelta" in e10 ? -e10.wheelDelta : 0;
}, deltaZ: 0, deltaMode: 0 });
var Xt = gt(Yt);
var Gt = [9, 13, 27, 32];
var Zt = f3 && "CompositionEvent" in window;
var Jt = null;
f3 && "documentMode" in document && (Jt = document.documentMode);
var er = f3 && "TextEvent" in window && !Jt;
var nr = f3 && (!Zt || Jt && 8 < Jt && 11 >= Jt);
var tr = String.fromCharCode(32);
var rr = false;
function lr(e10, n14) {
  switch (e10) {
    case "keyup":
      return -1 !== Gt.indexOf(n14.keyCode);
    case "keydown":
      return 229 !== n14.keyCode;
    case "keypress":
    case "mousedown":
    case "focusout":
      return true;
    default:
      return false;
  }
}
function ar(e10) {
  e10 = e10.detail;
  return "object" === typeof e10 && "data" in e10 ? e10.data : null;
}
var ur = false;
function or(e10, n14) {
  switch (e10) {
    case "compositionend":
      return ar(n14);
    case "keypress":
      if (32 !== n14.which) return null;
      rr = true;
      return tr;
    case "textInput":
      return e10 = n14.data, e10 === tr && rr ? null : e10;
    default:
      return null;
  }
}
function ir(e10, n14) {
  if (ur) return "compositionend" === e10 || !Zt && lr(e10, n14) ? (e10 = dt(), ft = ct = st = null, ur = false, e10) : null;
  switch (e10) {
    case "paste":
      return null;
    case "keypress":
      if (!(n14.ctrlKey || n14.altKey || n14.metaKey) || n14.ctrlKey && n14.altKey) {
        if (n14.char && 1 < n14.char.length) return n14.char;
        if (n14.which) return String.fromCharCode(n14.which);
      }
      return null;
    case "compositionend":
      return nr && "ko" !== n14.locale ? null : n14.data;
    default:
      return null;
  }
}
var sr = { color: true, date: true, datetime: true, "datetime-local": true, email: true, month: true, number: true, password: true, range: true, search: true, tel: true, text: true, time: true, url: true, week: true };
function cr(e10) {
  var n14 = e10 && e10.nodeName && e10.nodeName.toLowerCase();
  return "input" === n14 ? !!sr[e10.type] : "textarea" === n14 ? true : false;
}
function fr(e10, n14, t18, r10) {
  Le(r10);
  n14 = ml(n14, "onChange");
  0 < n14.length && (t18 = new yt("onChange", "change", null, t18, r10), e10.push({ event: t18, listeners: n14 }));
}
var dr = null;
var pr = null;
function hr(e10) {
  ol(e10, 0);
}
function mr(e10) {
  var n14 = Wl(e10);
  if (Z2(n14)) return e10;
}
function gr(e10, n14) {
  if ("change" === e10) return n14;
}
var vr = false;
if (f3) {
  if (f3) {
    br = "oninput" in document;
    if (!br) {
      kr = document.createElement("div");
      kr.setAttribute("oninput", "return;");
      br = "function" === typeof kr.oninput;
    }
    yr = br;
  } else yr = false;
  vr = yr && (!document.documentMode || 9 < document.documentMode);
}
var yr;
var br;
var kr;
function wr() {
  dr && (dr.detachEvent("onpropertychange", Sr), pr = dr = null);
}
function Sr(e10) {
  if ("value" === e10.propertyName && mr(pr)) {
    var n14 = [];
    fr(n14, pr, e10, Ce(e10));
    De(hr, n14);
  }
}
function xr(e10, n14, t18) {
  "focusin" === e10 ? (wr(), dr = n14, pr = t18, dr.attachEvent("onpropertychange", Sr)) : "focusout" === e10 && wr();
}
function Er(e10) {
  if ("selectionchange" === e10 || "keyup" === e10 || "keydown" === e10) return mr(pr);
}
function Cr(e10, n14) {
  if ("click" === e10) return mr(n14);
}
function Nr(e10, n14) {
  if ("input" === e10 || "change" === e10) return mr(n14);
}
function _r(e10, n14) {
  return e10 === n14 && (0 !== e10 || 1 / e10 === 1 / n14) || e10 !== e10 && n14 !== n14;
}
var zr = "function" === typeof Object.is ? Object.is : _r;
function Pr(e10, n14) {
  if (zr(e10, n14)) return true;
  if ("object" !== typeof e10 || null === e10 || "object" !== typeof n14 || null === n14) return false;
  var t18 = Object.keys(e10), r10 = Object.keys(n14);
  if (t18.length !== r10.length) return false;
  for (r10 = 0; r10 < t18.length; r10++) {
    var l12 = t18[r10];
    if (!d3.call(n14, l12) || !zr(e10[l12], n14[l12])) return false;
  }
  return true;
}
function Lr(e10) {
  for (; e10 && e10.firstChild; ) e10 = e10.firstChild;
  return e10;
}
function Tr(e10, n14) {
  var t18 = Lr(e10);
  e10 = 0;
  for (var r10; t18; ) {
    if (3 === t18.nodeType) {
      r10 = e10 + t18.textContent.length;
      if (e10 <= n14 && r10 >= n14) return { node: t18, offset: n14 - e10 };
      e10 = r10;
    }
    e: {
      for (; t18; ) {
        if (t18.nextSibling) {
          t18 = t18.nextSibling;
          break e;
        }
        t18 = t18.parentNode;
      }
      t18 = void 0;
    }
    t18 = Lr(t18);
  }
}
function Mr(e10, n14) {
  return e10 && n14 ? e10 === n14 ? true : e10 && 3 === e10.nodeType ? false : n14 && 3 === n14.nodeType ? Mr(e10, n14.parentNode) : "contains" in e10 ? e10.contains(n14) : e10.compareDocumentPosition ? !!(e10.compareDocumentPosition(n14) & 16) : false : false;
}
function Fr() {
  for (var e10 = window, n14 = J2(); n14 instanceof e10.HTMLIFrameElement; ) {
    try {
      var t18 = "string" === typeof n14.contentWindow.location.href;
    } catch (e11) {
      t18 = false;
    }
    if (t18) e10 = n14.contentWindow;
    else break;
    n14 = J2(e10.document);
  }
  return n14;
}
function Rr(e10) {
  var n14 = e10 && e10.nodeName && e10.nodeName.toLowerCase();
  return n14 && ("input" === n14 && ("text" === e10.type || "search" === e10.type || "tel" === e10.type || "url" === e10.type || "password" === e10.type) || "textarea" === n14 || "true" === e10.contentEditable);
}
function Dr(e10) {
  var n14 = Fr(), t18 = e10.focusedElem, r10 = e10.selectionRange;
  if (n14 !== t18 && t18 && t18.ownerDocument && Mr(t18.ownerDocument.documentElement, t18)) {
    if (null !== r10 && Rr(t18)) {
      if (n14 = r10.start, e10 = r10.end, void 0 === e10 && (e10 = n14), "selectionStart" in t18) t18.selectionStart = n14, t18.selectionEnd = Math.min(e10, t18.value.length);
      else if (e10 = (n14 = t18.ownerDocument || document) && n14.defaultView || window, e10.getSelection) {
        e10 = e10.getSelection();
        var l12 = t18.textContent.length, a20 = Math.min(r10.start, l12);
        r10 = void 0 === r10.end ? a20 : Math.min(r10.end, l12);
        !e10.extend && a20 > r10 && (l12 = r10, r10 = a20, a20 = l12);
        l12 = Tr(t18, a20);
        var u6 = Tr(t18, r10);
        l12 && u6 && (1 !== e10.rangeCount || e10.anchorNode !== l12.node || e10.anchorOffset !== l12.offset || e10.focusNode !== u6.node || e10.focusOffset !== u6.offset) && (n14 = n14.createRange(), n14.setStart(l12.node, l12.offset), e10.removeAllRanges(), a20 > r10 ? (e10.addRange(n14), e10.extend(u6.node, u6.offset)) : (n14.setEnd(u6.node, u6.offset), e10.addRange(n14)));
      }
    }
    n14 = [];
    for (e10 = t18; e10 = e10.parentNode; ) 1 === e10.nodeType && n14.push({ element: e10, left: e10.scrollLeft, top: e10.scrollTop });
    "function" === typeof t18.focus && t18.focus();
    for (t18 = 0; t18 < n14.length; t18++) e10 = n14[t18], e10.element.scrollLeft = e10.left, e10.element.scrollTop = e10.top;
  }
}
var Or = f3 && "documentMode" in document && 11 >= document.documentMode;
var Ir = null;
var Ur = null;
var Vr = null;
var Ar = false;
function Br(e10, n14, t18) {
  var r10 = t18.window === t18 ? t18.document : 9 === t18.nodeType ? t18 : t18.ownerDocument;
  Ar || null == Ir || Ir !== J2(r10) || (r10 = Ir, "selectionStart" in r10 && Rr(r10) ? r10 = { start: r10.selectionStart, end: r10.selectionEnd } : (r10 = (r10.ownerDocument && r10.ownerDocument.defaultView || window).getSelection(), r10 = { anchorNode: r10.anchorNode, anchorOffset: r10.anchorOffset, focusNode: r10.focusNode, focusOffset: r10.focusOffset }), Vr && Pr(Vr, r10) || (Vr = r10, r10 = ml(Ur, "onSelect"), 0 < r10.length && (n14 = new yt("onSelect", "select", null, n14, t18), e10.push({ event: n14, listeners: r10 }), n14.target = Ir)));
}
function Hr(e10, n14) {
  var t18 = {};
  t18[e10.toLowerCase()] = n14.toLowerCase();
  t18["Webkit" + e10] = "webkit" + n14;
  t18["Moz" + e10] = "moz" + n14;
  return t18;
}
var Wr = { animationend: Hr("Animation", "AnimationEnd"), animationiteration: Hr("Animation", "AnimationIteration"), animationstart: Hr("Animation", "AnimationStart"), transitionend: Hr("Transition", "TransitionEnd") };
var Qr = {};
var jr = {};
f3 && (jr = document.createElement("div").style, "AnimationEvent" in window || (delete Wr.animationend.animation, delete Wr.animationiteration.animation, delete Wr.animationstart.animation), "TransitionEvent" in window || delete Wr.transitionend.transition);
function $r(e10) {
  if (Qr[e10]) return Qr[e10];
  if (!Wr[e10]) return e10;
  var n14 = Wr[e10], t18;
  for (t18 in n14) if (n14.hasOwnProperty(t18) && t18 in jr) return Qr[e10] = n14[t18];
  return e10;
}
var Kr = $r("animationend");
var qr = $r("animationiteration");
var Yr = $r("animationstart");
var Xr = $r("transitionend");
var Gr = /* @__PURE__ */ new Map();
var Zr = "abort auxClick cancel canPlay canPlayThrough click close contextMenu copy cut drag dragEnd dragEnter dragExit dragLeave dragOver dragStart drop durationChange emptied encrypted ended error gotPointerCapture input invalid keyDown keyPress keyUp load loadedData loadedMetadata loadStart lostPointerCapture mouseDown mouseMove mouseOut mouseOver mouseUp paste pause play playing pointerCancel pointerDown pointerMove pointerOut pointerOver pointerUp progress rateChange reset resize seeked seeking stalled submit suspend timeUpdate touchCancel touchEnd touchStart volumeChange scroll toggle touchMove waiting wheel".split(" ");
function Jr(e10, n14) {
  Gr.set(e10, n14);
  s3(n14, [e10]);
}
for (el = 0; el < Zr.length; el++) {
  nl = Zr[el], tl = nl.toLowerCase(), rl = nl[0].toUpperCase() + nl.slice(1);
  Jr(tl, "on" + rl);
}
var nl;
var tl;
var rl;
var el;
Jr(Kr, "onAnimationEnd");
Jr(qr, "onAnimationIteration");
Jr(Yr, "onAnimationStart");
Jr("dblclick", "onDoubleClick");
Jr("focusin", "onFocus");
Jr("focusout", "onBlur");
Jr(Xr, "onTransitionEnd");
c3("onMouseEnter", ["mouseout", "mouseover"]);
c3("onMouseLeave", ["mouseout", "mouseover"]);
c3("onPointerEnter", ["pointerout", "pointerover"]);
c3("onPointerLeave", ["pointerout", "pointerover"]);
s3("onChange", "change click focusin focusout input keydown keyup selectionchange".split(" "));
s3("onSelect", "focusout contextmenu dragend focusin keydown keyup mousedown mouseup selectionchange".split(" "));
s3("onBeforeInput", ["compositionend", "keypress", "textInput", "paste"]);
s3("onCompositionEnd", "compositionend focusout keydown keypress keyup mousedown".split(" "));
s3("onCompositionStart", "compositionstart focusout keydown keypress keyup mousedown".split(" "));
s3("onCompositionUpdate", "compositionupdate focusout keydown keypress keyup mousedown".split(" "));
var ll = "abort canplay canplaythrough durationchange emptied encrypted ended error loadeddata loadedmetadata loadstart pause play playing progress ratechange resize seeked seeking stalled suspend timeupdate volumechange waiting".split(" ");
var al = new Set("cancel close invalid load scroll toggle".split(" ").concat(ll));
function ul(e10, n14, t18) {
  var r10 = e10.type || "unknown-event";
  e10.currentTarget = t18;
  $e(r10, n14, void 0, e10);
  e10.currentTarget = null;
}
function ol(e10, n14) {
  n14 = 0 !== (n14 & 4);
  for (var t18 = 0; t18 < e10.length; t18++) {
    var r10 = e10[t18], l12 = r10.event;
    r10 = r10.listeners;
    e: {
      var a20 = void 0;
      if (n14) for (var u6 = r10.length - 1; 0 <= u6; u6--) {
        var o21 = r10[u6], i19 = o21.instance, s19 = o21.currentTarget;
        o21 = o21.listener;
        if (i19 !== a20 && l12.isPropagationStopped()) break e;
        ul(l12, o21, s19);
        a20 = i19;
      }
      else for (u6 = 0; u6 < r10.length; u6++) {
        o21 = r10[u6];
        i19 = o21.instance;
        s19 = o21.currentTarget;
        o21 = o21.listener;
        if (i19 !== a20 && l12.isPropagationStopped()) break e;
        ul(l12, o21, s19);
        a20 = i19;
      }
    }
  }
  if (He) throw e10 = We, He = false, We = null, e10;
}
function il(e10, n14) {
  var t18 = n14[Ul];
  void 0 === t18 && (t18 = n14[Ul] = /* @__PURE__ */ new Set());
  var r10 = e10 + "__bubble";
  t18.has(r10) || (dl(n14, e10, 2, false), t18.add(r10));
}
function sl(e10, n14, t18) {
  var r10 = 0;
  n14 && (r10 |= 4);
  dl(t18, e10, r10, n14);
}
var cl = "_reactListening" + Math.random().toString(36).slice(2);
function fl(e10) {
  if (!e10[cl]) {
    e10[cl] = true;
    o3.forEach(function(n15) {
      "selectionchange" !== n15 && (al.has(n15) || sl(n15, false, e10), sl(n15, true, e10));
    });
    var n14 = 9 === e10.nodeType ? e10 : e10.ownerDocument;
    null === n14 || n14[cl] || (n14[cl] = true, sl("selectionchange", false, n14));
  }
}
function dl(e10, n14, t18, r10) {
  switch (it(n14)) {
    case 1:
      var l12 = rt;
      break;
    case 4:
      l12 = lt;
      break;
    default:
      l12 = at;
  }
  t18 = l12.bind(null, n14, t18, e10);
  l12 = void 0;
  !Ie || "touchstart" !== n14 && "touchmove" !== n14 && "wheel" !== n14 || (l12 = true);
  r10 ? void 0 !== l12 ? e10.addEventListener(n14, t18, { capture: true, passive: l12 }) : e10.addEventListener(n14, t18, true) : void 0 !== l12 ? e10.addEventListener(n14, t18, { passive: l12 }) : e10.addEventListener(n14, t18, false);
}
function pl(e10, n14, t18, r10, l12) {
  var a20 = r10;
  if (0 === (n14 & 1) && 0 === (n14 & 2) && null !== r10) e: for (; ; ) {
    if (null === r10) return;
    var u6 = r10.tag;
    if (3 === u6 || 4 === u6) {
      var o21 = r10.stateNode.containerInfo;
      if (o21 === l12 || 8 === o21.nodeType && o21.parentNode === l12) break;
      if (4 === u6) for (u6 = r10.return; null !== u6; ) {
        var i19 = u6.tag;
        if (3 === i19 || 4 === i19) {
          if (i19 = u6.stateNode.containerInfo, i19 === l12 || 8 === i19.nodeType && i19.parentNode === l12) return;
        }
        u6 = u6.return;
      }
      for (; null !== o21; ) {
        u6 = Bl(o21);
        if (null === u6) return;
        i19 = u6.tag;
        if (5 === i19 || 6 === i19) {
          r10 = a20 = u6;
          continue e;
        }
        o21 = o21.parentNode;
      }
    }
    r10 = r10.return;
  }
  De(function() {
    var r11 = a20, l13 = Ce(t18), u7 = [];
    e: {
      var o22 = Gr.get(e10);
      if (void 0 !== o22) {
        var i20 = yt, s19 = e10;
        switch (e10) {
          case "keypress":
            if (0 === pt(t18)) break e;
          case "keydown":
          case "keyup":
            i20 = Ht;
            break;
          case "focusin":
            s19 = "focus";
            i20 = Pt;
            break;
          case "focusout":
            s19 = "blur";
            i20 = Pt;
            break;
          case "beforeblur":
          case "afterblur":
            i20 = Pt;
            break;
          case "click":
            if (2 === t18.button) break e;
          case "auxclick":
          case "dblclick":
          case "mousedown":
          case "mousemove":
          case "mouseup":
          case "mouseout":
          case "mouseover":
          case "contextmenu":
            i20 = Ct;
            break;
          case "drag":
          case "dragend":
          case "dragenter":
          case "dragexit":
          case "dragleave":
          case "dragover":
          case "dragstart":
          case "drop":
            i20 = _t;
            break;
          case "touchcancel":
          case "touchend":
          case "touchmove":
          case "touchstart":
            i20 = $t;
            break;
          case Kr:
          case qr:
          case Yr:
            i20 = Tt;
            break;
          case Xr:
            i20 = qt;
            break;
          case "scroll":
            i20 = kt;
            break;
          case "wheel":
            i20 = Xt;
            break;
          case "copy":
          case "cut":
          case "paste":
            i20 = Ft;
            break;
          case "gotpointercapture":
          case "lostpointercapture":
          case "pointercancel":
          case "pointerdown":
          case "pointermove":
          case "pointerout":
          case "pointerover":
          case "pointerup":
            i20 = Qt;
        }
        var c16 = 0 !== (n14 & 4), f7 = !c16 && "scroll" === e10, d6 = c16 ? null !== o22 ? o22 + "Capture" : null : o22;
        c16 = [];
        for (var p9 = r11, h7; null !== p9; ) {
          h7 = p9;
          var m8 = h7.stateNode;
          5 === h7.tag && null !== m8 && (h7 = m8, null !== d6 && (m8 = Oe(p9, d6), null != m8 && c16.push(hl(p9, m8, h7))));
          if (f7) break;
          p9 = p9.return;
        }
        0 < c16.length && (o22 = new i20(o22, s19, null, t18, l13), u7.push({ event: o22, listeners: c16 }));
      }
    }
    if (0 === (n14 & 7)) {
      e: {
        o22 = "mouseover" === e10 || "pointerover" === e10;
        i20 = "mouseout" === e10 || "pointerout" === e10;
        if (o22 && t18 !== Ee && (s19 = t18.relatedTarget || t18.fromElement) && (Bl(s19) || s19[Il])) break e;
        if (i20 || o22) {
          o22 = l13.window === l13 ? l13 : (o22 = l13.ownerDocument) ? o22.defaultView || o22.parentWindow : window;
          if (i20) {
            if (s19 = t18.relatedTarget || t18.toElement, i20 = r11, s19 = s19 ? Bl(s19) : null, null !== s19 && (f7 = Ke(s19), s19 !== f7 || 5 !== s19.tag && 6 !== s19.tag)) s19 = null;
          } else i20 = null, s19 = r11;
          if (i20 !== s19) {
            c16 = Ct;
            m8 = "onMouseLeave";
            d6 = "onMouseEnter";
            p9 = "mouse";
            if ("pointerout" === e10 || "pointerover" === e10) c16 = Qt, m8 = "onPointerLeave", d6 = "onPointerEnter", p9 = "pointer";
            f7 = null == i20 ? o22 : Wl(i20);
            h7 = null == s19 ? o22 : Wl(s19);
            o22 = new c16(m8, p9 + "leave", i20, t18, l13);
            o22.target = f7;
            o22.relatedTarget = h7;
            m8 = null;
            Bl(l13) === r11 && (c16 = new c16(d6, p9 + "enter", s19, t18, l13), c16.target = h7, c16.relatedTarget = f7, m8 = c16);
            f7 = m8;
            if (i20 && s19) n: {
              c16 = i20;
              d6 = s19;
              p9 = 0;
              for (h7 = c16; h7; h7 = gl(h7)) p9++;
              h7 = 0;
              for (m8 = d6; m8; m8 = gl(m8)) h7++;
              for (; 0 < p9 - h7; ) c16 = gl(c16), p9--;
              for (; 0 < h7 - p9; ) d6 = gl(d6), h7--;
              for (; p9--; ) {
                if (c16 === d6 || null !== d6 && c16 === d6.alternate) break n;
                c16 = gl(c16);
                d6 = gl(d6);
              }
              c16 = null;
            }
            else c16 = null;
            null !== i20 && vl(u7, o22, i20, c16, false);
            null !== s19 && null !== f7 && vl(u7, f7, s19, c16, true);
          }
        }
      }
      e: {
        o22 = r11 ? Wl(r11) : window;
        i20 = o22.nodeName && o22.nodeName.toLowerCase();
        if ("select" === i20 || "input" === i20 && "file" === o22.type) var g6 = gr;
        else if (cr(o22)) if (vr) g6 = Nr;
        else {
          g6 = Er;
          var v6 = xr;
        }
        else (i20 = o22.nodeName) && "input" === i20.toLowerCase() && ("checkbox" === o22.type || "radio" === o22.type) && (g6 = Cr);
        if (g6 && (g6 = g6(e10, r11))) {
          fr(u7, g6, t18, l13);
          break e;
        }
        v6 && v6(e10, o22, r11);
        "focusout" === e10 && (v6 = o22._wrapperState) && v6.controlled && "number" === o22.type && ae2(o22, "number", o22.value);
      }
      v6 = r11 ? Wl(r11) : window;
      switch (e10) {
        case "focusin":
          if (cr(v6) || "true" === v6.contentEditable) Ir = v6, Ur = r11, Vr = null;
          break;
        case "focusout":
          Vr = Ur = Ir = null;
          break;
        case "mousedown":
          Ar = true;
          break;
        case "contextmenu":
        case "mouseup":
        case "dragend":
          Ar = false;
          Br(u7, t18, l13);
          break;
        case "selectionchange":
          if (Or) break;
        case "keydown":
        case "keyup":
          Br(u7, t18, l13);
      }
      var y6;
      if (Zt) e: {
        switch (e10) {
          case "compositionstart":
            var b5 = "onCompositionStart";
            break e;
          case "compositionend":
            b5 = "onCompositionEnd";
            break e;
          case "compositionupdate":
            b5 = "onCompositionUpdate";
            break e;
        }
        b5 = void 0;
      }
      else ur ? lr(e10, t18) && (b5 = "onCompositionEnd") : "keydown" === e10 && 229 === t18.keyCode && (b5 = "onCompositionStart");
      b5 && (nr && "ko" !== t18.locale && (ur || "onCompositionStart" !== b5 ? "onCompositionEnd" === b5 && ur && (y6 = dt()) : (st = l13, ct = "value" in st ? st.value : st.textContent, ur = true)), v6 = ml(r11, b5), 0 < v6.length && (b5 = new Dt(b5, e10, null, t18, l13), u7.push({ event: b5, listeners: v6 }), y6 ? b5.data = y6 : (y6 = ar(t18), null !== y6 && (b5.data = y6))));
      if (y6 = er ? or(e10, t18) : ir(e10, t18)) r11 = ml(r11, "onBeforeInput"), 0 < r11.length && (l13 = new Dt("onBeforeInput", "beforeinput", null, t18, l13), u7.push({ event: l13, listeners: r11 }), l13.data = y6);
    }
    ol(u7, n14);
  });
}
function hl(e10, n14, t18) {
  return { instance: e10, listener: n14, currentTarget: t18 };
}
function ml(e10, n14) {
  for (var t18 = n14 + "Capture", r10 = []; null !== e10; ) {
    var l12 = e10, a20 = l12.stateNode;
    5 === l12.tag && null !== a20 && (l12 = a20, a20 = Oe(e10, t18), null != a20 && r10.unshift(hl(e10, a20, l12)), a20 = Oe(e10, n14), null != a20 && r10.push(hl(e10, a20, l12)));
    e10 = e10.return;
  }
  return r10;
}
function gl(e10) {
  if (null === e10) return null;
  do {
    e10 = e10.return;
  } while (e10 && 5 !== e10.tag);
  return e10 ? e10 : null;
}
function vl(e10, n14, t18, r10, l12) {
  for (var a20 = n14._reactName, u6 = []; null !== t18 && t18 !== r10; ) {
    var o21 = t18, i19 = o21.alternate, s19 = o21.stateNode;
    if (null !== i19 && i19 === r10) break;
    5 === o21.tag && null !== s19 && (o21 = s19, l12 ? (i19 = Oe(t18, a20), null != i19 && u6.unshift(hl(t18, i19, o21))) : l12 || (i19 = Oe(t18, a20), null != i19 && u6.push(hl(t18, i19, o21))));
    t18 = t18.return;
  }
  0 !== u6.length && e10.push({ event: n14, listeners: u6 });
}
var yl = /\r\n?/g;
var bl = /\u0000|\uFFFD/g;
function kl(e10) {
  return ("string" === typeof e10 ? e10 : "" + e10).replace(yl, "\n").replace(bl, "");
}
function wl(e10, n14, t18) {
  n14 = kl(n14);
  if (kl(e10) !== n14 && t18) throw Error(u3(425));
}
function Sl() {
}
var xl = null;
var El = null;
function Cl(e10, n14) {
  return "textarea" === e10 || "noscript" === e10 || "string" === typeof n14.children || "number" === typeof n14.children || "object" === typeof n14.dangerouslySetInnerHTML && null !== n14.dangerouslySetInnerHTML && null != n14.dangerouslySetInnerHTML.__html;
}
var Nl = "function" === typeof setTimeout ? setTimeout : void 0;
var _l = "function" === typeof clearTimeout ? clearTimeout : void 0;
var zl = "function" === typeof Promise ? Promise : void 0;
var Pl = "function" === typeof queueMicrotask ? queueMicrotask : "undefined" !== typeof zl ? function(e10) {
  return zl.resolve(null).then(e10).catch(Ll);
} : Nl;
function Ll(e10) {
  setTimeout(function() {
    throw e10;
  });
}
function Tl(e10, n14) {
  var t18 = n14, r10 = 0;
  do {
    var l12 = t18.nextSibling;
    e10.removeChild(t18);
    if (l12 && 8 === l12.nodeType) if (t18 = l12.data, "/$" === t18) {
      if (0 === r10) {
        e10.removeChild(l12);
        et(n14);
        return;
      }
      r10--;
    } else "$" !== t18 && "$?" !== t18 && "$!" !== t18 || r10++;
    t18 = l12;
  } while (t18);
  et(n14);
}
function Ml(e10) {
  for (; null != e10; e10 = e10.nextSibling) {
    var n14 = e10.nodeType;
    if (1 === n14 || 3 === n14) break;
    if (8 === n14) {
      n14 = e10.data;
      if ("$" === n14 || "$!" === n14 || "$?" === n14) break;
      if ("/$" === n14) return null;
    }
  }
  return e10;
}
function Fl(e10) {
  e10 = e10.previousSibling;
  for (var n14 = 0; e10; ) {
    if (8 === e10.nodeType) {
      var t18 = e10.data;
      if ("$" === t18 || "$!" === t18 || "$?" === t18) {
        if (0 === n14) return e10;
        n14--;
      } else "/$" === t18 && n14++;
    }
    e10 = e10.previousSibling;
  }
  return null;
}
var Rl = Math.random().toString(36).slice(2);
var Dl = "__reactFiber$" + Rl;
var Ol = "__reactProps$" + Rl;
var Il = "__reactContainer$" + Rl;
var Ul = "__reactEvents$" + Rl;
var Vl = "__reactListeners$" + Rl;
var Al = "__reactHandles$" + Rl;
function Bl(e10) {
  var n14 = e10[Dl];
  if (n14) return n14;
  for (var t18 = e10.parentNode; t18; ) {
    if (n14 = t18[Il] || t18[Dl]) {
      t18 = n14.alternate;
      if (null !== n14.child || null !== t18 && null !== t18.child) for (e10 = Fl(e10); null !== e10; ) {
        if (t18 = e10[Dl]) return t18;
        e10 = Fl(e10);
      }
      return n14;
    }
    e10 = t18;
    t18 = e10.parentNode;
  }
  return null;
}
function Hl(e10) {
  e10 = e10[Dl] || e10[Il];
  return !e10 || 5 !== e10.tag && 6 !== e10.tag && 13 !== e10.tag && 3 !== e10.tag ? null : e10;
}
function Wl(e10) {
  if (5 === e10.tag || 6 === e10.tag) return e10.stateNode;
  throw Error(u3(33));
}
function Ql(e10) {
  return e10[Ol] || null;
}
var jl = [];
var $l = -1;
function Kl(e10) {
  return { current: e10 };
}
function ql(e10) {
  0 > $l || (e10.current = jl[$l], jl[$l] = null, $l--);
}
function Yl(e10, n14) {
  $l++;
  jl[$l] = e10.current;
  e10.current = n14;
}
var Xl = {};
var Gl = Kl(Xl);
var Zl = Kl(false);
var Jl = Xl;
function ea(e10, n14) {
  var t18 = e10.type.contextTypes;
  if (!t18) return Xl;
  var r10 = e10.stateNode;
  if (r10 && r10.__reactInternalMemoizedUnmaskedChildContext === n14) return r10.__reactInternalMemoizedMaskedChildContext;
  var l12 = {}, a20;
  for (a20 in t18) l12[a20] = n14[a20];
  r10 && (e10 = e10.stateNode, e10.__reactInternalMemoizedUnmaskedChildContext = n14, e10.__reactInternalMemoizedMaskedChildContext = l12);
  return l12;
}
function na(e10) {
  e10 = e10.childContextTypes;
  return null !== e10 && void 0 !== e10;
}
function ta() {
  ql(Zl);
  ql(Gl);
}
function ra(e10, n14, t18) {
  if (Gl.current !== Xl) throw Error(u3(168));
  Yl(Gl, n14);
  Yl(Zl, t18);
}
function la(e10, n14, t18) {
  var r10 = e10.stateNode;
  n14 = n14.childContextTypes;
  if ("function" !== typeof r10.getChildContext) return t18;
  r10 = r10.getChildContext();
  for (var l12 in r10) if (!(l12 in n14)) throw Error(u3(108, K2(e10) || "Unknown", l12));
  return A2({}, t18, r10);
}
function aa(e10) {
  e10 = (e10 = e10.stateNode) && e10.__reactInternalMemoizedMergedChildContext || Xl;
  Jl = Gl.current;
  Yl(Gl, e10);
  Yl(Zl, Zl.current);
  return true;
}
function ua(e10, n14, t18) {
  var r10 = e10.stateNode;
  if (!r10) throw Error(u3(169));
  t18 ? (e10 = la(e10, n14, Jl), r10.__reactInternalMemoizedMergedChildContext = e10, ql(Zl), ql(Gl), Yl(Gl, e10)) : ql(Zl);
  Yl(Zl, t18);
}
var oa = null;
var ia = false;
var sa = false;
function ca(e10) {
  null === oa ? oa = [e10] : oa.push(e10);
}
function fa(e10) {
  ia = true;
  ca(e10);
}
function da() {
  if (!sa && null !== oa) {
    sa = true;
    var e10 = 0, n14 = Ln;
    try {
      var t18 = oa;
      for (Ln = 1; e10 < t18.length; e10++) {
        var r10 = t18[e10];
        do {
          r10 = r10(true);
        } while (null !== r10);
      }
      oa = null;
      ia = false;
    } catch (n15) {
      throw null !== oa && (oa = oa.slice(e10 + 1)), Je(an, da), n15;
    } finally {
      Ln = n14, sa = false;
    }
  }
  return null;
}
var pa = [];
var ha = 0;
var ma = null;
var ga = 0;
var va = [];
var ya = 0;
var ba = null;
var ka = 1;
var wa = "";
function Sa(e10, n14) {
  pa[ha++] = ga;
  pa[ha++] = ma;
  ma = e10;
  ga = n14;
}
function xa(e10, n14, t18) {
  va[ya++] = ka;
  va[ya++] = wa;
  va[ya++] = ba;
  ba = e10;
  var r10 = ka;
  e10 = wa;
  var l12 = 32 - hn(r10) - 1;
  r10 &= ~(1 << l12);
  t18 += 1;
  var a20 = 32 - hn(n14) + l12;
  if (30 < a20) {
    var u6 = l12 - l12 % 5;
    a20 = (r10 & (1 << u6) - 1).toString(32);
    r10 >>= u6;
    l12 -= u6;
    ka = 1 << 32 - hn(n14) + l12 | t18 << l12 | r10;
    wa = a20 + e10;
  } else ka = 1 << a20 | t18 << l12 | r10, wa = e10;
}
function Ea(e10) {
  null !== e10.return && (Sa(e10, 1), xa(e10, 1, 0));
}
function Ca(e10) {
  for (; e10 === ma; ) ma = pa[--ha], pa[ha] = null, ga = pa[--ha], pa[ha] = null;
  for (; e10 === ba; ) ba = va[--ya], va[ya] = null, wa = va[--ya], va[ya] = null, ka = va[--ya], va[ya] = null;
}
var Na = null;
var _a = null;
var za = false;
var Pa = null;
function La(e10, n14) {
  var t18 = uc(5, null, null, 0);
  t18.elementType = "DELETED";
  t18.stateNode = n14;
  t18.return = e10;
  n14 = e10.deletions;
  null === n14 ? (e10.deletions = [t18], e10.flags |= 16) : n14.push(t18);
}
function Ta(e10, n14) {
  switch (e10.tag) {
    case 5:
      var t18 = e10.type;
      n14 = 1 !== n14.nodeType || t18.toLowerCase() !== n14.nodeName.toLowerCase() ? null : n14;
      return null !== n14 ? (e10.stateNode = n14, Na = e10, _a = Ml(n14.firstChild), true) : false;
    case 6:
      return n14 = "" === e10.pendingProps || 3 !== n14.nodeType ? null : n14, null !== n14 ? (e10.stateNode = n14, Na = e10, _a = null, true) : false;
    case 13:
      return n14 = 8 !== n14.nodeType ? null : n14, null !== n14 ? (t18 = null !== ba ? { id: ka, overflow: wa } : null, e10.memoizedState = { dehydrated: n14, treeContext: t18, retryLane: 1073741824 }, t18 = uc(18, null, null, 0), t18.stateNode = n14, t18.return = e10, e10.child = t18, Na = e10, _a = null, true) : false;
    default:
      return false;
  }
}
function Ma(e10) {
  return 0 !== (e10.mode & 1) && 0 === (e10.flags & 128);
}
function Fa(e10) {
  if (za) {
    var n14 = _a;
    if (n14) {
      var t18 = n14;
      if (!Ta(e10, n14)) {
        if (Ma(e10)) throw Error(u3(418));
        n14 = Ml(t18.nextSibling);
        var r10 = Na;
        n14 && Ta(e10, n14) ? La(r10, t18) : (e10.flags = e10.flags & -4097 | 2, za = false, Na = e10);
      }
    } else {
      if (Ma(e10)) throw Error(u3(418));
      e10.flags = e10.flags & -4097 | 2;
      za = false;
      Na = e10;
    }
  }
}
function Ra(e10) {
  for (e10 = e10.return; null !== e10 && 5 !== e10.tag && 3 !== e10.tag && 13 !== e10.tag; ) e10 = e10.return;
  Na = e10;
}
function Da(e10) {
  if (e10 !== Na) return false;
  if (!za) return Ra(e10), za = true, false;
  var n14;
  (n14 = 3 !== e10.tag) && !(n14 = 5 !== e10.tag) && (n14 = e10.type, n14 = "head" !== n14 && "body" !== n14 && !Cl(e10.type, e10.memoizedProps));
  if (n14 && (n14 = _a)) {
    if (Ma(e10)) throw Oa(), Error(u3(418));
    for (; n14; ) La(e10, n14), n14 = Ml(n14.nextSibling);
  }
  Ra(e10);
  if (13 === e10.tag) {
    e10 = e10.memoizedState;
    e10 = null !== e10 ? e10.dehydrated : null;
    if (!e10) throw Error(u3(317));
    e: {
      e10 = e10.nextSibling;
      for (n14 = 0; e10; ) {
        if (8 === e10.nodeType) {
          var t18 = e10.data;
          if ("/$" === t18) {
            if (0 === n14) {
              _a = Ml(e10.nextSibling);
              break e;
            }
            n14--;
          } else "$" !== t18 && "$!" !== t18 && "$?" !== t18 || n14++;
        }
        e10 = e10.nextSibling;
      }
      _a = null;
    }
  } else _a = Na ? Ml(e10.stateNode.nextSibling) : null;
  return true;
}
function Oa() {
  for (var e10 = _a; e10; ) e10 = Ml(e10.nextSibling);
}
function Ia() {
  _a = Na = null;
  za = false;
}
function Ua(e10) {
  null === Pa ? Pa = [e10] : Pa.push(e10);
}
var Va = E2.ReactCurrentBatchConfig;
function Aa(e10, n14, t18) {
  e10 = t18.ref;
  if (null !== e10 && "function" !== typeof e10 && "object" !== typeof e10) {
    if (t18._owner) {
      t18 = t18._owner;
      if (t18) {
        if (1 !== t18.tag) throw Error(u3(309));
        var r10 = t18.stateNode;
      }
      if (!r10) throw Error(u3(147, e10));
      var l12 = r10, a20 = "" + e10;
      if (null !== n14 && null !== n14.ref && "function" === typeof n14.ref && n14.ref._stringRef === a20) return n14.ref;
      n14 = function(e11) {
        var n15 = l12.refs;
        null === e11 ? delete n15[a20] : n15[a20] = e11;
      };
      n14._stringRef = a20;
      return n14;
    }
    if ("string" !== typeof e10) throw Error(u3(284));
    if (!t18._owner) throw Error(u3(290, e10));
  }
  return e10;
}
function Ba(e10, n14) {
  e10 = Object.prototype.toString.call(n14);
  throw Error(u3(31, "[object Object]" === e10 ? "object with keys {" + Object.keys(n14).join(", ") + "}" : e10));
}
function Ha(e10) {
  var n14 = e10._init;
  return n14(e10._payload);
}
function Wa(e10) {
  function n14(n15, t19) {
    if (e10) {
      var r11 = n15.deletions;
      null === r11 ? (n15.deletions = [t19], n15.flags |= 16) : r11.push(t19);
    }
  }
  function t18(t19, r11) {
    if (!e10) return null;
    for (; null !== r11; ) n14(t19, r11), r11 = r11.sibling;
    return null;
  }
  function r10(e11, n15) {
    for (e11 = /* @__PURE__ */ new Map(); null !== n15; ) null !== n15.key ? e11.set(n15.key, n15) : e11.set(n15.index, n15), n15 = n15.sibling;
    return e11;
  }
  function l12(e11, n15) {
    e11 = sc(e11, n15);
    e11.index = 0;
    e11.sibling = null;
    return e11;
  }
  function a20(n15, t19, r11) {
    n15.index = r11;
    if (!e10) return n15.flags |= 1048576, t19;
    r11 = n15.alternate;
    if (null !== r11) return r11 = r11.index, r11 < t19 ? (n15.flags |= 2, t19) : r11;
    n15.flags |= 2;
    return t19;
  }
  function o21(n15) {
    e10 && null === n15.alternate && (n15.flags |= 2);
    return n15;
  }
  function i19(e11, n15, t19, r11) {
    if (null === n15 || 6 !== n15.tag) return n15 = pc(t19, e11.mode, r11), n15.return = e11, n15;
    n15 = l12(n15, t19);
    n15.return = e11;
    return n15;
  }
  function s19(e11, n15, t19, r11) {
    var a21 = t19.type;
    if (a21 === _3) return f7(e11, n15, t19.props.children, r11, t19.key);
    if (null !== n15 && (n15.elementType === a21 || "object" === typeof a21 && null !== a21 && a21.$$typeof === O2 && Ha(a21) === n15.type)) return r11 = l12(n15, t19.props), r11.ref = Aa(e11, n15, t19), r11.return = e11, r11;
    r11 = cc(t19.type, t19.key, t19.props, null, e11.mode, r11);
    r11.ref = Aa(e11, n15, t19);
    r11.return = e11;
    return r11;
  }
  function c16(e11, n15, t19, r11) {
    if (null === n15 || 4 !== n15.tag || n15.stateNode.containerInfo !== t19.containerInfo || n15.stateNode.implementation !== t19.implementation) return n15 = hc(t19, e11.mode, r11), n15.return = e11, n15;
    n15 = l12(n15, t19.children || []);
    n15.return = e11;
    return n15;
  }
  function f7(e11, n15, t19, r11, a21) {
    if (null === n15 || 7 !== n15.tag) return n15 = fc(t19, e11.mode, r11, a21), n15.return = e11, n15;
    n15 = l12(n15, t19);
    n15.return = e11;
    return n15;
  }
  function d6(e11, n15, t19) {
    if ("string" === typeof n15 && "" !== n15 || "number" === typeof n15) return n15 = pc("" + n15, e11.mode, t19), n15.return = e11, n15;
    if ("object" === typeof n15 && null !== n15) {
      switch (n15.$$typeof) {
        case C2:
          return t19 = cc(n15.type, n15.key, n15.props, null, e11.mode, t19), t19.ref = Aa(e11, null, n15), t19.return = e11, t19;
        case N2:
          return n15 = hc(n15, e11.mode, t19), n15.return = e11, n15;
        case O2:
          var r11 = n15._init;
          return d6(e11, r11(n15._payload), t19);
      }
      if (ue2(n15) || V2(n15)) return n15 = fc(n15, e11.mode, t19, null), n15.return = e11, n15;
      Ba(e11, n15);
    }
    return null;
  }
  function p9(e11, n15, t19, r11) {
    var l13 = null !== n15 ? n15.key : null;
    if ("string" === typeof t19 && "" !== t19 || "number" === typeof t19) return null !== l13 ? null : i19(e11, n15, "" + t19, r11);
    if ("object" === typeof t19 && null !== t19) {
      switch (t19.$$typeof) {
        case C2:
          return t19.key === l13 ? s19(e11, n15, t19, r11) : null;
        case N2:
          return t19.key === l13 ? c16(e11, n15, t19, r11) : null;
        case O2:
          return l13 = t19._init, p9(e11, n15, l13(t19._payload), r11);
      }
      if (ue2(t19) || V2(t19)) return null !== l13 ? null : f7(e11, n15, t19, r11, null);
      Ba(e11, t19);
    }
    return null;
  }
  function h7(e11, n15, t19, r11, l13) {
    if ("string" === typeof r11 && "" !== r11 || "number" === typeof r11) return e11 = e11.get(t19) || null, i19(n15, e11, "" + r11, l13);
    if ("object" === typeof r11 && null !== r11) {
      switch (r11.$$typeof) {
        case C2:
          return e11 = e11.get(null === r11.key ? t19 : r11.key) || null, s19(n15, e11, r11, l13);
        case N2:
          return e11 = e11.get(null === r11.key ? t19 : r11.key) || null, c16(n15, e11, r11, l13);
        case O2:
          var a21 = r11._init;
          return h7(e11, n15, t19, a21(r11._payload), l13);
      }
      if (ue2(r11) || V2(r11)) return e11 = e11.get(t19) || null, f7(n15, e11, r11, l13, null);
      Ba(n15, r11);
    }
    return null;
  }
  function m8(l13, u6, o22, i20) {
    for (var s20 = null, c17 = null, f8 = u6, m9 = u6 = 0, g7 = null; null !== f8 && m9 < o22.length; m9++) {
      f8.index > m9 ? (g7 = f8, f8 = null) : g7 = f8.sibling;
      var v7 = p9(l13, f8, o22[m9], i20);
      if (null === v7) {
        null === f8 && (f8 = g7);
        break;
      }
      e10 && f8 && null === v7.alternate && n14(l13, f8);
      u6 = a20(v7, u6, m9);
      null === c17 ? s20 = v7 : c17.sibling = v7;
      c17 = v7;
      f8 = g7;
    }
    if (m9 === o22.length) return t18(l13, f8), za && Sa(l13, m9), s20;
    if (null === f8) {
      for (; m9 < o22.length; m9++) f8 = d6(l13, o22[m9], i20), null !== f8 && (u6 = a20(f8, u6, m9), null === c17 ? s20 = f8 : c17.sibling = f8, c17 = f8);
      za && Sa(l13, m9);
      return s20;
    }
    for (f8 = r10(l13, f8); m9 < o22.length; m9++) g7 = h7(f8, l13, m9, o22[m9], i20), null !== g7 && (e10 && null !== g7.alternate && f8.delete(null === g7.key ? m9 : g7.key), u6 = a20(g7, u6, m9), null === c17 ? s20 = g7 : c17.sibling = g7, c17 = g7);
    e10 && f8.forEach(function(e11) {
      return n14(l13, e11);
    });
    za && Sa(l13, m9);
    return s20;
  }
  function g6(l13, o22, i20, s20) {
    var c17 = V2(i20);
    if ("function" !== typeof c17) throw Error(u3(150));
    i20 = c17.call(i20);
    if (null == i20) throw Error(u3(151));
    for (var f8 = c17 = null, m9 = o22, g7 = o22 = 0, v7 = null, y6 = i20.next(); null !== m9 && !y6.done; g7++, y6 = i20.next()) {
      m9.index > g7 ? (v7 = m9, m9 = null) : v7 = m9.sibling;
      var b5 = p9(l13, m9, y6.value, s20);
      if (null === b5) {
        null === m9 && (m9 = v7);
        break;
      }
      e10 && m9 && null === b5.alternate && n14(l13, m9);
      o22 = a20(b5, o22, g7);
      null === f8 ? c17 = b5 : f8.sibling = b5;
      f8 = b5;
      m9 = v7;
    }
    if (y6.done) return t18(l13, m9), za && Sa(l13, g7), c17;
    if (null === m9) {
      for (; !y6.done; g7++, y6 = i20.next()) y6 = d6(l13, y6.value, s20), null !== y6 && (o22 = a20(y6, o22, g7), null === f8 ? c17 = y6 : f8.sibling = y6, f8 = y6);
      za && Sa(l13, g7);
      return c17;
    }
    for (m9 = r10(l13, m9); !y6.done; g7++, y6 = i20.next()) y6 = h7(m9, l13, g7, y6.value, s20), null !== y6 && (e10 && null !== y6.alternate && m9.delete(null === y6.key ? g7 : y6.key), o22 = a20(y6, o22, g7), null === f8 ? c17 = y6 : f8.sibling = y6, f8 = y6);
    e10 && m9.forEach(function(e11) {
      return n14(l13, e11);
    });
    za && Sa(l13, g7);
    return c17;
  }
  function v6(e11, r11, a21, u6) {
    "object" === typeof a21 && null !== a21 && a21.type === _3 && null === a21.key && (a21 = a21.props.children);
    if ("object" === typeof a21 && null !== a21) {
      switch (a21.$$typeof) {
        case C2:
          e: {
            for (var i20 = a21.key, s20 = r11; null !== s20; ) {
              if (s20.key === i20) {
                i20 = a21.type;
                if (i20 === _3) {
                  if (7 === s20.tag) {
                    t18(e11, s20.sibling);
                    r11 = l12(s20, a21.props.children);
                    r11.return = e11;
                    e11 = r11;
                    break e;
                  }
                } else if (s20.elementType === i20 || "object" === typeof i20 && null !== i20 && i20.$$typeof === O2 && Ha(i20) === s20.type) {
                  t18(e11, s20.sibling);
                  r11 = l12(s20, a21.props);
                  r11.ref = Aa(e11, s20, a21);
                  r11.return = e11;
                  e11 = r11;
                  break e;
                }
                t18(e11, s20);
                break;
              } else n14(e11, s20);
              s20 = s20.sibling;
            }
            a21.type === _3 ? (r11 = fc(a21.props.children, e11.mode, u6, a21.key), r11.return = e11, e11 = r11) : (u6 = cc(a21.type, a21.key, a21.props, null, e11.mode, u6), u6.ref = Aa(e11, r11, a21), u6.return = e11, e11 = u6);
          }
          return o21(e11);
        case N2:
          e: {
            for (s20 = a21.key; null !== r11; ) {
              if (r11.key === s20) if (4 === r11.tag && r11.stateNode.containerInfo === a21.containerInfo && r11.stateNode.implementation === a21.implementation) {
                t18(e11, r11.sibling);
                r11 = l12(r11, a21.children || []);
                r11.return = e11;
                e11 = r11;
                break e;
              } else {
                t18(e11, r11);
                break;
              }
              else n14(e11, r11);
              r11 = r11.sibling;
            }
            r11 = hc(a21, e11.mode, u6);
            r11.return = e11;
            e11 = r11;
          }
          return o21(e11);
        case O2:
          return s20 = a21._init, v6(e11, r11, s20(a21._payload), u6);
      }
      if (ue2(a21)) return m8(e11, r11, a21, u6);
      if (V2(a21)) return g6(e11, r11, a21, u6);
      Ba(e11, a21);
    }
    return "string" === typeof a21 && "" !== a21 || "number" === typeof a21 ? (a21 = "" + a21, null !== r11 && 6 === r11.tag ? (t18(e11, r11.sibling), r11 = l12(r11, a21), r11.return = e11, e11 = r11) : (t18(e11, r11), r11 = pc(a21, e11.mode, u6), r11.return = e11, e11 = r11), o21(e11)) : t18(e11, r11);
  }
  return v6;
}
var Qa = Wa(true);
var ja = Wa(false);
var $a = Kl(null);
var Ka = null;
var qa = null;
var Ya = null;
function Xa() {
  Ya = qa = Ka = null;
}
function Ga(e10) {
  var n14 = $a.current;
  ql($a);
  e10._currentValue = n14;
}
function Za(e10, n14, t18) {
  for (; null !== e10; ) {
    var r10 = e10.alternate;
    (e10.childLanes & n14) !== n14 ? (e10.childLanes |= n14, null !== r10 && (r10.childLanes |= n14)) : null !== r10 && (r10.childLanes & n14) !== n14 && (r10.childLanes |= n14);
    if (e10 === t18) break;
    e10 = e10.return;
  }
}
function Ja(e10, n14) {
  Ka = e10;
  Ya = qa = null;
  e10 = e10.dependencies;
  null !== e10 && null !== e10.firstContext && (0 !== (e10.lanes & n14) && (Wo = true), e10.firstContext = null);
}
function eu(e10) {
  var n14 = e10._currentValue;
  if (Ya !== e10) if (e10 = { context: e10, memoizedValue: n14, next: null }, null === qa) {
    if (null === Ka) throw Error(u3(308));
    qa = e10;
    Ka.dependencies = { lanes: 0, firstContext: e10 };
  } else qa = qa.next = e10;
  return n14;
}
var nu = null;
function tu(e10) {
  null === nu ? nu = [e10] : nu.push(e10);
}
function ru(e10, n14, t18, r10) {
  var l12 = n14.interleaved;
  null === l12 ? (t18.next = t18, tu(n14)) : (t18.next = l12.next, l12.next = t18);
  n14.interleaved = t18;
  return lu(e10, r10);
}
function lu(e10, n14) {
  e10.lanes |= n14;
  var t18 = e10.alternate;
  null !== t18 && (t18.lanes |= n14);
  t18 = e10;
  for (e10 = e10.return; null !== e10; ) e10.childLanes |= n14, t18 = e10.alternate, null !== t18 && (t18.childLanes |= n14), t18 = e10, e10 = e10.return;
  return 3 === t18.tag ? t18.stateNode : null;
}
var au = false;
function uu(e10) {
  e10.updateQueue = { baseState: e10.memoizedState, firstBaseUpdate: null, lastBaseUpdate: null, shared: { pending: null, interleaved: null, lanes: 0 }, effects: null };
}
function ou(e10, n14) {
  e10 = e10.updateQueue;
  n14.updateQueue === e10 && (n14.updateQueue = { baseState: e10.baseState, firstBaseUpdate: e10.firstBaseUpdate, lastBaseUpdate: e10.lastBaseUpdate, shared: e10.shared, effects: e10.effects });
}
function iu(e10, n14) {
  return { eventTime: e10, lane: n14, tag: 0, payload: null, callback: null, next: null };
}
function su(e10, n14, t18) {
  var r10 = e10.updateQueue;
  if (null === r10) return null;
  r10 = r10.shared;
  if (0 !== (es & 2)) {
    var l12 = r10.pending;
    null === l12 ? n14.next = n14 : (n14.next = l12.next, l12.next = n14);
    r10.pending = n14;
    return lu(e10, t18);
  }
  l12 = r10.interleaved;
  null === l12 ? (n14.next = n14, tu(r10)) : (n14.next = l12.next, l12.next = n14);
  r10.interleaved = n14;
  return lu(e10, t18);
}
function cu(e10, n14, t18) {
  n14 = n14.updateQueue;
  if (null !== n14 && (n14 = n14.shared, 0 !== (t18 & 4194240))) {
    var r10 = n14.lanes;
    r10 &= e10.pendingLanes;
    t18 |= r10;
    n14.lanes = t18;
    Pn(e10, t18);
  }
}
function fu(e10, n14) {
  var t18 = e10.updateQueue, r10 = e10.alternate;
  if (null !== r10 && (r10 = r10.updateQueue, t18 === r10)) {
    var l12 = null, a20 = null;
    t18 = t18.firstBaseUpdate;
    if (null !== t18) {
      do {
        var u6 = { eventTime: t18.eventTime, lane: t18.lane, tag: t18.tag, payload: t18.payload, callback: t18.callback, next: null };
        null === a20 ? l12 = a20 = u6 : a20 = a20.next = u6;
        t18 = t18.next;
      } while (null !== t18);
      null === a20 ? l12 = a20 = n14 : a20 = a20.next = n14;
    } else l12 = a20 = n14;
    t18 = { baseState: r10.baseState, firstBaseUpdate: l12, lastBaseUpdate: a20, shared: r10.shared, effects: r10.effects };
    e10.updateQueue = t18;
    return;
  }
  e10 = t18.lastBaseUpdate;
  null === e10 ? t18.firstBaseUpdate = n14 : e10.next = n14;
  t18.lastBaseUpdate = n14;
}
function du(e10, n14, t18, r10) {
  var l12 = e10.updateQueue;
  au = false;
  var a20 = l12.firstBaseUpdate, u6 = l12.lastBaseUpdate, o21 = l12.shared.pending;
  if (null !== o21) {
    l12.shared.pending = null;
    var i19 = o21, s19 = i19.next;
    i19.next = null;
    null === u6 ? a20 = s19 : u6.next = s19;
    u6 = i19;
    var c16 = e10.alternate;
    null !== c16 && (c16 = c16.updateQueue, o21 = c16.lastBaseUpdate, o21 !== u6 && (null === o21 ? c16.firstBaseUpdate = s19 : o21.next = s19, c16.lastBaseUpdate = i19));
  }
  if (null !== a20) {
    var f7 = l12.baseState;
    u6 = 0;
    c16 = s19 = i19 = null;
    o21 = a20;
    do {
      var d6 = o21.lane, p9 = o21.eventTime;
      if ((r10 & d6) === d6) {
        null !== c16 && (c16 = c16.next = { eventTime: p9, lane: 0, tag: o21.tag, payload: o21.payload, callback: o21.callback, next: null });
        e: {
          var h7 = e10, m8 = o21;
          d6 = n14;
          p9 = t18;
          switch (m8.tag) {
            case 1:
              h7 = m8.payload;
              if ("function" === typeof h7) {
                f7 = h7.call(p9, f7, d6);
                break e;
              }
              f7 = h7;
              break e;
            case 3:
              h7.flags = h7.flags & -65537 | 128;
            case 0:
              h7 = m8.payload;
              d6 = "function" === typeof h7 ? h7.call(p9, f7, d6) : h7;
              if (null === d6 || void 0 === d6) break e;
              f7 = A2({}, f7, d6);
              break e;
            case 2:
              au = true;
          }
        }
        null !== o21.callback && 0 !== o21.lane && (e10.flags |= 64, d6 = l12.effects, null === d6 ? l12.effects = [o21] : d6.push(o21));
      } else p9 = { eventTime: p9, lane: d6, tag: o21.tag, payload: o21.payload, callback: o21.callback, next: null }, null === c16 ? (s19 = c16 = p9, i19 = f7) : c16 = c16.next = p9, u6 |= d6;
      o21 = o21.next;
      if (null === o21) if (o21 = l12.shared.pending, null === o21) break;
      else d6 = o21, o21 = d6.next, d6.next = null, l12.lastBaseUpdate = d6, l12.shared.pending = null;
    } while (1);
    null === c16 && (i19 = f7);
    l12.baseState = i19;
    l12.firstBaseUpdate = s19;
    l12.lastBaseUpdate = c16;
    n14 = l12.shared.interleaved;
    if (null !== n14) {
      l12 = n14;
      do {
        u6 |= l12.lane, l12 = l12.next;
      } while (l12 !== n14);
    } else null === a20 && (l12.shared.lanes = 0);
    is |= u6;
    e10.lanes = u6;
    e10.memoizedState = f7;
  }
}
function pu(e10, n14, t18) {
  e10 = n14.effects;
  n14.effects = null;
  if (null !== e10) for (n14 = 0; n14 < e10.length; n14++) {
    var r10 = e10[n14], l12 = r10.callback;
    if (null !== l12) {
      r10.callback = null;
      r10 = t18;
      if ("function" !== typeof l12) throw Error(u3(191, l12));
      l12.call(r10);
    }
  }
}
var hu = {};
var mu = Kl(hu);
var gu = Kl(hu);
var vu = Kl(hu);
function yu(e10) {
  if (e10 === hu) throw Error(u3(174));
  return e10;
}
function bu(e10, n14) {
  Yl(vu, n14);
  Yl(gu, e10);
  Yl(mu, hu);
  e10 = n14.nodeType;
  switch (e10) {
    case 9:
    case 11:
      n14 = (n14 = n14.documentElement) ? n14.namespaceURI : pe2(null, "");
      break;
    default:
      e10 = 8 === e10 ? n14.parentNode : n14, n14 = e10.namespaceURI || null, e10 = e10.tagName, n14 = pe2(n14, e10);
  }
  ql(mu);
  Yl(mu, n14);
}
function ku() {
  ql(mu);
  ql(gu);
  ql(vu);
}
function wu(e10) {
  yu(vu.current);
  var n14 = yu(mu.current);
  var t18 = pe2(n14, e10.type);
  n14 !== t18 && (Yl(gu, e10), Yl(mu, t18));
}
function Su(e10) {
  gu.current === e10 && (ql(mu), ql(gu));
}
var xu = Kl(0);
function Eu(e10) {
  for (var n14 = e10; null !== n14; ) {
    if (13 === n14.tag) {
      var t18 = n14.memoizedState;
      if (null !== t18 && (t18 = t18.dehydrated, null === t18 || "$?" === t18.data || "$!" === t18.data)) return n14;
    } else if (19 === n14.tag && void 0 !== n14.memoizedProps.revealOrder) {
      if (0 !== (n14.flags & 128)) return n14;
    } else if (null !== n14.child) {
      n14.child.return = n14;
      n14 = n14.child;
      continue;
    }
    if (n14 === e10) break;
    for (; null === n14.sibling; ) {
      if (null === n14.return || n14.return === e10) return null;
      n14 = n14.return;
    }
    n14.sibling.return = n14.return;
    n14 = n14.sibling;
  }
  return null;
}
var Cu = [];
function Nu() {
  for (var e10 = 0; e10 < Cu.length; e10++) Cu[e10]._workInProgressVersionPrimary = null;
  Cu.length = 0;
}
var _u = E2.ReactCurrentDispatcher;
var zu = E2.ReactCurrentBatchConfig;
var Pu = 0;
var Lu = null;
var Tu = null;
var Mu = null;
var Fu = false;
var Ru = false;
var Du = 0;
var Ou = 0;
function Iu() {
  throw Error(u3(321));
}
function Uu(e10, n14) {
  if (null === n14) return false;
  for (var t18 = 0; t18 < n14.length && t18 < e10.length; t18++) if (!zr(e10[t18], n14[t18])) return false;
  return true;
}
function Vu(e10, n14, t18, r10, l12, a20) {
  Pu = a20;
  Lu = n14;
  n14.memoizedState = null;
  n14.updateQueue = null;
  n14.lanes = 0;
  _u.current = null === e10 || null === e10.memoizedState ? xo : Eo;
  e10 = t18(r10, l12);
  if (Ru) {
    a20 = 0;
    do {
      Ru = false;
      Du = 0;
      if (25 <= a20) throw Error(u3(301));
      a20 += 1;
      Mu = Tu = null;
      n14.updateQueue = null;
      _u.current = Co;
      e10 = t18(r10, l12);
    } while (Ru);
  }
  _u.current = So;
  n14 = null !== Tu && null !== Tu.next;
  Pu = 0;
  Mu = Tu = Lu = null;
  Fu = false;
  if (n14) throw Error(u3(300));
  return e10;
}
function Au() {
  var e10 = 0 !== Du;
  Du = 0;
  return e10;
}
function Bu() {
  var e10 = { memoizedState: null, baseState: null, baseQueue: null, queue: null, next: null };
  null === Mu ? Lu.memoizedState = Mu = e10 : Mu = Mu.next = e10;
  return Mu;
}
function Hu() {
  if (null === Tu) {
    var e10 = Lu.alternate;
    e10 = null !== e10 ? e10.memoizedState : null;
  } else e10 = Tu.next;
  var n14 = null === Mu ? Lu.memoizedState : Mu.next;
  if (null !== n14) Mu = n14, Tu = e10;
  else {
    if (null === e10) throw Error(u3(310));
    Tu = e10;
    e10 = { memoizedState: Tu.memoizedState, baseState: Tu.baseState, baseQueue: Tu.baseQueue, queue: Tu.queue, next: null };
    null === Mu ? Lu.memoizedState = Mu = e10 : Mu = Mu.next = e10;
  }
  return Mu;
}
function Wu(e10, n14) {
  return "function" === typeof n14 ? n14(e10) : n14;
}
function Qu(e10) {
  var n14 = Hu(), t18 = n14.queue;
  if (null === t18) throw Error(u3(311));
  t18.lastRenderedReducer = e10;
  var r10 = Tu, l12 = r10.baseQueue, a20 = t18.pending;
  if (null !== a20) {
    if (null !== l12) {
      var o21 = l12.next;
      l12.next = a20.next;
      a20.next = o21;
    }
    r10.baseQueue = l12 = a20;
    t18.pending = null;
  }
  if (null !== l12) {
    a20 = l12.next;
    r10 = r10.baseState;
    var i19 = o21 = null, s19 = null, c16 = a20;
    do {
      var f7 = c16.lane;
      if ((Pu & f7) === f7) null !== s19 && (s19 = s19.next = { lane: 0, action: c16.action, hasEagerState: c16.hasEagerState, eagerState: c16.eagerState, next: null }), r10 = c16.hasEagerState ? c16.eagerState : e10(r10, c16.action);
      else {
        var d6 = { lane: f7, action: c16.action, hasEagerState: c16.hasEagerState, eagerState: c16.eagerState, next: null };
        null === s19 ? (i19 = s19 = d6, o21 = r10) : s19 = s19.next = d6;
        Lu.lanes |= f7;
        is |= f7;
      }
      c16 = c16.next;
    } while (null !== c16 && c16 !== a20);
    null === s19 ? o21 = r10 : s19.next = i19;
    zr(r10, n14.memoizedState) || (Wo = true);
    n14.memoizedState = r10;
    n14.baseState = o21;
    n14.baseQueue = s19;
    t18.lastRenderedState = r10;
  }
  e10 = t18.interleaved;
  if (null !== e10) {
    l12 = e10;
    do {
      a20 = l12.lane, Lu.lanes |= a20, is |= a20, l12 = l12.next;
    } while (l12 !== e10);
  } else null === l12 && (t18.lanes = 0);
  return [n14.memoizedState, t18.dispatch];
}
function ju(e10) {
  var n14 = Hu(), t18 = n14.queue;
  if (null === t18) throw Error(u3(311));
  t18.lastRenderedReducer = e10;
  var r10 = t18.dispatch, l12 = t18.pending, a20 = n14.memoizedState;
  if (null !== l12) {
    t18.pending = null;
    var o21 = l12 = l12.next;
    do {
      a20 = e10(a20, o21.action), o21 = o21.next;
    } while (o21 !== l12);
    zr(a20, n14.memoizedState) || (Wo = true);
    n14.memoizedState = a20;
    null === n14.baseQueue && (n14.baseState = a20);
    t18.lastRenderedState = a20;
  }
  return [a20, r10];
}
function $u() {
}
function Ku(e10, n14) {
  var t18 = Lu, r10 = Hu(), l12 = n14(), a20 = !zr(r10.memoizedState, l12);
  a20 && (r10.memoizedState = l12, Wo = true);
  r10 = r10.queue;
  ao(Xu.bind(null, t18, r10, e10), [e10]);
  if (r10.getSnapshot !== n14 || a20 || null !== Mu && Mu.memoizedState.tag & 1) {
    t18.flags |= 2048;
    eo(9, Yu.bind(null, t18, r10, l12, n14), void 0, null);
    if (null === ns) throw Error(u3(349));
    0 !== (Pu & 30) || qu(t18, n14, l12);
  }
  return l12;
}
function qu(e10, n14, t18) {
  e10.flags |= 16384;
  e10 = { getSnapshot: n14, value: t18 };
  n14 = Lu.updateQueue;
  null === n14 ? (n14 = { lastEffect: null, stores: null }, Lu.updateQueue = n14, n14.stores = [e10]) : (t18 = n14.stores, null === t18 ? n14.stores = [e10] : t18.push(e10));
}
function Yu(e10, n14, t18, r10) {
  n14.value = t18;
  n14.getSnapshot = r10;
  Gu(n14) && Zu(e10);
}
function Xu(e10, n14, t18) {
  return t18(function() {
    Gu(n14) && Zu(e10);
  });
}
function Gu(e10) {
  var n14 = e10.getSnapshot;
  e10 = e10.value;
  try {
    var t18 = n14();
    return !zr(e10, t18);
  } catch (e11) {
    return true;
  }
}
function Zu(e10) {
  var n14 = lu(e10, 1);
  null !== n14 && zs(n14, e10, 1, -1);
}
function Ju(e10) {
  var n14 = Bu();
  "function" === typeof e10 && (e10 = e10());
  n14.memoizedState = n14.baseState = e10;
  e10 = { pending: null, interleaved: null, lanes: 0, dispatch: null, lastRenderedReducer: Wu, lastRenderedState: e10 };
  n14.queue = e10;
  e10 = e10.dispatch = yo.bind(null, Lu, e10);
  return [n14.memoizedState, e10];
}
function eo(e10, n14, t18, r10) {
  e10 = { tag: e10, create: n14, destroy: t18, deps: r10, next: null };
  n14 = Lu.updateQueue;
  null === n14 ? (n14 = { lastEffect: null, stores: null }, Lu.updateQueue = n14, n14.lastEffect = e10.next = e10) : (t18 = n14.lastEffect, null === t18 ? n14.lastEffect = e10.next = e10 : (r10 = t18.next, t18.next = e10, e10.next = r10, n14.lastEffect = e10));
  return e10;
}
function no() {
  return Hu().memoizedState;
}
function to(e10, n14, t18, r10) {
  var l12 = Bu();
  Lu.flags |= e10;
  l12.memoizedState = eo(1 | n14, t18, void 0, void 0 === r10 ? null : r10);
}
function ro(e10, n14, t18, r10) {
  var l12 = Hu();
  r10 = void 0 === r10 ? null : r10;
  var a20 = void 0;
  if (null !== Tu) {
    var u6 = Tu.memoizedState;
    a20 = u6.destroy;
    if (null !== r10 && Uu(r10, u6.deps)) {
      l12.memoizedState = eo(n14, t18, a20, r10);
      return;
    }
  }
  Lu.flags |= e10;
  l12.memoizedState = eo(1 | n14, t18, a20, r10);
}
function lo(e10, n14) {
  return to(8390656, 8, e10, n14);
}
function ao(e10, n14) {
  return ro(2048, 8, e10, n14);
}
function uo(e10, n14) {
  return ro(4, 2, e10, n14);
}
function oo(e10, n14) {
  return ro(4, 4, e10, n14);
}
function io(e10, n14) {
  if ("function" === typeof n14) return e10 = e10(), n14(e10), function() {
    n14(null);
  };
  if (null !== n14 && void 0 !== n14) return e10 = e10(), n14.current = e10, function() {
    n14.current = null;
  };
}
function so(e10, n14, t18) {
  t18 = null !== t18 && void 0 !== t18 ? t18.concat([e10]) : null;
  return ro(4, 4, io.bind(null, n14, e10), t18);
}
function co() {
}
function fo(e10, n14) {
  var t18 = Hu();
  n14 = void 0 === n14 ? null : n14;
  var r10 = t18.memoizedState;
  if (null !== r10 && null !== n14 && Uu(n14, r10[1])) return r10[0];
  t18.memoizedState = [e10, n14];
  return e10;
}
function po(e10, n14) {
  var t18 = Hu();
  n14 = void 0 === n14 ? null : n14;
  var r10 = t18.memoizedState;
  if (null !== r10 && null !== n14 && Uu(n14, r10[1])) return r10[0];
  e10 = e10();
  t18.memoizedState = [e10, n14];
  return e10;
}
function ho(e10, n14, t18) {
  if (0 === (Pu & 21)) return e10.baseState && (e10.baseState = false, Wo = true), e10.memoizedState = t18;
  zr(t18, n14) || (t18 = Cn(), Lu.lanes |= t18, is |= t18, e10.baseState = true);
  return n14;
}
function mo(e10, n14) {
  var t18 = Ln;
  Ln = 0 !== t18 && 4 > t18 ? t18 : 4;
  e10(true);
  var r10 = zu.transition;
  zu.transition = {};
  try {
    e10(false), n14();
  } finally {
    Ln = t18, zu.transition = r10;
  }
}
function go() {
  return Hu().memoizedState;
}
function vo(e10, n14, t18) {
  var r10 = _s(e10);
  t18 = { lane: r10, action: t18, hasEagerState: false, eagerState: null, next: null };
  if (bo(e10)) ko(n14, t18);
  else if (t18 = ru(e10, n14, t18, r10), null !== t18) {
    var l12 = Ns();
    zs(t18, e10, r10, l12);
    wo(t18, n14, r10);
  }
}
function yo(e10, n14, t18) {
  var r10 = _s(e10), l12 = { lane: r10, action: t18, hasEagerState: false, eagerState: null, next: null };
  if (bo(e10)) ko(n14, l12);
  else {
    var a20 = e10.alternate;
    if (0 === e10.lanes && (null === a20 || 0 === a20.lanes) && (a20 = n14.lastRenderedReducer, null !== a20)) try {
      var u6 = n14.lastRenderedState, o21 = a20(u6, t18);
      l12.hasEagerState = true;
      l12.eagerState = o21;
      if (zr(o21, u6)) {
        var i19 = n14.interleaved;
        null === i19 ? (l12.next = l12, tu(n14)) : (l12.next = i19.next, i19.next = l12);
        n14.interleaved = l12;
        return;
      }
    } catch (e11) {
    } finally {
    }
    t18 = ru(e10, n14, l12, r10);
    null !== t18 && (l12 = Ns(), zs(t18, e10, r10, l12), wo(t18, n14, r10));
  }
}
function bo(e10) {
  var n14 = e10.alternate;
  return e10 === Lu || null !== n14 && n14 === Lu;
}
function ko(e10, n14) {
  Ru = Fu = true;
  var t18 = e10.pending;
  null === t18 ? n14.next = n14 : (n14.next = t18.next, t18.next = n14);
  e10.pending = n14;
}
function wo(e10, n14, t18) {
  if (0 !== (t18 & 4194240)) {
    var r10 = n14.lanes;
    r10 &= e10.pendingLanes;
    t18 |= r10;
    n14.lanes = t18;
    Pn(e10, t18);
  }
}
var So = { readContext: eu, useCallback: Iu, useContext: Iu, useEffect: Iu, useImperativeHandle: Iu, useInsertionEffect: Iu, useLayoutEffect: Iu, useMemo: Iu, useReducer: Iu, useRef: Iu, useState: Iu, useDebugValue: Iu, useDeferredValue: Iu, useTransition: Iu, useMutableSource: Iu, useSyncExternalStore: Iu, useId: Iu, unstable_isNewReconciler: false };
var xo = { readContext: eu, useCallback: function(e10, n14) {
  Bu().memoizedState = [e10, void 0 === n14 ? null : n14];
  return e10;
}, useContext: eu, useEffect: lo, useImperativeHandle: function(e10, n14, t18) {
  t18 = null !== t18 && void 0 !== t18 ? t18.concat([e10]) : null;
  return to(4194308, 4, io.bind(null, n14, e10), t18);
}, useLayoutEffect: function(e10, n14) {
  return to(4194308, 4, e10, n14);
}, useInsertionEffect: function(e10, n14) {
  return to(4, 2, e10, n14);
}, useMemo: function(e10, n14) {
  var t18 = Bu();
  n14 = void 0 === n14 ? null : n14;
  e10 = e10();
  t18.memoizedState = [e10, n14];
  return e10;
}, useReducer: function(e10, n14, t18) {
  var r10 = Bu();
  n14 = void 0 !== t18 ? t18(n14) : n14;
  r10.memoizedState = r10.baseState = n14;
  e10 = { pending: null, interleaved: null, lanes: 0, dispatch: null, lastRenderedReducer: e10, lastRenderedState: n14 };
  r10.queue = e10;
  e10 = e10.dispatch = vo.bind(null, Lu, e10);
  return [r10.memoizedState, e10];
}, useRef: function(e10) {
  var n14 = Bu();
  e10 = { current: e10 };
  return n14.memoizedState = e10;
}, useState: Ju, useDebugValue: co, useDeferredValue: function(e10) {
  return Bu().memoizedState = e10;
}, useTransition: function() {
  var e10 = Ju(false), n14 = e10[0];
  e10 = mo.bind(null, e10[1]);
  Bu().memoizedState = e10;
  return [n14, e10];
}, useMutableSource: function() {
}, useSyncExternalStore: function(e10, n14, t18) {
  var r10 = Lu, l12 = Bu();
  if (za) {
    if (void 0 === t18) throw Error(u3(407));
    t18 = t18();
  } else {
    t18 = n14();
    if (null === ns) throw Error(u3(349));
    0 !== (Pu & 30) || qu(r10, n14, t18);
  }
  l12.memoizedState = t18;
  var a20 = { value: t18, getSnapshot: n14 };
  l12.queue = a20;
  lo(Xu.bind(null, r10, a20, e10), [e10]);
  r10.flags |= 2048;
  eo(9, Yu.bind(null, r10, a20, t18, n14), void 0, null);
  return t18;
}, useId: function() {
  var e10 = Bu(), n14 = ns.identifierPrefix;
  if (za) {
    var t18 = wa;
    var r10 = ka;
    t18 = (r10 & ~(1 << 32 - hn(r10) - 1)).toString(32) + t18;
    n14 = ":" + n14 + "R" + t18;
    t18 = Du++;
    0 < t18 && (n14 += "H" + t18.toString(32));
    n14 += ":";
  } else t18 = Ou++, n14 = ":" + n14 + "r" + t18.toString(32) + ":";
  return e10.memoizedState = n14;
}, unstable_isNewReconciler: false };
var Eo = { readContext: eu, useCallback: fo, useContext: eu, useEffect: ao, useImperativeHandle: so, useInsertionEffect: uo, useLayoutEffect: oo, useMemo: po, useReducer: Qu, useRef: no, useState: function() {
  return Qu(Wu);
}, useDebugValue: co, useDeferredValue: function(e10) {
  var n14 = Hu();
  return ho(n14, Tu.memoizedState, e10);
}, useTransition: function() {
  var e10 = Qu(Wu)[0], n14 = Hu().memoizedState;
  return [e10, n14];
}, useMutableSource: $u, useSyncExternalStore: Ku, useId: go, unstable_isNewReconciler: false };
var Co = { readContext: eu, useCallback: fo, useContext: eu, useEffect: ao, useImperativeHandle: so, useInsertionEffect: uo, useLayoutEffect: oo, useMemo: po, useReducer: ju, useRef: no, useState: function() {
  return ju(Wu);
}, useDebugValue: co, useDeferredValue: function(e10) {
  var n14 = Hu();
  return null === Tu ? n14.memoizedState = e10 : ho(n14, Tu.memoizedState, e10);
}, useTransition: function() {
  var e10 = ju(Wu)[0], n14 = Hu().memoizedState;
  return [e10, n14];
}, useMutableSource: $u, useSyncExternalStore: Ku, useId: go, unstable_isNewReconciler: false };
function No(e10, n14) {
  if (e10 && e10.defaultProps) {
    n14 = A2({}, n14);
    e10 = e10.defaultProps;
    for (var t18 in e10) void 0 === n14[t18] && (n14[t18] = e10[t18]);
    return n14;
  }
  return n14;
}
function _o(e10, n14, t18, r10) {
  n14 = e10.memoizedState;
  t18 = t18(r10, n14);
  t18 = null === t18 || void 0 === t18 ? n14 : A2({}, n14, t18);
  e10.memoizedState = t18;
  0 === e10.lanes && (e10.updateQueue.baseState = t18);
}
var zo = { isMounted: function(e10) {
  return (e10 = e10._reactInternals) ? Ke(e10) === e10 : false;
}, enqueueSetState: function(e10, n14, t18) {
  e10 = e10._reactInternals;
  var r10 = Ns(), l12 = _s(e10), a20 = iu(r10, l12);
  a20.payload = n14;
  void 0 !== t18 && null !== t18 && (a20.callback = t18);
  n14 = su(e10, a20, l12);
  null !== n14 && (zs(n14, e10, l12, r10), cu(n14, e10, l12));
}, enqueueReplaceState: function(e10, n14, t18) {
  e10 = e10._reactInternals;
  var r10 = Ns(), l12 = _s(e10), a20 = iu(r10, l12);
  a20.tag = 1;
  a20.payload = n14;
  void 0 !== t18 && null !== t18 && (a20.callback = t18);
  n14 = su(e10, a20, l12);
  null !== n14 && (zs(n14, e10, l12, r10), cu(n14, e10, l12));
}, enqueueForceUpdate: function(e10, n14) {
  e10 = e10._reactInternals;
  var t18 = Ns(), r10 = _s(e10), l12 = iu(t18, r10);
  l12.tag = 2;
  void 0 !== n14 && null !== n14 && (l12.callback = n14);
  n14 = su(e10, l12, r10);
  null !== n14 && (zs(n14, e10, r10, t18), cu(n14, e10, r10));
} };
function Po(e10, n14, t18, r10, l12, a20, u6) {
  e10 = e10.stateNode;
  return "function" === typeof e10.shouldComponentUpdate ? e10.shouldComponentUpdate(r10, a20, u6) : n14.prototype && n14.prototype.isPureReactComponent ? !Pr(t18, r10) || !Pr(l12, a20) : true;
}
function Lo(e10, n14, t18) {
  var r10 = false, l12 = Xl;
  var a20 = n14.contextType;
  "object" === typeof a20 && null !== a20 ? a20 = eu(a20) : (l12 = na(n14) ? Jl : Gl.current, r10 = n14.contextTypes, a20 = (r10 = null !== r10 && void 0 !== r10) ? ea(e10, l12) : Xl);
  n14 = new n14(t18, a20);
  e10.memoizedState = null !== n14.state && void 0 !== n14.state ? n14.state : null;
  n14.updater = zo;
  e10.stateNode = n14;
  n14._reactInternals = e10;
  r10 && (e10 = e10.stateNode, e10.__reactInternalMemoizedUnmaskedChildContext = l12, e10.__reactInternalMemoizedMaskedChildContext = a20);
  return n14;
}
function To(e10, n14, t18, r10) {
  e10 = n14.state;
  "function" === typeof n14.componentWillReceiveProps && n14.componentWillReceiveProps(t18, r10);
  "function" === typeof n14.UNSAFE_componentWillReceiveProps && n14.UNSAFE_componentWillReceiveProps(t18, r10);
  n14.state !== e10 && zo.enqueueReplaceState(n14, n14.state, null);
}
function Mo(e10, n14, t18, r10) {
  var l12 = e10.stateNode;
  l12.props = t18;
  l12.state = e10.memoizedState;
  l12.refs = {};
  uu(e10);
  var a20 = n14.contextType;
  "object" === typeof a20 && null !== a20 ? l12.context = eu(a20) : (a20 = na(n14) ? Jl : Gl.current, l12.context = ea(e10, a20));
  l12.state = e10.memoizedState;
  a20 = n14.getDerivedStateFromProps;
  "function" === typeof a20 && (_o(e10, n14, a20, t18), l12.state = e10.memoizedState);
  "function" === typeof n14.getDerivedStateFromProps || "function" === typeof l12.getSnapshotBeforeUpdate || "function" !== typeof l12.UNSAFE_componentWillMount && "function" !== typeof l12.componentWillMount || (n14 = l12.state, "function" === typeof l12.componentWillMount && l12.componentWillMount(), "function" === typeof l12.UNSAFE_componentWillMount && l12.UNSAFE_componentWillMount(), n14 !== l12.state && zo.enqueueReplaceState(l12, l12.state, null), du(e10, t18, l12, r10), l12.state = e10.memoizedState);
  "function" === typeof l12.componentDidMount && (e10.flags |= 4194308);
}
function Fo(e10, n14) {
  try {
    var t18 = "", r10 = n14;
    do {
      t18 += j2(r10), r10 = r10.return;
    } while (r10);
    var l12 = t18;
  } catch (e11) {
    l12 = "\nError generating stack: " + e11.message + "\n" + e11.stack;
  }
  return { value: e10, source: n14, stack: l12, digest: null };
}
function Ro(e10, n14, t18) {
  return { value: e10, source: null, stack: null != t18 ? t18 : null, digest: null != n14 ? n14 : null };
}
function Do(e10, n14) {
  try {
    console.error(n14.value);
  } catch (e11) {
    setTimeout(function() {
      throw e11;
    });
  }
}
var Oo = "function" === typeof WeakMap ? WeakMap : Map;
function Io(e10, n14, t18) {
  t18 = iu(-1, t18);
  t18.tag = 3;
  t18.payload = { element: null };
  var r10 = n14.value;
  t18.callback = function() {
    gs || (gs = true, vs = r10);
    Do(e10, n14);
  };
  return t18;
}
function Uo(e10, n14, t18) {
  t18 = iu(-1, t18);
  t18.tag = 3;
  var r10 = e10.type.getDerivedStateFromError;
  if ("function" === typeof r10) {
    var l12 = n14.value;
    t18.payload = function() {
      return r10(l12);
    };
    t18.callback = function() {
      Do(e10, n14);
    };
  }
  var a20 = e10.stateNode;
  null !== a20 && "function" === typeof a20.componentDidCatch && (t18.callback = function() {
    Do(e10, n14);
    "function" !== typeof r10 && (null === ys ? ys = /* @__PURE__ */ new Set([this]) : ys.add(this));
    var t19 = n14.stack;
    this.componentDidCatch(n14.value, { componentStack: null !== t19 ? t19 : "" });
  });
  return t18;
}
function Vo(e10, n14, t18) {
  var r10 = e10.pingCache;
  if (null === r10) {
    r10 = e10.pingCache = new Oo();
    var l12 = /* @__PURE__ */ new Set();
    r10.set(n14, l12);
  } else l12 = r10.get(n14), void 0 === l12 && (l12 = /* @__PURE__ */ new Set(), r10.set(n14, l12));
  l12.has(t18) || (l12.add(t18), e10 = Js.bind(null, e10, n14, t18), n14.then(e10, e10));
}
function Ao(e10) {
  do {
    var n14;
    if (n14 = 13 === e10.tag) n14 = e10.memoizedState, n14 = null !== n14 ? null !== n14.dehydrated ? true : false : true;
    if (n14) return e10;
    e10 = e10.return;
  } while (null !== e10);
  return null;
}
function Bo(e10, n14, t18, r10, l12) {
  if (0 === (e10.mode & 1)) return e10 === n14 ? e10.flags |= 65536 : (e10.flags |= 128, t18.flags |= 131072, t18.flags &= -52805, 1 === t18.tag && (null === t18.alternate ? t18.tag = 17 : (n14 = iu(-1, 1), n14.tag = 2, su(t18, n14, 1))), t18.lanes |= 1), e10;
  e10.flags |= 65536;
  e10.lanes = l12;
  return e10;
}
var Ho = E2.ReactCurrentOwner;
var Wo = false;
function Qo(e10, n14, t18, r10) {
  n14.child = null === e10 ? ja(n14, null, t18, r10) : Qa(n14, e10.child, t18, r10);
}
function jo(e10, n14, t18, r10, l12) {
  t18 = t18.render;
  var a20 = n14.ref;
  Ja(n14, l12);
  r10 = Vu(e10, n14, t18, r10, a20, l12);
  t18 = Au();
  if (null !== e10 && !Wo) return n14.updateQueue = e10.updateQueue, n14.flags &= -2053, e10.lanes &= ~l12, fi(e10, n14, l12);
  za && t18 && Ea(n14);
  n14.flags |= 1;
  Qo(e10, n14, r10, l12);
  return n14.child;
}
function $o(e10, n14, t18, r10, l12) {
  if (null === e10) {
    var a20 = t18.type;
    if ("function" === typeof a20 && !oc(a20) && void 0 === a20.defaultProps && null === t18.compare && void 0 === t18.defaultProps) return n14.tag = 15, n14.type = a20, Ko(e10, n14, a20, r10, l12);
    e10 = cc(t18.type, null, r10, n14, n14.mode, l12);
    e10.ref = n14.ref;
    e10.return = n14;
    return n14.child = e10;
  }
  a20 = e10.child;
  if (0 === (e10.lanes & l12)) {
    var u6 = a20.memoizedProps;
    t18 = t18.compare;
    t18 = null !== t18 ? t18 : Pr;
    if (t18(u6, r10) && e10.ref === n14.ref) return fi(e10, n14, l12);
  }
  n14.flags |= 1;
  e10 = sc(a20, r10);
  e10.ref = n14.ref;
  e10.return = n14;
  return n14.child = e10;
}
function Ko(e10, n14, t18, r10, l12) {
  if (null !== e10) {
    var a20 = e10.memoizedProps;
    if (Pr(a20, r10) && e10.ref === n14.ref) if (Wo = false, n14.pendingProps = r10 = a20, 0 !== (e10.lanes & l12)) 0 !== (e10.flags & 131072) && (Wo = true);
    else return n14.lanes = e10.lanes, fi(e10, n14, l12);
  }
  return Xo(e10, n14, t18, r10, l12);
}
function qo(e10, n14, t18) {
  var r10 = n14.pendingProps, l12 = r10.children, a20 = null !== e10 ? e10.memoizedState : null;
  if ("hidden" === r10.mode) if (0 === (n14.mode & 1)) n14.memoizedState = { baseLanes: 0, cachePool: null, transitions: null }, Yl(as, ls), ls |= t18;
  else {
    if (0 === (t18 & 1073741824)) return e10 = null !== a20 ? a20.baseLanes | t18 : t18, n14.lanes = n14.childLanes = 1073741824, n14.memoizedState = { baseLanes: e10, cachePool: null, transitions: null }, n14.updateQueue = null, Yl(as, ls), ls |= e10, null;
    n14.memoizedState = { baseLanes: 0, cachePool: null, transitions: null };
    r10 = null !== a20 ? a20.baseLanes : t18;
    Yl(as, ls);
    ls |= r10;
  }
  else null !== a20 ? (r10 = a20.baseLanes | t18, n14.memoizedState = null) : r10 = t18, Yl(as, ls), ls |= r10;
  Qo(e10, n14, l12, t18);
  return n14.child;
}
function Yo(e10, n14) {
  var t18 = n14.ref;
  if (null === e10 && null !== t18 || null !== e10 && e10.ref !== t18) n14.flags |= 512, n14.flags |= 2097152;
}
function Xo(e10, n14, t18, r10, l12) {
  var a20 = na(t18) ? Jl : Gl.current;
  a20 = ea(n14, a20);
  Ja(n14, l12);
  t18 = Vu(e10, n14, t18, r10, a20, l12);
  r10 = Au();
  if (null !== e10 && !Wo) return n14.updateQueue = e10.updateQueue, n14.flags &= -2053, e10.lanes &= ~l12, fi(e10, n14, l12);
  za && r10 && Ea(n14);
  n14.flags |= 1;
  Qo(e10, n14, t18, l12);
  return n14.child;
}
function Go(e10, n14, t18, r10, l12) {
  if (na(t18)) {
    var a20 = true;
    aa(n14);
  } else a20 = false;
  Ja(n14, l12);
  if (null === n14.stateNode) ci(e10, n14), Lo(n14, t18, r10), Mo(n14, t18, r10, l12), r10 = true;
  else if (null === e10) {
    var u6 = n14.stateNode, o21 = n14.memoizedProps;
    u6.props = o21;
    var i19 = u6.context, s19 = t18.contextType;
    "object" === typeof s19 && null !== s19 ? s19 = eu(s19) : (s19 = na(t18) ? Jl : Gl.current, s19 = ea(n14, s19));
    var c16 = t18.getDerivedStateFromProps, f7 = "function" === typeof c16 || "function" === typeof u6.getSnapshotBeforeUpdate;
    f7 || "function" !== typeof u6.UNSAFE_componentWillReceiveProps && "function" !== typeof u6.componentWillReceiveProps || (o21 !== r10 || i19 !== s19) && To(n14, u6, r10, s19);
    au = false;
    var d6 = n14.memoizedState;
    u6.state = d6;
    du(n14, r10, u6, l12);
    i19 = n14.memoizedState;
    o21 !== r10 || d6 !== i19 || Zl.current || au ? ("function" === typeof c16 && (_o(n14, t18, c16, r10), i19 = n14.memoizedState), (o21 = au || Po(n14, t18, o21, r10, d6, i19, s19)) ? (f7 || "function" !== typeof u6.UNSAFE_componentWillMount && "function" !== typeof u6.componentWillMount || ("function" === typeof u6.componentWillMount && u6.componentWillMount(), "function" === typeof u6.UNSAFE_componentWillMount && u6.UNSAFE_componentWillMount()), "function" === typeof u6.componentDidMount && (n14.flags |= 4194308)) : ("function" === typeof u6.componentDidMount && (n14.flags |= 4194308), n14.memoizedProps = r10, n14.memoizedState = i19), u6.props = r10, u6.state = i19, u6.context = s19, r10 = o21) : ("function" === typeof u6.componentDidMount && (n14.flags |= 4194308), r10 = false);
  } else {
    u6 = n14.stateNode;
    ou(e10, n14);
    o21 = n14.memoizedProps;
    s19 = n14.type === n14.elementType ? o21 : No(n14.type, o21);
    u6.props = s19;
    f7 = n14.pendingProps;
    d6 = u6.context;
    i19 = t18.contextType;
    "object" === typeof i19 && null !== i19 ? i19 = eu(i19) : (i19 = na(t18) ? Jl : Gl.current, i19 = ea(n14, i19));
    var p9 = t18.getDerivedStateFromProps;
    (c16 = "function" === typeof p9 || "function" === typeof u6.getSnapshotBeforeUpdate) || "function" !== typeof u6.UNSAFE_componentWillReceiveProps && "function" !== typeof u6.componentWillReceiveProps || (o21 !== f7 || d6 !== i19) && To(n14, u6, r10, i19);
    au = false;
    d6 = n14.memoizedState;
    u6.state = d6;
    du(n14, r10, u6, l12);
    var h7 = n14.memoizedState;
    o21 !== f7 || d6 !== h7 || Zl.current || au ? ("function" === typeof p9 && (_o(n14, t18, p9, r10), h7 = n14.memoizedState), (s19 = au || Po(n14, t18, s19, r10, d6, h7, i19) || false) ? (c16 || "function" !== typeof u6.UNSAFE_componentWillUpdate && "function" !== typeof u6.componentWillUpdate || ("function" === typeof u6.componentWillUpdate && u6.componentWillUpdate(r10, h7, i19), "function" === typeof u6.UNSAFE_componentWillUpdate && u6.UNSAFE_componentWillUpdate(r10, h7, i19)), "function" === typeof u6.componentDidUpdate && (n14.flags |= 4), "function" === typeof u6.getSnapshotBeforeUpdate && (n14.flags |= 1024)) : ("function" !== typeof u6.componentDidUpdate || o21 === e10.memoizedProps && d6 === e10.memoizedState || (n14.flags |= 4), "function" !== typeof u6.getSnapshotBeforeUpdate || o21 === e10.memoizedProps && d6 === e10.memoizedState || (n14.flags |= 1024), n14.memoizedProps = r10, n14.memoizedState = h7), u6.props = r10, u6.state = h7, u6.context = i19, r10 = s19) : ("function" !== typeof u6.componentDidUpdate || o21 === e10.memoizedProps && d6 === e10.memoizedState || (n14.flags |= 4), "function" !== typeof u6.getSnapshotBeforeUpdate || o21 === e10.memoizedProps && d6 === e10.memoizedState || (n14.flags |= 1024), r10 = false);
  }
  return Zo(e10, n14, t18, r10, a20, l12);
}
function Zo(e10, n14, t18, r10, l12, a20) {
  Yo(e10, n14);
  var u6 = 0 !== (n14.flags & 128);
  if (!r10 && !u6) return l12 && ua(n14, t18, false), fi(e10, n14, a20);
  r10 = n14.stateNode;
  Ho.current = n14;
  var o21 = u6 && "function" !== typeof t18.getDerivedStateFromError ? null : r10.render();
  n14.flags |= 1;
  null !== e10 && u6 ? (n14.child = Qa(n14, e10.child, null, a20), n14.child = Qa(n14, null, o21, a20)) : Qo(e10, n14, o21, a20);
  n14.memoizedState = r10.state;
  l12 && ua(n14, t18, true);
  return n14.child;
}
function Jo(e10) {
  var n14 = e10.stateNode;
  n14.pendingContext ? ra(e10, n14.pendingContext, n14.pendingContext !== n14.context) : n14.context && ra(e10, n14.context, false);
  bu(e10, n14.containerInfo);
}
function ei(e10, n14, t18, r10, l12) {
  Ia();
  Ua(l12);
  n14.flags |= 256;
  Qo(e10, n14, t18, r10);
  return n14.child;
}
var ni = { dehydrated: null, treeContext: null, retryLane: 0 };
function ti(e10) {
  return { baseLanes: e10, cachePool: null, transitions: null };
}
function ri(e10, n14, t18) {
  var r10 = n14.pendingProps, l12 = xu.current, a20 = false, u6 = 0 !== (n14.flags & 128), o21;
  (o21 = u6) || (o21 = null !== e10 && null === e10.memoizedState ? false : 0 !== (l12 & 2));
  if (o21) a20 = true, n14.flags &= -129;
  else if (null === e10 || null !== e10.memoizedState) l12 |= 1;
  Yl(xu, l12 & 1);
  if (null === e10) {
    Fa(n14);
    e10 = n14.memoizedState;
    if (null !== e10 && (e10 = e10.dehydrated, null !== e10)) return 0 === (n14.mode & 1) ? n14.lanes = 1 : "$!" === e10.data ? n14.lanes = 8 : n14.lanes = 1073741824, null;
    u6 = r10.children;
    e10 = r10.fallback;
    return a20 ? (r10 = n14.mode, a20 = n14.child, u6 = { mode: "hidden", children: u6 }, 0 === (r10 & 1) && null !== a20 ? (a20.childLanes = 0, a20.pendingProps = u6) : a20 = dc(u6, r10, 0, null), e10 = fc(e10, r10, t18, null), a20.return = n14, e10.return = n14, a20.sibling = e10, n14.child = a20, n14.child.memoizedState = ti(t18), n14.memoizedState = ni, e10) : li(n14, u6);
  }
  l12 = e10.memoizedState;
  if (null !== l12 && (o21 = l12.dehydrated, null !== o21)) return ui(e10, n14, u6, r10, o21, l12, t18);
  if (a20) {
    a20 = r10.fallback;
    u6 = n14.mode;
    l12 = e10.child;
    o21 = l12.sibling;
    var i19 = { mode: "hidden", children: r10.children };
    0 === (u6 & 1) && n14.child !== l12 ? (r10 = n14.child, r10.childLanes = 0, r10.pendingProps = i19, n14.deletions = null) : (r10 = sc(l12, i19), r10.subtreeFlags = l12.subtreeFlags & 14680064);
    null !== o21 ? a20 = sc(o21, a20) : (a20 = fc(a20, u6, t18, null), a20.flags |= 2);
    a20.return = n14;
    r10.return = n14;
    r10.sibling = a20;
    n14.child = r10;
    r10 = a20;
    a20 = n14.child;
    u6 = e10.child.memoizedState;
    u6 = null === u6 ? ti(t18) : { baseLanes: u6.baseLanes | t18, cachePool: null, transitions: u6.transitions };
    a20.memoizedState = u6;
    a20.childLanes = e10.childLanes & ~t18;
    n14.memoizedState = ni;
    return r10;
  }
  a20 = e10.child;
  e10 = a20.sibling;
  r10 = sc(a20, { mode: "visible", children: r10.children });
  0 === (n14.mode & 1) && (r10.lanes = t18);
  r10.return = n14;
  r10.sibling = null;
  null !== e10 && (t18 = n14.deletions, null === t18 ? (n14.deletions = [e10], n14.flags |= 16) : t18.push(e10));
  n14.child = r10;
  n14.memoizedState = null;
  return r10;
}
function li(e10, n14) {
  n14 = dc({ mode: "visible", children: n14 }, e10.mode, 0, null);
  n14.return = e10;
  return e10.child = n14;
}
function ai(e10, n14, t18, r10) {
  null !== r10 && Ua(r10);
  Qa(n14, e10.child, null, t18);
  e10 = li(n14, n14.pendingProps.children);
  e10.flags |= 2;
  n14.memoizedState = null;
  return e10;
}
function ui(e10, n14, t18, r10, l12, a20, o21) {
  if (t18) {
    if (n14.flags & 256) return n14.flags &= -257, r10 = Ro(Error(u3(422))), ai(e10, n14, o21, r10);
    if (null !== n14.memoizedState) return n14.child = e10.child, n14.flags |= 128, null;
    a20 = r10.fallback;
    l12 = n14.mode;
    r10 = dc({ mode: "visible", children: r10.children }, l12, 0, null);
    a20 = fc(a20, l12, o21, null);
    a20.flags |= 2;
    r10.return = n14;
    a20.return = n14;
    r10.sibling = a20;
    n14.child = r10;
    0 !== (n14.mode & 1) && Qa(n14, e10.child, null, o21);
    n14.child.memoizedState = ti(o21);
    n14.memoizedState = ni;
    return a20;
  }
  if (0 === (n14.mode & 1)) return ai(e10, n14, o21, null);
  if ("$!" === l12.data) {
    r10 = l12.nextSibling && l12.nextSibling.dataset;
    if (r10) var i19 = r10.dgst;
    r10 = i19;
    a20 = Error(u3(419));
    r10 = Ro(a20, r10, void 0);
    return ai(e10, n14, o21, r10);
  }
  i19 = 0 !== (o21 & e10.childLanes);
  if (Wo || i19) {
    r10 = ns;
    if (null !== r10) {
      switch (o21 & -o21) {
        case 4:
          l12 = 2;
          break;
        case 16:
          l12 = 8;
          break;
        case 64:
        case 128:
        case 256:
        case 512:
        case 1024:
        case 2048:
        case 4096:
        case 8192:
        case 16384:
        case 32768:
        case 65536:
        case 131072:
        case 262144:
        case 524288:
        case 1048576:
        case 2097152:
        case 4194304:
        case 8388608:
        case 16777216:
        case 33554432:
        case 67108864:
          l12 = 32;
          break;
        case 536870912:
          l12 = 268435456;
          break;
        default:
          l12 = 0;
      }
      l12 = 0 !== (l12 & (r10.suspendedLanes | o21)) ? 0 : l12;
      0 !== l12 && l12 !== a20.retryLane && (a20.retryLane = l12, lu(e10, l12), zs(r10, e10, l12, -1));
    }
    Hs();
    r10 = Ro(Error(u3(421)));
    return ai(e10, n14, o21, r10);
  }
  if ("$?" === l12.data) return n14.flags |= 128, n14.child = e10.child, n14 = nc.bind(null, e10), l12._reactRetry = n14, null;
  e10 = a20.treeContext;
  _a = Ml(l12.nextSibling);
  Na = n14;
  za = true;
  Pa = null;
  null !== e10 && (va[ya++] = ka, va[ya++] = wa, va[ya++] = ba, ka = e10.id, wa = e10.overflow, ba = n14);
  n14 = li(n14, r10.children);
  n14.flags |= 4096;
  return n14;
}
function oi(e10, n14, t18) {
  e10.lanes |= n14;
  var r10 = e10.alternate;
  null !== r10 && (r10.lanes |= n14);
  Za(e10.return, n14, t18);
}
function ii(e10, n14, t18, r10, l12) {
  var a20 = e10.memoizedState;
  null === a20 ? e10.memoizedState = { isBackwards: n14, rendering: null, renderingStartTime: 0, last: r10, tail: t18, tailMode: l12 } : (a20.isBackwards = n14, a20.rendering = null, a20.renderingStartTime = 0, a20.last = r10, a20.tail = t18, a20.tailMode = l12);
}
function si(e10, n14, t18) {
  var r10 = n14.pendingProps, l12 = r10.revealOrder, a20 = r10.tail;
  Qo(e10, n14, r10.children, t18);
  r10 = xu.current;
  if (0 !== (r10 & 2)) r10 = r10 & 1 | 2, n14.flags |= 128;
  else {
    if (null !== e10 && 0 !== (e10.flags & 128)) e: for (e10 = n14.child; null !== e10; ) {
      if (13 === e10.tag) null !== e10.memoizedState && oi(e10, t18, n14);
      else if (19 === e10.tag) oi(e10, t18, n14);
      else if (null !== e10.child) {
        e10.child.return = e10;
        e10 = e10.child;
        continue;
      }
      if (e10 === n14) break e;
      for (; null === e10.sibling; ) {
        if (null === e10.return || e10.return === n14) break e;
        e10 = e10.return;
      }
      e10.sibling.return = e10.return;
      e10 = e10.sibling;
    }
    r10 &= 1;
  }
  Yl(xu, r10);
  if (0 === (n14.mode & 1)) n14.memoizedState = null;
  else switch (l12) {
    case "forwards":
      t18 = n14.child;
      for (l12 = null; null !== t18; ) e10 = t18.alternate, null !== e10 && null === Eu(e10) && (l12 = t18), t18 = t18.sibling;
      t18 = l12;
      null === t18 ? (l12 = n14.child, n14.child = null) : (l12 = t18.sibling, t18.sibling = null);
      ii(n14, false, l12, t18, a20);
      break;
    case "backwards":
      t18 = null;
      l12 = n14.child;
      for (n14.child = null; null !== l12; ) {
        e10 = l12.alternate;
        if (null !== e10 && null === Eu(e10)) {
          n14.child = l12;
          break;
        }
        e10 = l12.sibling;
        l12.sibling = t18;
        t18 = l12;
        l12 = e10;
      }
      ii(n14, true, t18, null, a20);
      break;
    case "together":
      ii(n14, false, null, null, void 0);
      break;
    default:
      n14.memoizedState = null;
  }
  return n14.child;
}
function ci(e10, n14) {
  0 === (n14.mode & 1) && null !== e10 && (e10.alternate = null, n14.alternate = null, n14.flags |= 2);
}
function fi(e10, n14, t18) {
  null !== e10 && (n14.dependencies = e10.dependencies);
  is |= n14.lanes;
  if (0 === (t18 & n14.childLanes)) return null;
  if (null !== e10 && n14.child !== e10.child) throw Error(u3(153));
  if (null !== n14.child) {
    e10 = n14.child;
    t18 = sc(e10, e10.pendingProps);
    n14.child = t18;
    for (t18.return = n14; null !== e10.sibling; ) e10 = e10.sibling, t18 = t18.sibling = sc(e10, e10.pendingProps), t18.return = n14;
    t18.sibling = null;
  }
  return n14.child;
}
function di(e10, n14, t18) {
  switch (n14.tag) {
    case 3:
      Jo(n14);
      Ia();
      break;
    case 5:
      wu(n14);
      break;
    case 1:
      na(n14.type) && aa(n14);
      break;
    case 4:
      bu(n14, n14.stateNode.containerInfo);
      break;
    case 10:
      var r10 = n14.type._context, l12 = n14.memoizedProps.value;
      Yl($a, r10._currentValue);
      r10._currentValue = l12;
      break;
    case 13:
      r10 = n14.memoizedState;
      if (null !== r10) {
        if (null !== r10.dehydrated) return Yl(xu, xu.current & 1), n14.flags |= 128, null;
        if (0 !== (t18 & n14.child.childLanes)) return ri(e10, n14, t18);
        Yl(xu, xu.current & 1);
        e10 = fi(e10, n14, t18);
        return null !== e10 ? e10.sibling : null;
      }
      Yl(xu, xu.current & 1);
      break;
    case 19:
      r10 = 0 !== (t18 & n14.childLanes);
      if (0 !== (e10.flags & 128)) {
        if (r10) return si(e10, n14, t18);
        n14.flags |= 128;
      }
      l12 = n14.memoizedState;
      null !== l12 && (l12.rendering = null, l12.tail = null, l12.lastEffect = null);
      Yl(xu, xu.current);
      if (r10) break;
      else return null;
    case 22:
    case 23:
      return n14.lanes = 0, qo(e10, n14, t18);
  }
  return fi(e10, n14, t18);
}
var pi;
var hi;
var mi;
var gi;
pi = function(e10, n14) {
  for (var t18 = n14.child; null !== t18; ) {
    if (5 === t18.tag || 6 === t18.tag) e10.appendChild(t18.stateNode);
    else if (4 !== t18.tag && null !== t18.child) {
      t18.child.return = t18;
      t18 = t18.child;
      continue;
    }
    if (t18 === n14) break;
    for (; null === t18.sibling; ) {
      if (null === t18.return || t18.return === n14) return;
      t18 = t18.return;
    }
    t18.sibling.return = t18.return;
    t18 = t18.sibling;
  }
};
hi = function() {
};
mi = function(e10, n14, t18, r10) {
  var l12 = e10.memoizedProps;
  if (l12 !== r10) {
    e10 = n14.stateNode;
    yu(mu.current);
    var a20 = null;
    switch (t18) {
      case "input":
        l12 = ee2(e10, l12);
        r10 = ee2(e10, r10);
        a20 = [];
        break;
      case "select":
        l12 = A2({}, l12, { value: void 0 });
        r10 = A2({}, r10, { value: void 0 });
        a20 = [];
        break;
      case "textarea":
        l12 = ie2(e10, l12);
        r10 = ie2(e10, r10);
        a20 = [];
        break;
      default:
        "function" !== typeof l12.onClick && "function" === typeof r10.onClick && (e10.onclick = Sl);
    }
    Se(t18, r10);
    var u6;
    t18 = null;
    for (c16 in l12) if (!r10.hasOwnProperty(c16) && l12.hasOwnProperty(c16) && null != l12[c16]) if ("style" === c16) {
      var o21 = l12[c16];
      for (u6 in o21) o21.hasOwnProperty(u6) && (t18 || (t18 = {}), t18[u6] = "");
    } else "dangerouslySetInnerHTML" !== c16 && "children" !== c16 && "suppressContentEditableWarning" !== c16 && "suppressHydrationWarning" !== c16 && "autoFocus" !== c16 && (i3.hasOwnProperty(c16) ? a20 || (a20 = []) : (a20 = a20 || []).push(c16, null));
    for (c16 in r10) {
      var s19 = r10[c16];
      o21 = null != l12 ? l12[c16] : void 0;
      if (r10.hasOwnProperty(c16) && s19 !== o21 && (null != s19 || null != o21)) if ("style" === c16) if (o21) {
        for (u6 in o21) !o21.hasOwnProperty(u6) || s19 && s19.hasOwnProperty(u6) || (t18 || (t18 = {}), t18[u6] = "");
        for (u6 in s19) s19.hasOwnProperty(u6) && o21[u6] !== s19[u6] && (t18 || (t18 = {}), t18[u6] = s19[u6]);
      } else t18 || (a20 || (a20 = []), a20.push(c16, t18)), t18 = s19;
      else "dangerouslySetInnerHTML" === c16 ? (s19 = s19 ? s19.__html : void 0, o21 = o21 ? o21.__html : void 0, null != s19 && o21 !== s19 && (a20 = a20 || []).push(c16, s19)) : "children" === c16 ? "string" !== typeof s19 && "number" !== typeof s19 || (a20 = a20 || []).push(c16, "" + s19) : "suppressContentEditableWarning" !== c16 && "suppressHydrationWarning" !== c16 && (i3.hasOwnProperty(c16) ? (null != s19 && "onScroll" === c16 && il("scroll", e10), a20 || o21 === s19 || (a20 = [])) : (a20 = a20 || []).push(c16, s19));
    }
    t18 && (a20 = a20 || []).push("style", t18);
    var c16 = a20;
    if (n14.updateQueue = c16) n14.flags |= 4;
  }
};
gi = function(e10, n14, t18, r10) {
  t18 !== r10 && (n14.flags |= 4);
};
function vi(e10, n14) {
  if (!za) switch (e10.tailMode) {
    case "hidden":
      n14 = e10.tail;
      for (var t18 = null; null !== n14; ) null !== n14.alternate && (t18 = n14), n14 = n14.sibling;
      null === t18 ? e10.tail = null : t18.sibling = null;
      break;
    case "collapsed":
      t18 = e10.tail;
      for (var r10 = null; null !== t18; ) null !== t18.alternate && (r10 = t18), t18 = t18.sibling;
      null === r10 ? n14 || null === e10.tail ? e10.tail = null : e10.tail.sibling = null : r10.sibling = null;
  }
}
function yi(e10) {
  var n14 = null !== e10.alternate && e10.alternate.child === e10.child, t18 = 0, r10 = 0;
  if (n14) for (var l12 = e10.child; null !== l12; ) t18 |= l12.lanes | l12.childLanes, r10 |= l12.subtreeFlags & 14680064, r10 |= l12.flags & 14680064, l12.return = e10, l12 = l12.sibling;
  else for (l12 = e10.child; null !== l12; ) t18 |= l12.lanes | l12.childLanes, r10 |= l12.subtreeFlags, r10 |= l12.flags, l12.return = e10, l12 = l12.sibling;
  e10.subtreeFlags |= r10;
  e10.childLanes = t18;
  return n14;
}
function bi(e10, n14, t18) {
  var r10 = n14.pendingProps;
  Ca(n14);
  switch (n14.tag) {
    case 2:
    case 16:
    case 15:
    case 0:
    case 11:
    case 7:
    case 8:
    case 12:
    case 9:
    case 14:
      return yi(n14), null;
    case 1:
      return na(n14.type) && ta(), yi(n14), null;
    case 3:
      r10 = n14.stateNode;
      ku();
      ql(Zl);
      ql(Gl);
      Nu();
      r10.pendingContext && (r10.context = r10.pendingContext, r10.pendingContext = null);
      if (null === e10 || null === e10.child) Da(n14) ? n14.flags |= 4 : null === e10 || e10.memoizedState.isDehydrated && 0 === (n14.flags & 256) || (n14.flags |= 1024, null !== Pa && (Ms(Pa), Pa = null));
      hi(e10, n14);
      yi(n14);
      return null;
    case 5:
      Su(n14);
      var l12 = yu(vu.current);
      t18 = n14.type;
      if (null !== e10 && null != n14.stateNode) mi(e10, n14, t18, r10, l12), e10.ref !== n14.ref && (n14.flags |= 512, n14.flags |= 2097152);
      else {
        if (!r10) {
          if (null === n14.stateNode) throw Error(u3(166));
          yi(n14);
          return null;
        }
        e10 = yu(mu.current);
        if (Da(n14)) {
          r10 = n14.stateNode;
          t18 = n14.type;
          var a20 = n14.memoizedProps;
          r10[Dl] = n14;
          r10[Ol] = a20;
          e10 = 0 !== (n14.mode & 1);
          switch (t18) {
            case "dialog":
              il("cancel", r10);
              il("close", r10);
              break;
            case "iframe":
            case "object":
            case "embed":
              il("load", r10);
              break;
            case "video":
            case "audio":
              for (l12 = 0; l12 < ll.length; l12++) il(ll[l12], r10);
              break;
            case "source":
              il("error", r10);
              break;
            case "img":
            case "image":
            case "link":
              il("error", r10);
              il("load", r10);
              break;
            case "details":
              il("toggle", r10);
              break;
            case "input":
              ne2(r10, a20);
              il("invalid", r10);
              break;
            case "select":
              r10._wrapperState = { wasMultiple: !!a20.multiple };
              il("invalid", r10);
              break;
            case "textarea":
              se2(r10, a20), il("invalid", r10);
          }
          Se(t18, a20);
          l12 = null;
          for (var o21 in a20) if (a20.hasOwnProperty(o21)) {
            var s19 = a20[o21];
            "children" === o21 ? "string" === typeof s19 ? r10.textContent !== s19 && (true !== a20.suppressHydrationWarning && wl(r10.textContent, s19, e10), l12 = ["children", s19]) : "number" === typeof s19 && r10.textContent !== "" + s19 && (true !== a20.suppressHydrationWarning && wl(r10.textContent, s19, e10), l12 = ["children", "" + s19]) : i3.hasOwnProperty(o21) && null != s19 && "onScroll" === o21 && il("scroll", r10);
          }
          switch (t18) {
            case "input":
              G2(r10);
              le2(r10, a20, true);
              break;
            case "textarea":
              G2(r10);
              fe2(r10);
              break;
            case "select":
            case "option":
              break;
            default:
              "function" === typeof a20.onClick && (r10.onclick = Sl);
          }
          r10 = l12;
          n14.updateQueue = r10;
          null !== r10 && (n14.flags |= 4);
        } else {
          o21 = 9 === l12.nodeType ? l12 : l12.ownerDocument;
          "http://www.w3.org/1999/xhtml" === e10 && (e10 = de2(t18));
          "http://www.w3.org/1999/xhtml" === e10 ? "script" === t18 ? (e10 = o21.createElement("div"), e10.innerHTML = "<script><\/script>", e10 = e10.removeChild(e10.firstChild)) : "string" === typeof r10.is ? e10 = o21.createElement(t18, { is: r10.is }) : (e10 = o21.createElement(t18), "select" === t18 && (o21 = e10, r10.multiple ? o21.multiple = true : r10.size && (o21.size = r10.size))) : e10 = o21.createElementNS(e10, t18);
          e10[Dl] = n14;
          e10[Ol] = r10;
          pi(e10, n14, false, false);
          n14.stateNode = e10;
          e: {
            o21 = xe2(t18, r10);
            switch (t18) {
              case "dialog":
                il("cancel", e10);
                il("close", e10);
                l12 = r10;
                break;
              case "iframe":
              case "object":
              case "embed":
                il("load", e10);
                l12 = r10;
                break;
              case "video":
              case "audio":
                for (l12 = 0; l12 < ll.length; l12++) il(ll[l12], e10);
                l12 = r10;
                break;
              case "source":
                il("error", e10);
                l12 = r10;
                break;
              case "img":
              case "image":
              case "link":
                il("error", e10);
                il("load", e10);
                l12 = r10;
                break;
              case "details":
                il("toggle", e10);
                l12 = r10;
                break;
              case "input":
                ne2(e10, r10);
                l12 = ee2(e10, r10);
                il("invalid", e10);
                break;
              case "option":
                l12 = r10;
                break;
              case "select":
                e10._wrapperState = { wasMultiple: !!r10.multiple };
                l12 = A2({}, r10, { value: void 0 });
                il("invalid", e10);
                break;
              case "textarea":
                se2(e10, r10);
                l12 = ie2(e10, r10);
                il("invalid", e10);
                break;
              default:
                l12 = r10;
            }
            Se(t18, l12);
            s19 = l12;
            for (a20 in s19) if (s19.hasOwnProperty(a20)) {
              var c16 = s19[a20];
              "style" === a20 ? ke(e10, c16) : "dangerouslySetInnerHTML" === a20 ? (c16 = c16 ? c16.__html : void 0, null != c16 && me2(e10, c16)) : "children" === a20 ? "string" === typeof c16 ? ("textarea" !== t18 || "" !== c16) && ge(e10, c16) : "number" === typeof c16 && ge(e10, "" + c16) : "suppressContentEditableWarning" !== a20 && "suppressHydrationWarning" !== a20 && "autoFocus" !== a20 && (i3.hasOwnProperty(a20) ? null != c16 && "onScroll" === a20 && il("scroll", e10) : null != c16 && x3(e10, a20, c16, o21));
            }
            switch (t18) {
              case "input":
                G2(e10);
                le2(e10, r10, false);
                break;
              case "textarea":
                G2(e10);
                fe2(e10);
                break;
              case "option":
                null != r10.value && e10.setAttribute("value", "" + q2(r10.value));
                break;
              case "select":
                e10.multiple = !!r10.multiple;
                a20 = r10.value;
                null != a20 ? oe2(e10, !!r10.multiple, a20, false) : null != r10.defaultValue && oe2(e10, !!r10.multiple, r10.defaultValue, true);
                break;
              default:
                "function" === typeof l12.onClick && (e10.onclick = Sl);
            }
            switch (t18) {
              case "button":
              case "input":
              case "select":
              case "textarea":
                r10 = !!r10.autoFocus;
                break e;
              case "img":
                r10 = true;
                break e;
              default:
                r10 = false;
            }
          }
          r10 && (n14.flags |= 4);
        }
        null !== n14.ref && (n14.flags |= 512, n14.flags |= 2097152);
      }
      yi(n14);
      return null;
    case 6:
      if (e10 && null != n14.stateNode) gi(e10, n14, e10.memoizedProps, r10);
      else {
        if ("string" !== typeof r10 && null === n14.stateNode) throw Error(u3(166));
        t18 = yu(vu.current);
        yu(mu.current);
        if (Da(n14)) {
          r10 = n14.stateNode;
          t18 = n14.memoizedProps;
          r10[Dl] = n14;
          if (a20 = r10.nodeValue !== t18) {
            if (e10 = Na, null !== e10) switch (e10.tag) {
              case 3:
                wl(r10.nodeValue, t18, 0 !== (e10.mode & 1));
                break;
              case 5:
                true !== e10.memoizedProps.suppressHydrationWarning && wl(r10.nodeValue, t18, 0 !== (e10.mode & 1));
            }
          }
          a20 && (n14.flags |= 4);
        } else r10 = (9 === t18.nodeType ? t18 : t18.ownerDocument).createTextNode(r10), r10[Dl] = n14, n14.stateNode = r10;
      }
      yi(n14);
      return null;
    case 13:
      ql(xu);
      r10 = n14.memoizedState;
      if (null === e10 || null !== e10.memoizedState && null !== e10.memoizedState.dehydrated) {
        if (za && null !== _a && 0 !== (n14.mode & 1) && 0 === (n14.flags & 128)) Oa(), Ia(), n14.flags |= 98560, a20 = false;
        else if (a20 = Da(n14), null !== r10 && null !== r10.dehydrated) {
          if (null === e10) {
            if (!a20) throw Error(u3(318));
            a20 = n14.memoizedState;
            a20 = null !== a20 ? a20.dehydrated : null;
            if (!a20) throw Error(u3(317));
            a20[Dl] = n14;
          } else Ia(), 0 === (n14.flags & 128) && (n14.memoizedState = null), n14.flags |= 4;
          yi(n14);
          a20 = false;
        } else null !== Pa && (Ms(Pa), Pa = null), a20 = true;
        if (!a20) return n14.flags & 65536 ? n14 : null;
      }
      if (0 !== (n14.flags & 128)) return n14.lanes = t18, n14;
      r10 = null !== r10;
      r10 !== (null !== e10 && null !== e10.memoizedState) && r10 && (n14.child.flags |= 8192, 0 !== (n14.mode & 1) && (null === e10 || 0 !== (xu.current & 1) ? 0 === us && (us = 3) : Hs()));
      null !== n14.updateQueue && (n14.flags |= 4);
      yi(n14);
      return null;
    case 4:
      return ku(), hi(e10, n14), null === e10 && fl(n14.stateNode.containerInfo), yi(n14), null;
    case 10:
      return Ga(n14.type._context), yi(n14), null;
    case 17:
      return na(n14.type) && ta(), yi(n14), null;
    case 19:
      ql(xu);
      a20 = n14.memoizedState;
      if (null === a20) return yi(n14), null;
      r10 = 0 !== (n14.flags & 128);
      o21 = a20.rendering;
      if (null === o21) if (r10) vi(a20, false);
      else {
        if (0 !== us || null !== e10 && 0 !== (e10.flags & 128)) for (e10 = n14.child; null !== e10; ) {
          o21 = Eu(e10);
          if (null !== o21) {
            n14.flags |= 128;
            vi(a20, false);
            r10 = o21.updateQueue;
            null !== r10 && (n14.updateQueue = r10, n14.flags |= 4);
            n14.subtreeFlags = 0;
            r10 = t18;
            for (t18 = n14.child; null !== t18; ) a20 = t18, e10 = r10, a20.flags &= 14680066, o21 = a20.alternate, null === o21 ? (a20.childLanes = 0, a20.lanes = e10, a20.child = null, a20.subtreeFlags = 0, a20.memoizedProps = null, a20.memoizedState = null, a20.updateQueue = null, a20.dependencies = null, a20.stateNode = null) : (a20.childLanes = o21.childLanes, a20.lanes = o21.lanes, a20.child = o21.child, a20.subtreeFlags = 0, a20.deletions = null, a20.memoizedProps = o21.memoizedProps, a20.memoizedState = o21.memoizedState, a20.updateQueue = o21.updateQueue, a20.type = o21.type, e10 = o21.dependencies, a20.dependencies = null === e10 ? null : { lanes: e10.lanes, firstContext: e10.firstContext }), t18 = t18.sibling;
            Yl(xu, xu.current & 1 | 2);
            return n14.child;
          }
          e10 = e10.sibling;
        }
        null !== a20.tail && rn() > hs && (n14.flags |= 128, r10 = true, vi(a20, false), n14.lanes = 4194304);
      }
      else {
        if (!r10) if (e10 = Eu(o21), null !== e10) {
          if (n14.flags |= 128, r10 = true, t18 = e10.updateQueue, null !== t18 && (n14.updateQueue = t18, n14.flags |= 4), vi(a20, true), null === a20.tail && "hidden" === a20.tailMode && !o21.alternate && !za) return yi(n14), null;
        } else 2 * rn() - a20.renderingStartTime > hs && 1073741824 !== t18 && (n14.flags |= 128, r10 = true, vi(a20, false), n14.lanes = 4194304);
        a20.isBackwards ? (o21.sibling = n14.child, n14.child = o21) : (t18 = a20.last, null !== t18 ? t18.sibling = o21 : n14.child = o21, a20.last = o21);
      }
      if (null !== a20.tail) return n14 = a20.tail, a20.rendering = n14, a20.tail = n14.sibling, a20.renderingStartTime = rn(), n14.sibling = null, t18 = xu.current, Yl(xu, r10 ? t18 & 1 | 2 : t18 & 1), n14;
      yi(n14);
      return null;
    case 22:
    case 23:
      return Us(), r10 = null !== n14.memoizedState, null !== e10 && null !== e10.memoizedState !== r10 && (n14.flags |= 8192), r10 && 0 !== (n14.mode & 1) ? 0 !== (ls & 1073741824) && (yi(n14), n14.subtreeFlags & 6 && (n14.flags |= 8192)) : yi(n14), null;
    case 24:
      return null;
    case 25:
      return null;
  }
  throw Error(u3(156, n14.tag));
}
function ki(e10, n14) {
  Ca(n14);
  switch (n14.tag) {
    case 1:
      return na(n14.type) && ta(), e10 = n14.flags, e10 & 65536 ? (n14.flags = e10 & -65537 | 128, n14) : null;
    case 3:
      return ku(), ql(Zl), ql(Gl), Nu(), e10 = n14.flags, 0 !== (e10 & 65536) && 0 === (e10 & 128) ? (n14.flags = e10 & -65537 | 128, n14) : null;
    case 5:
      return Su(n14), null;
    case 13:
      ql(xu);
      e10 = n14.memoizedState;
      if (null !== e10 && null !== e10.dehydrated) {
        if (null === n14.alternate) throw Error(u3(340));
        Ia();
      }
      e10 = n14.flags;
      return e10 & 65536 ? (n14.flags = e10 & -65537 | 128, n14) : null;
    case 19:
      return ql(xu), null;
    case 4:
      return ku(), null;
    case 10:
      return Ga(n14.type._context), null;
    case 22:
    case 23:
      return Us(), null;
    case 24:
      return null;
    default:
      return null;
  }
}
var wi = false;
var Si = false;
var xi = "function" === typeof WeakSet ? WeakSet : Set;
var Ei = null;
function Ci(e10, n14) {
  var t18 = e10.ref;
  if (null !== t18) if ("function" === typeof t18) try {
    t18(null);
  } catch (t19) {
    Zs(e10, n14, t19);
  }
  else t18.current = null;
}
function Ni(e10, n14, t18) {
  try {
    t18();
  } catch (t19) {
    Zs(e10, n14, t19);
  }
}
var _i = false;
function zi(e10, n14) {
  xl = tt;
  e10 = Fr();
  if (Rr(e10)) {
    if ("selectionStart" in e10) var t18 = { start: e10.selectionStart, end: e10.selectionEnd };
    else e: {
      t18 = (t18 = e10.ownerDocument) && t18.defaultView || window;
      var r10 = t18.getSelection && t18.getSelection();
      if (r10 && 0 !== r10.rangeCount) {
        t18 = r10.anchorNode;
        var l12 = r10.anchorOffset, a20 = r10.focusNode;
        r10 = r10.focusOffset;
        try {
          t18.nodeType, a20.nodeType;
        } catch (e11) {
          t18 = null;
          break e;
        }
        var o21 = 0, i19 = -1, s19 = -1, c16 = 0, f7 = 0, d6 = e10, p9 = null;
        n: for (; ; ) {
          for (var h7; ; ) {
            d6 !== t18 || 0 !== l12 && 3 !== d6.nodeType || (i19 = o21 + l12);
            d6 !== a20 || 0 !== r10 && 3 !== d6.nodeType || (s19 = o21 + r10);
            3 === d6.nodeType && (o21 += d6.nodeValue.length);
            if (null === (h7 = d6.firstChild)) break;
            p9 = d6;
            d6 = h7;
          }
          for (; ; ) {
            if (d6 === e10) break n;
            p9 === t18 && ++c16 === l12 && (i19 = o21);
            p9 === a20 && ++f7 === r10 && (s19 = o21);
            if (null !== (h7 = d6.nextSibling)) break;
            d6 = p9;
            p9 = d6.parentNode;
          }
          d6 = h7;
        }
        t18 = -1 === i19 || -1 === s19 ? null : { start: i19, end: s19 };
      } else t18 = null;
    }
    t18 = t18 || { start: 0, end: 0 };
  } else t18 = null;
  El = { focusedElem: e10, selectionRange: t18 };
  tt = false;
  for (Ei = n14; null !== Ei; ) if (n14 = Ei, e10 = n14.child, 0 !== (n14.subtreeFlags & 1028) && null !== e10) e10.return = n14, Ei = e10;
  else for (; null !== Ei; ) {
    n14 = Ei;
    try {
      var m8 = n14.alternate;
      if (0 !== (n14.flags & 1024)) switch (n14.tag) {
        case 0:
        case 11:
        case 15:
          break;
        case 1:
          if (null !== m8) {
            var g6 = m8.memoizedProps, v6 = m8.memoizedState, y6 = n14.stateNode, b5 = y6.getSnapshotBeforeUpdate(n14.elementType === n14.type ? g6 : No(n14.type, g6), v6);
            y6.__reactInternalSnapshotBeforeUpdate = b5;
          }
          break;
        case 3:
          var k5 = n14.stateNode.containerInfo;
          1 === k5.nodeType ? k5.textContent = "" : 9 === k5.nodeType && k5.documentElement && k5.removeChild(k5.documentElement);
          break;
        case 5:
        case 6:
        case 4:
        case 17:
          break;
        default:
          throw Error(u3(163));
      }
    } catch (e11) {
      Zs(n14, n14.return, e11);
    }
    e10 = n14.sibling;
    if (null !== e10) {
      e10.return = n14.return;
      Ei = e10;
      break;
    }
    Ei = n14.return;
  }
  m8 = _i;
  _i = false;
  return m8;
}
function Pi(e10, n14, t18) {
  var r10 = n14.updateQueue;
  r10 = null !== r10 ? r10.lastEffect : null;
  if (null !== r10) {
    var l12 = r10 = r10.next;
    do {
      if ((l12.tag & e10) === e10) {
        var a20 = l12.destroy;
        l12.destroy = void 0;
        void 0 !== a20 && Ni(n14, t18, a20);
      }
      l12 = l12.next;
    } while (l12 !== r10);
  }
}
function Li(e10, n14) {
  n14 = n14.updateQueue;
  n14 = null !== n14 ? n14.lastEffect : null;
  if (null !== n14) {
    var t18 = n14 = n14.next;
    do {
      if ((t18.tag & e10) === e10) {
        var r10 = t18.create;
        t18.destroy = r10();
      }
      t18 = t18.next;
    } while (t18 !== n14);
  }
}
function Ti(e10) {
  var n14 = e10.ref;
  if (null !== n14) {
    var t18 = e10.stateNode;
    switch (e10.tag) {
      case 5:
        e10 = t18;
        break;
      default:
        e10 = t18;
    }
    "function" === typeof n14 ? n14(e10) : n14.current = e10;
  }
}
function Mi(e10) {
  var n14 = e10.alternate;
  null !== n14 && (e10.alternate = null, Mi(n14));
  e10.child = null;
  e10.deletions = null;
  e10.sibling = null;
  5 === e10.tag && (n14 = e10.stateNode, null !== n14 && (delete n14[Dl], delete n14[Ol], delete n14[Ul], delete n14[Vl], delete n14[Al]));
  e10.stateNode = null;
  e10.return = null;
  e10.dependencies = null;
  e10.memoizedProps = null;
  e10.memoizedState = null;
  e10.pendingProps = null;
  e10.stateNode = null;
  e10.updateQueue = null;
}
function Fi(e10) {
  return 5 === e10.tag || 3 === e10.tag || 4 === e10.tag;
}
function Ri(e10) {
  e: for (; ; ) {
    for (; null === e10.sibling; ) {
      if (null === e10.return || Fi(e10.return)) return null;
      e10 = e10.return;
    }
    e10.sibling.return = e10.return;
    for (e10 = e10.sibling; 5 !== e10.tag && 6 !== e10.tag && 18 !== e10.tag; ) {
      if (e10.flags & 2) continue e;
      if (null === e10.child || 4 === e10.tag) continue e;
      else e10.child.return = e10, e10 = e10.child;
    }
    if (!(e10.flags & 2)) return e10.stateNode;
  }
}
function Di(e10, n14, t18) {
  var r10 = e10.tag;
  if (5 === r10 || 6 === r10) e10 = e10.stateNode, n14 ? 8 === t18.nodeType ? t18.parentNode.insertBefore(e10, n14) : t18.insertBefore(e10, n14) : (8 === t18.nodeType ? (n14 = t18.parentNode, n14.insertBefore(e10, t18)) : (n14 = t18, n14.appendChild(e10)), t18 = t18._reactRootContainer, null !== t18 && void 0 !== t18 || null !== n14.onclick || (n14.onclick = Sl));
  else if (4 !== r10 && (e10 = e10.child, null !== e10)) for (Di(e10, n14, t18), e10 = e10.sibling; null !== e10; ) Di(e10, n14, t18), e10 = e10.sibling;
}
function Oi(e10, n14, t18) {
  var r10 = e10.tag;
  if (5 === r10 || 6 === r10) e10 = e10.stateNode, n14 ? t18.insertBefore(e10, n14) : t18.appendChild(e10);
  else if (4 !== r10 && (e10 = e10.child, null !== e10)) for (Oi(e10, n14, t18), e10 = e10.sibling; null !== e10; ) Oi(e10, n14, t18), e10 = e10.sibling;
}
var Ii = null;
var Ui = false;
function Vi(e10, n14, t18) {
  for (t18 = t18.child; null !== t18; ) Ai(e10, n14, t18), t18 = t18.sibling;
}
function Ai(e10, n14, t18) {
  if (dn && "function" === typeof dn.onCommitFiberUnmount) try {
    dn.onCommitFiberUnmount(fn, t18);
  } catch (e11) {
  }
  switch (t18.tag) {
    case 5:
      Si || Ci(t18, n14);
    case 6:
      var r10 = Ii, l12 = Ui;
      Ii = null;
      Vi(e10, n14, t18);
      Ii = r10;
      Ui = l12;
      null !== Ii && (Ui ? (e10 = Ii, t18 = t18.stateNode, 8 === e10.nodeType ? e10.parentNode.removeChild(t18) : e10.removeChild(t18)) : Ii.removeChild(t18.stateNode));
      break;
    case 18:
      null !== Ii && (Ui ? (e10 = Ii, t18 = t18.stateNode, 8 === e10.nodeType ? Tl(e10.parentNode, t18) : 1 === e10.nodeType && Tl(e10, t18), et(e10)) : Tl(Ii, t18.stateNode));
      break;
    case 4:
      r10 = Ii;
      l12 = Ui;
      Ii = t18.stateNode.containerInfo;
      Ui = true;
      Vi(e10, n14, t18);
      Ii = r10;
      Ui = l12;
      break;
    case 0:
    case 11:
    case 14:
    case 15:
      if (!Si && (r10 = t18.updateQueue, null !== r10 && (r10 = r10.lastEffect, null !== r10))) {
        l12 = r10 = r10.next;
        do {
          var a20 = l12, u6 = a20.destroy;
          a20 = a20.tag;
          void 0 !== u6 && (0 !== (a20 & 2) ? Ni(t18, n14, u6) : 0 !== (a20 & 4) && Ni(t18, n14, u6));
          l12 = l12.next;
        } while (l12 !== r10);
      }
      Vi(e10, n14, t18);
      break;
    case 1:
      if (!Si && (Ci(t18, n14), r10 = t18.stateNode, "function" === typeof r10.componentWillUnmount)) try {
        r10.props = t18.memoizedProps, r10.state = t18.memoizedState, r10.componentWillUnmount();
      } catch (e11) {
        Zs(t18, n14, e11);
      }
      Vi(e10, n14, t18);
      break;
    case 21:
      Vi(e10, n14, t18);
      break;
    case 22:
      t18.mode & 1 ? (Si = (r10 = Si) || null !== t18.memoizedState, Vi(e10, n14, t18), Si = r10) : Vi(e10, n14, t18);
      break;
    default:
      Vi(e10, n14, t18);
  }
}
function Bi(e10) {
  var n14 = e10.updateQueue;
  if (null !== n14) {
    e10.updateQueue = null;
    var t18 = e10.stateNode;
    null === t18 && (t18 = e10.stateNode = new xi());
    n14.forEach(function(n15) {
      var r10 = tc.bind(null, e10, n15);
      t18.has(n15) || (t18.add(n15), n15.then(r10, r10));
    });
  }
}
function Hi(e10, n14) {
  var t18 = n14.deletions;
  if (null !== t18) for (var r10 = 0; r10 < t18.length; r10++) {
    var l12 = t18[r10];
    try {
      var a20 = e10, o21 = n14, i19 = o21;
      e: for (; null !== i19; ) {
        switch (i19.tag) {
          case 5:
            Ii = i19.stateNode;
            Ui = false;
            break e;
          case 3:
            Ii = i19.stateNode.containerInfo;
            Ui = true;
            break e;
          case 4:
            Ii = i19.stateNode.containerInfo;
            Ui = true;
            break e;
        }
        i19 = i19.return;
      }
      if (null === Ii) throw Error(u3(160));
      Ai(a20, o21, l12);
      Ii = null;
      Ui = false;
      var s19 = l12.alternate;
      null !== s19 && (s19.return = null);
      l12.return = null;
    } catch (e11) {
      Zs(l12, n14, e11);
    }
  }
  if (n14.subtreeFlags & 12854) for (n14 = n14.child; null !== n14; ) Wi(n14, e10), n14 = n14.sibling;
}
function Wi(e10, n14) {
  var t18 = e10.alternate, r10 = e10.flags;
  switch (e10.tag) {
    case 0:
    case 11:
    case 14:
    case 15:
      Hi(n14, e10);
      Qi(e10);
      if (r10 & 4) {
        try {
          Pi(3, e10, e10.return), Li(3, e10);
        } catch (n15) {
          Zs(e10, e10.return, n15);
        }
        try {
          Pi(5, e10, e10.return);
        } catch (n15) {
          Zs(e10, e10.return, n15);
        }
      }
      break;
    case 1:
      Hi(n14, e10);
      Qi(e10);
      r10 & 512 && null !== t18 && Ci(t18, t18.return);
      break;
    case 5:
      Hi(n14, e10);
      Qi(e10);
      r10 & 512 && null !== t18 && Ci(t18, t18.return);
      if (e10.flags & 32) {
        var l12 = e10.stateNode;
        try {
          ge(l12, "");
        } catch (n15) {
          Zs(e10, e10.return, n15);
        }
      }
      if (r10 & 4 && (l12 = e10.stateNode, null != l12)) {
        var a20 = e10.memoizedProps, o21 = null !== t18 ? t18.memoizedProps : a20, i19 = e10.type, s19 = e10.updateQueue;
        e10.updateQueue = null;
        if (null !== s19) try {
          "input" === i19 && "radio" === a20.type && null != a20.name && te2(l12, a20);
          xe2(i19, o21);
          var c16 = xe2(i19, a20);
          for (o21 = 0; o21 < s19.length; o21 += 2) {
            var f7 = s19[o21], d6 = s19[o21 + 1];
            "style" === f7 ? ke(l12, d6) : "dangerouslySetInnerHTML" === f7 ? me2(l12, d6) : "children" === f7 ? ge(l12, d6) : x3(l12, f7, d6, c16);
          }
          switch (i19) {
            case "input":
              re2(l12, a20);
              break;
            case "textarea":
              ce2(l12, a20);
              break;
            case "select":
              var p9 = l12._wrapperState.wasMultiple;
              l12._wrapperState.wasMultiple = !!a20.multiple;
              var h7 = a20.value;
              null != h7 ? oe2(l12, !!a20.multiple, h7, false) : p9 !== !!a20.multiple && (null != a20.defaultValue ? oe2(l12, !!a20.multiple, a20.defaultValue, true) : oe2(l12, !!a20.multiple, a20.multiple ? [] : "", false));
          }
          l12[Ol] = a20;
        } catch (n15) {
          Zs(e10, e10.return, n15);
        }
      }
      break;
    case 6:
      Hi(n14, e10);
      Qi(e10);
      if (r10 & 4) {
        if (null === e10.stateNode) throw Error(u3(162));
        l12 = e10.stateNode;
        a20 = e10.memoizedProps;
        try {
          l12.nodeValue = a20;
        } catch (n15) {
          Zs(e10, e10.return, n15);
        }
      }
      break;
    case 3:
      Hi(n14, e10);
      Qi(e10);
      if (r10 & 4 && null !== t18 && t18.memoizedState.isDehydrated) try {
        et(n14.containerInfo);
      } catch (n15) {
        Zs(e10, e10.return, n15);
      }
      break;
    case 4:
      Hi(n14, e10);
      Qi(e10);
      break;
    case 13:
      Hi(n14, e10);
      Qi(e10);
      l12 = e10.child;
      l12.flags & 8192 && (a20 = null !== l12.memoizedState, l12.stateNode.isHidden = a20, !a20 || null !== l12.alternate && null !== l12.alternate.memoizedState || (ps = rn()));
      r10 & 4 && Bi(e10);
      break;
    case 22:
      f7 = null !== t18 && null !== t18.memoizedState;
      e10.mode & 1 ? (Si = (c16 = Si) || f7, Hi(n14, e10), Si = c16) : Hi(n14, e10);
      Qi(e10);
      if (r10 & 8192) {
        c16 = null !== e10.memoizedState;
        if ((e10.stateNode.isHidden = c16) && !f7 && 0 !== (e10.mode & 1)) for (Ei = e10, f7 = e10.child; null !== f7; ) {
          for (d6 = Ei = f7; null !== Ei; ) {
            p9 = Ei;
            h7 = p9.child;
            switch (p9.tag) {
              case 0:
              case 11:
              case 14:
              case 15:
                Pi(4, p9, p9.return);
                break;
              case 1:
                Ci(p9, p9.return);
                var m8 = p9.stateNode;
                if ("function" === typeof m8.componentWillUnmount) {
                  r10 = p9;
                  t18 = p9.return;
                  try {
                    n14 = r10, m8.props = n14.memoizedProps, m8.state = n14.memoizedState, m8.componentWillUnmount();
                  } catch (e11) {
                    Zs(r10, t18, e11);
                  }
                }
                break;
              case 5:
                Ci(p9, p9.return);
                break;
              case 22:
                if (null !== p9.memoizedState) {
                  qi(d6);
                  continue;
                }
            }
            null !== h7 ? (h7.return = p9, Ei = h7) : qi(d6);
          }
          f7 = f7.sibling;
        }
        e: for (f7 = null, d6 = e10; ; ) {
          if (5 === d6.tag) {
            if (null === f7) {
              f7 = d6;
              try {
                l12 = d6.stateNode, c16 ? (a20 = l12.style, "function" === typeof a20.setProperty ? a20.setProperty("display", "none", "important") : a20.display = "none") : (i19 = d6.stateNode, s19 = d6.memoizedProps.style, o21 = void 0 !== s19 && null !== s19 && s19.hasOwnProperty("display") ? s19.display : null, i19.style.display = be("display", o21));
              } catch (n15) {
                Zs(e10, e10.return, n15);
              }
            }
          } else if (6 === d6.tag) {
            if (null === f7) try {
              d6.stateNode.nodeValue = c16 ? "" : d6.memoizedProps;
            } catch (n15) {
              Zs(e10, e10.return, n15);
            }
          } else if ((22 !== d6.tag && 23 !== d6.tag || null === d6.memoizedState || d6 === e10) && null !== d6.child) {
            d6.child.return = d6;
            d6 = d6.child;
            continue;
          }
          if (d6 === e10) break e;
          for (; null === d6.sibling; ) {
            if (null === d6.return || d6.return === e10) break e;
            f7 === d6 && (f7 = null);
            d6 = d6.return;
          }
          f7 === d6 && (f7 = null);
          d6.sibling.return = d6.return;
          d6 = d6.sibling;
        }
      }
      break;
    case 19:
      Hi(n14, e10);
      Qi(e10);
      r10 & 4 && Bi(e10);
      break;
    case 21:
      break;
    default:
      Hi(n14, e10), Qi(e10);
  }
}
function Qi(e10) {
  var n14 = e10.flags;
  if (n14 & 2) {
    try {
      e: {
        for (var t18 = e10.return; null !== t18; ) {
          if (Fi(t18)) {
            var r10 = t18;
            break e;
          }
          t18 = t18.return;
        }
        throw Error(u3(160));
      }
      switch (r10.tag) {
        case 5:
          var l12 = r10.stateNode;
          r10.flags & 32 && (ge(l12, ""), r10.flags &= -33);
          var a20 = Ri(e10);
          Oi(e10, a20, l12);
          break;
        case 3:
        case 4:
          var o21 = r10.stateNode.containerInfo, i19 = Ri(e10);
          Di(e10, i19, o21);
          break;
        default:
          throw Error(u3(161));
      }
    } catch (n15) {
      Zs(e10, e10.return, n15);
    }
    e10.flags &= -3;
  }
  n14 & 4096 && (e10.flags &= -4097);
}
function ji(e10, n14, t18) {
  Ei = e10;
  $i(e10);
}
function $i(e10, n14, t18) {
  for (var r10 = 0 !== (e10.mode & 1); null !== Ei; ) {
    var l12 = Ei, a20 = l12.child;
    if (22 === l12.tag && r10) {
      var u6 = null !== l12.memoizedState || wi;
      if (!u6) {
        var o21 = l12.alternate, i19 = null !== o21 && null !== o21.memoizedState || Si;
        o21 = wi;
        var s19 = Si;
        wi = u6;
        if ((Si = i19) && !s19) for (Ei = l12; null !== Ei; ) u6 = Ei, i19 = u6.child, 22 === u6.tag && null !== u6.memoizedState ? Yi(l12) : null !== i19 ? (i19.return = u6, Ei = i19) : Yi(l12);
        for (; null !== a20; ) Ei = a20, $i(a20), a20 = a20.sibling;
        Ei = l12;
        wi = o21;
        Si = s19;
      }
      Ki(e10);
    } else 0 !== (l12.subtreeFlags & 8772) && null !== a20 ? (a20.return = l12, Ei = a20) : Ki(e10);
  }
}
function Ki(e10) {
  for (; null !== Ei; ) {
    var n14 = Ei;
    if (0 !== (n14.flags & 8772)) {
      var t18 = n14.alternate;
      try {
        if (0 !== (n14.flags & 8772)) switch (n14.tag) {
          case 0:
          case 11:
          case 15:
            Si || Li(5, n14);
            break;
          case 1:
            var r10 = n14.stateNode;
            if (n14.flags & 4 && !Si) if (null === t18) r10.componentDidMount();
            else {
              var l12 = n14.elementType === n14.type ? t18.memoizedProps : No(n14.type, t18.memoizedProps);
              r10.componentDidUpdate(l12, t18.memoizedState, r10.__reactInternalSnapshotBeforeUpdate);
            }
            var a20 = n14.updateQueue;
            null !== a20 && pu(n14, a20, r10);
            break;
          case 3:
            var o21 = n14.updateQueue;
            if (null !== o21) {
              t18 = null;
              if (null !== n14.child) switch (n14.child.tag) {
                case 5:
                  t18 = n14.child.stateNode;
                  break;
                case 1:
                  t18 = n14.child.stateNode;
              }
              pu(n14, o21, t18);
            }
            break;
          case 5:
            var i19 = n14.stateNode;
            if (null === t18 && n14.flags & 4) {
              t18 = i19;
              var s19 = n14.memoizedProps;
              switch (n14.type) {
                case "button":
                case "input":
                case "select":
                case "textarea":
                  s19.autoFocus && t18.focus();
                  break;
                case "img":
                  s19.src && (t18.src = s19.src);
              }
            }
            break;
          case 6:
            break;
          case 4:
            break;
          case 12:
            break;
          case 13:
            if (null === n14.memoizedState) {
              var c16 = n14.alternate;
              if (null !== c16) {
                var f7 = c16.memoizedState;
                if (null !== f7) {
                  var d6 = f7.dehydrated;
                  null !== d6 && et(d6);
                }
              }
            }
            break;
          case 19:
          case 17:
          case 21:
          case 22:
          case 23:
          case 25:
            break;
          default:
            throw Error(u3(163));
        }
        Si || n14.flags & 512 && Ti(n14);
      } catch (e11) {
        Zs(n14, n14.return, e11);
      }
    }
    if (n14 === e10) {
      Ei = null;
      break;
    }
    t18 = n14.sibling;
    if (null !== t18) {
      t18.return = n14.return;
      Ei = t18;
      break;
    }
    Ei = n14.return;
  }
}
function qi(e10) {
  for (; null !== Ei; ) {
    var n14 = Ei;
    if (n14 === e10) {
      Ei = null;
      break;
    }
    var t18 = n14.sibling;
    if (null !== t18) {
      t18.return = n14.return;
      Ei = t18;
      break;
    }
    Ei = n14.return;
  }
}
function Yi(e10) {
  for (; null !== Ei; ) {
    var n14 = Ei;
    try {
      switch (n14.tag) {
        case 0:
        case 11:
        case 15:
          var t18 = n14.return;
          try {
            Li(4, n14);
          } catch (e11) {
            Zs(n14, t18, e11);
          }
          break;
        case 1:
          var r10 = n14.stateNode;
          if ("function" === typeof r10.componentDidMount) {
            var l12 = n14.return;
            try {
              r10.componentDidMount();
            } catch (e11) {
              Zs(n14, l12, e11);
            }
          }
          var a20 = n14.return;
          try {
            Ti(n14);
          } catch (e11) {
            Zs(n14, a20, e11);
          }
          break;
        case 5:
          var u6 = n14.return;
          try {
            Ti(n14);
          } catch (e11) {
            Zs(n14, u6, e11);
          }
      }
    } catch (e11) {
      Zs(n14, n14.return, e11);
    }
    if (n14 === e10) {
      Ei = null;
      break;
    }
    var o21 = n14.sibling;
    if (null !== o21) {
      o21.return = n14.return;
      Ei = o21;
      break;
    }
    Ei = n14.return;
  }
}
var Xi = Math.ceil;
var Gi = E2.ReactCurrentDispatcher;
var Zi = E2.ReactCurrentOwner;
var Ji = E2.ReactCurrentBatchConfig;
var es = 0;
var ns = null;
var ts = null;
var rs = 0;
var ls = 0;
var as = Kl(0);
var us = 0;
var os = null;
var is = 0;
var ss = 0;
var cs = 0;
var fs = null;
var ds = null;
var ps = 0;
var hs = Infinity;
var ms = null;
var gs = false;
var vs = null;
var ys = null;
var bs = false;
var ks = null;
var ws = 0;
var Ss = 0;
var xs = null;
var Es = -1;
var Cs = 0;
function Ns() {
  return 0 !== (es & 6) ? rn() : -1 !== Es ? Es : Es = rn();
}
function _s(e10) {
  if (0 === (e10.mode & 1)) return 1;
  if (0 !== (es & 2) && 0 !== rs) return rs & -rs;
  if (null !== Va.transition) return 0 === Cs && (Cs = Cn()), Cs;
  e10 = Ln;
  if (0 !== e10) return e10;
  e10 = window.event;
  e10 = void 0 === e10 ? 16 : it(e10.type);
  return e10;
}
function zs(e10, n14, t18, r10) {
  if (50 < Ss) throw Ss = 0, xs = null, Error(u3(185));
  _n(e10, t18, r10);
  if (0 === (es & 2) || e10 !== ns) e10 === ns && (0 === (es & 2) && (ss |= t18), 4 === us && Rs(e10, rs)), Ps(e10, r10), 1 === t18 && 0 === es && 0 === (n14.mode & 1) && (hs = rn() + 500, ia && da());
}
function Ps(e10, n14) {
  var t18 = e10.callbackNode;
  xn(e10, n14);
  var r10 = wn(e10, e10 === ns ? rs : 0);
  if (0 === r10) null !== t18 && en(t18), e10.callbackNode = null, e10.callbackPriority = 0;
  else if (n14 = r10 & -r10, e10.callbackPriority !== n14) {
    null != t18 && en(t18);
    if (1 === n14) 0 === e10.tag ? fa(Ds.bind(null, e10)) : ca(Ds.bind(null, e10)), Pl(function() {
      0 === (es & 6) && da();
    }), t18 = null;
    else {
      switch (Tn(r10)) {
        case 1:
          t18 = an;
          break;
        case 4:
          t18 = un;
          break;
        case 16:
          t18 = on;
          break;
        case 536870912:
          t18 = cn;
          break;
        default:
          t18 = on;
      }
      t18 = lc(t18, Ls.bind(null, e10));
    }
    e10.callbackPriority = n14;
    e10.callbackNode = t18;
  }
}
function Ls(e10, n14) {
  Es = -1;
  Cs = 0;
  if (0 !== (es & 6)) throw Error(u3(327));
  var t18 = e10.callbackNode;
  if (Xs() && e10.callbackNode !== t18) return null;
  var r10 = wn(e10, e10 === ns ? rs : 0);
  if (0 === r10) return null;
  if (0 !== (r10 & 30) || 0 !== (r10 & e10.expiredLanes) || n14) n14 = Ws(e10, r10);
  else {
    n14 = r10;
    var l12 = es;
    es |= 2;
    var a20 = Bs();
    if (ns !== e10 || rs !== n14) ms = null, hs = rn() + 500, Vs(e10, n14);
    do {
      try {
        js();
        break;
      } catch (n15) {
        As(e10, n15);
      }
    } while (1);
    Xa();
    Gi.current = a20;
    es = l12;
    null !== ts ? n14 = 0 : (ns = null, rs = 0, n14 = us);
  }
  if (0 !== n14) {
    2 === n14 && (l12 = En(e10), 0 !== l12 && (r10 = l12, n14 = Ts(e10, l12)));
    if (1 === n14) throw t18 = os, Vs(e10, 0), Rs(e10, r10), Ps(e10, rn()), t18;
    if (6 === n14) Rs(e10, r10);
    else {
      l12 = e10.current.alternate;
      if (0 === (r10 & 30) && !Fs(l12) && (n14 = Ws(e10, r10), 2 === n14 && (a20 = En(e10), 0 !== a20 && (r10 = a20, n14 = Ts(e10, a20))), 1 === n14)) throw t18 = os, Vs(e10, 0), Rs(e10, r10), Ps(e10, rn()), t18;
      e10.finishedWork = l12;
      e10.finishedLanes = r10;
      switch (n14) {
        case 0:
        case 1:
          throw Error(u3(345));
        case 2:
          qs(e10, ds, ms);
          break;
        case 3:
          Rs(e10, r10);
          if ((r10 & 130023424) === r10 && (n14 = ps + 500 - rn(), 10 < n14)) {
            if (0 !== wn(e10, 0)) break;
            l12 = e10.suspendedLanes;
            if ((l12 & r10) !== r10) {
              Ns();
              e10.pingedLanes |= e10.suspendedLanes & l12;
              break;
            }
            e10.timeoutHandle = Nl(qs.bind(null, e10, ds, ms), n14);
            break;
          }
          qs(e10, ds, ms);
          break;
        case 4:
          Rs(e10, r10);
          if ((r10 & 4194240) === r10) break;
          n14 = e10.eventTimes;
          for (l12 = -1; 0 < r10; ) {
            var o21 = 31 - hn(r10);
            a20 = 1 << o21;
            o21 = n14[o21];
            o21 > l12 && (l12 = o21);
            r10 &= ~a20;
          }
          r10 = l12;
          r10 = rn() - r10;
          r10 = (120 > r10 ? 120 : 480 > r10 ? 480 : 1080 > r10 ? 1080 : 1920 > r10 ? 1920 : 3e3 > r10 ? 3e3 : 4320 > r10 ? 4320 : 1960 * Xi(r10 / 1960)) - r10;
          if (10 < r10) {
            e10.timeoutHandle = Nl(qs.bind(null, e10, ds, ms), r10);
            break;
          }
          qs(e10, ds, ms);
          break;
        case 5:
          qs(e10, ds, ms);
          break;
        default:
          throw Error(u3(329));
      }
    }
  }
  Ps(e10, rn());
  return e10.callbackNode === t18 ? Ls.bind(null, e10) : null;
}
function Ts(e10, n14) {
  var t18 = fs;
  e10.current.memoizedState.isDehydrated && (Vs(e10, n14).flags |= 256);
  e10 = Ws(e10, n14);
  2 !== e10 && (n14 = ds, ds = t18, null !== n14 && Ms(n14));
  return e10;
}
function Ms(e10) {
  null === ds ? ds = e10 : ds.push.apply(ds, e10);
}
function Fs(e10) {
  for (var n14 = e10; ; ) {
    if (n14.flags & 16384) {
      var t18 = n14.updateQueue;
      if (null !== t18 && (t18 = t18.stores, null !== t18)) for (var r10 = 0; r10 < t18.length; r10++) {
        var l12 = t18[r10], a20 = l12.getSnapshot;
        l12 = l12.value;
        try {
          if (!zr(a20(), l12)) return false;
        } catch (e11) {
          return false;
        }
      }
    }
    t18 = n14.child;
    if (n14.subtreeFlags & 16384 && null !== t18) t18.return = n14, n14 = t18;
    else {
      if (n14 === e10) break;
      for (; null === n14.sibling; ) {
        if (null === n14.return || n14.return === e10) return true;
        n14 = n14.return;
      }
      n14.sibling.return = n14.return;
      n14 = n14.sibling;
    }
  }
  return true;
}
function Rs(e10, n14) {
  n14 &= ~cs;
  n14 &= ~ss;
  e10.suspendedLanes |= n14;
  e10.pingedLanes &= ~n14;
  for (e10 = e10.expirationTimes; 0 < n14; ) {
    var t18 = 31 - hn(n14), r10 = 1 << t18;
    e10[t18] = -1;
    n14 &= ~r10;
  }
}
function Ds(e10) {
  if (0 !== (es & 6)) throw Error(u3(327));
  Xs();
  var n14 = wn(e10, 0);
  if (0 === (n14 & 1)) return Ps(e10, rn()), null;
  var t18 = Ws(e10, n14);
  if (0 !== e10.tag && 2 === t18) {
    var r10 = En(e10);
    0 !== r10 && (n14 = r10, t18 = Ts(e10, r10));
  }
  if (1 === t18) throw t18 = os, Vs(e10, 0), Rs(e10, n14), Ps(e10, rn()), t18;
  if (6 === t18) throw Error(u3(345));
  e10.finishedWork = e10.current.alternate;
  e10.finishedLanes = n14;
  qs(e10, ds, ms);
  Ps(e10, rn());
  return null;
}
function Os(e10, n14) {
  var t18 = es;
  es |= 1;
  try {
    return e10(n14);
  } finally {
    es = t18, 0 === es && (hs = rn() + 500, ia && da());
  }
}
function Is(e10) {
  null !== ks && 0 === ks.tag && 0 === (es & 6) && Xs();
  var n14 = es;
  es |= 1;
  var t18 = Ji.transition, r10 = Ln;
  try {
    if (Ji.transition = null, Ln = 1, e10) return e10();
  } finally {
    Ln = r10, Ji.transition = t18, es = n14, 0 === (es & 6) && da();
  }
}
function Us() {
  ls = as.current;
  ql(as);
}
function Vs(e10, n14) {
  e10.finishedWork = null;
  e10.finishedLanes = 0;
  var t18 = e10.timeoutHandle;
  -1 !== t18 && (e10.timeoutHandle = -1, _l(t18));
  if (null !== ts) for (t18 = ts.return; null !== t18; ) {
    var r10 = t18;
    Ca(r10);
    switch (r10.tag) {
      case 1:
        r10 = r10.type.childContextTypes;
        null !== r10 && void 0 !== r10 && ta();
        break;
      case 3:
        ku();
        ql(Zl);
        ql(Gl);
        Nu();
        break;
      case 5:
        Su(r10);
        break;
      case 4:
        ku();
        break;
      case 13:
        ql(xu);
        break;
      case 19:
        ql(xu);
        break;
      case 10:
        Ga(r10.type._context);
        break;
      case 22:
      case 23:
        Us();
    }
    t18 = t18.return;
  }
  ns = e10;
  ts = e10 = sc(e10.current, null);
  rs = ls = n14;
  us = 0;
  os = null;
  cs = ss = is = 0;
  ds = fs = null;
  if (null !== nu) {
    for (n14 = 0; n14 < nu.length; n14++) if (t18 = nu[n14], r10 = t18.interleaved, null !== r10) {
      t18.interleaved = null;
      var l12 = r10.next, a20 = t18.pending;
      if (null !== a20) {
        var u6 = a20.next;
        a20.next = l12;
        r10.next = u6;
      }
      t18.pending = r10;
    }
    nu = null;
  }
  return e10;
}
function As(e10, n14) {
  do {
    var t18 = ts;
    try {
      Xa();
      _u.current = So;
      if (Fu) {
        for (var r10 = Lu.memoizedState; null !== r10; ) {
          var l12 = r10.queue;
          null !== l12 && (l12.pending = null);
          r10 = r10.next;
        }
        Fu = false;
      }
      Pu = 0;
      Mu = Tu = Lu = null;
      Ru = false;
      Du = 0;
      Zi.current = null;
      if (null === t18 || null === t18.return) {
        us = 1;
        os = n14;
        ts = null;
        break;
      }
      e: {
        var a20 = e10, o21 = t18.return, i19 = t18, s19 = n14;
        n14 = rs;
        i19.flags |= 32768;
        if (null !== s19 && "object" === typeof s19 && "function" === typeof s19.then) {
          var c16 = s19, f7 = i19, d6 = f7.tag;
          if (0 === (f7.mode & 1) && (0 === d6 || 11 === d6 || 15 === d6)) {
            var p9 = f7.alternate;
            p9 ? (f7.updateQueue = p9.updateQueue, f7.memoizedState = p9.memoizedState, f7.lanes = p9.lanes) : (f7.updateQueue = null, f7.memoizedState = null);
          }
          var h7 = Ao(o21);
          if (null !== h7) {
            h7.flags &= -257;
            Bo(h7, o21, i19, a20, n14);
            h7.mode & 1 && Vo(a20, c16, n14);
            n14 = h7;
            s19 = c16;
            var m8 = n14.updateQueue;
            if (null === m8) {
              var g6 = /* @__PURE__ */ new Set();
              g6.add(s19);
              n14.updateQueue = g6;
            } else m8.add(s19);
            break e;
          } else {
            if (0 === (n14 & 1)) {
              Vo(a20, c16, n14);
              Hs();
              break e;
            }
            s19 = Error(u3(426));
          }
        } else if (za && i19.mode & 1) {
          var v6 = Ao(o21);
          if (null !== v6) {
            0 === (v6.flags & 65536) && (v6.flags |= 256);
            Bo(v6, o21, i19, a20, n14);
            Ua(Fo(s19, i19));
            break e;
          }
        }
        a20 = s19 = Fo(s19, i19);
        4 !== us && (us = 2);
        null === fs ? fs = [a20] : fs.push(a20);
        a20 = o21;
        do {
          switch (a20.tag) {
            case 3:
              a20.flags |= 65536;
              n14 &= -n14;
              a20.lanes |= n14;
              var y6 = Io(a20, s19, n14);
              fu(a20, y6);
              break e;
            case 1:
              i19 = s19;
              var b5 = a20.type, k5 = a20.stateNode;
              if (0 === (a20.flags & 128) && ("function" === typeof b5.getDerivedStateFromError || null !== k5 && "function" === typeof k5.componentDidCatch && (null === ys || !ys.has(k5)))) {
                a20.flags |= 65536;
                n14 &= -n14;
                a20.lanes |= n14;
                var w4 = Uo(a20, i19, n14);
                fu(a20, w4);
                break e;
              }
          }
          a20 = a20.return;
        } while (null !== a20);
      }
      Ks(t18);
    } catch (e11) {
      n14 = e11;
      ts === t18 && null !== t18 && (ts = t18 = t18.return);
      continue;
    }
    break;
  } while (1);
}
function Bs() {
  var e10 = Gi.current;
  Gi.current = So;
  return null === e10 ? So : e10;
}
function Hs() {
  if (0 === us || 3 === us || 2 === us) us = 4;
  null === ns || 0 === (is & 268435455) && 0 === (ss & 268435455) || Rs(ns, rs);
}
function Ws(e10, n14) {
  var t18 = es;
  es |= 2;
  var r10 = Bs();
  if (ns !== e10 || rs !== n14) ms = null, Vs(e10, n14);
  do {
    try {
      Qs();
      break;
    } catch (n15) {
      As(e10, n15);
    }
  } while (1);
  Xa();
  es = t18;
  Gi.current = r10;
  if (null !== ts) throw Error(u3(261));
  ns = null;
  rs = 0;
  return us;
}
function Qs() {
  for (; null !== ts; ) $s(ts);
}
function js() {
  for (; null !== ts && !nn(); ) $s(ts);
}
function $s(e10) {
  var n14 = rc(e10.alternate, e10, ls);
  e10.memoizedProps = e10.pendingProps;
  null === n14 ? Ks(e10) : ts = n14;
  Zi.current = null;
}
function Ks(e10) {
  var n14 = e10;
  do {
    var t18 = n14.alternate;
    e10 = n14.return;
    if (0 === (n14.flags & 32768)) {
      if (t18 = bi(t18, n14, ls), null !== t18) {
        ts = t18;
        return;
      }
    } else {
      t18 = ki(t18, n14);
      if (null !== t18) {
        t18.flags &= 32767;
        ts = t18;
        return;
      }
      if (null !== e10) e10.flags |= 32768, e10.subtreeFlags = 0, e10.deletions = null;
      else {
        us = 6;
        ts = null;
        return;
      }
    }
    n14 = n14.sibling;
    if (null !== n14) {
      ts = n14;
      return;
    }
    ts = n14 = e10;
  } while (null !== n14);
  0 === us && (us = 5);
}
function qs(e10, n14, t18) {
  var r10 = Ln, l12 = Ji.transition;
  try {
    Ji.transition = null, Ln = 1, Ys(e10, n14, t18, r10);
  } finally {
    Ji.transition = l12, Ln = r10;
  }
  return null;
}
function Ys(e10, n14, t18, r10) {
  do {
    Xs();
  } while (null !== ks);
  if (0 !== (es & 6)) throw Error(u3(327));
  t18 = e10.finishedWork;
  var l12 = e10.finishedLanes;
  if (null === t18) return null;
  e10.finishedWork = null;
  e10.finishedLanes = 0;
  if (t18 === e10.current) throw Error(u3(177));
  e10.callbackNode = null;
  e10.callbackPriority = 0;
  var a20 = t18.lanes | t18.childLanes;
  zn(e10, a20);
  e10 === ns && (ts = ns = null, rs = 0);
  0 === (t18.subtreeFlags & 2064) && 0 === (t18.flags & 2064) || bs || (bs = true, lc(on, function() {
    Xs();
    return null;
  }));
  a20 = 0 !== (t18.flags & 15990);
  if (0 !== (t18.subtreeFlags & 15990) || a20) {
    a20 = Ji.transition;
    Ji.transition = null;
    var o21 = Ln;
    Ln = 1;
    var i19 = es;
    es |= 4;
    Zi.current = null;
    zi(e10, t18);
    Wi(t18, e10);
    Dr(El);
    tt = !!xl;
    El = xl = null;
    e10.current = t18;
    ji(t18);
    tn();
    es = i19;
    Ln = o21;
    Ji.transition = a20;
  } else e10.current = t18;
  bs && (bs = false, ks = e10, ws = l12);
  a20 = e10.pendingLanes;
  0 === a20 && (ys = null);
  pn(t18.stateNode);
  Ps(e10, rn());
  if (null !== n14) for (r10 = e10.onRecoverableError, t18 = 0; t18 < n14.length; t18++) l12 = n14[t18], r10(l12.value, { componentStack: l12.stack, digest: l12.digest });
  if (gs) throw gs = false, e10 = vs, vs = null, e10;
  0 !== (ws & 1) && 0 !== e10.tag && Xs();
  a20 = e10.pendingLanes;
  0 !== (a20 & 1) ? e10 === xs ? Ss++ : (Ss = 0, xs = e10) : Ss = 0;
  da();
  return null;
}
function Xs() {
  if (null !== ks) {
    var e10 = Tn(ws), n14 = Ji.transition, t18 = Ln;
    try {
      Ji.transition = null;
      Ln = 16 > e10 ? 16 : e10;
      if (null === ks) var r10 = false;
      else {
        e10 = ks;
        ks = null;
        ws = 0;
        if (0 !== (es & 6)) throw Error(u3(331));
        var l12 = es;
        es |= 4;
        for (Ei = e10.current; null !== Ei; ) {
          var a20 = Ei, o21 = a20.child;
          if (0 !== (Ei.flags & 16)) {
            var i19 = a20.deletions;
            if (null !== i19) {
              for (var s19 = 0; s19 < i19.length; s19++) {
                var c16 = i19[s19];
                for (Ei = c16; null !== Ei; ) {
                  var f7 = Ei;
                  switch (f7.tag) {
                    case 0:
                    case 11:
                    case 15:
                      Pi(8, f7, a20);
                  }
                  var d6 = f7.child;
                  if (null !== d6) d6.return = f7, Ei = d6;
                  else for (; null !== Ei; ) {
                    f7 = Ei;
                    var p9 = f7.sibling, h7 = f7.return;
                    Mi(f7);
                    if (f7 === c16) {
                      Ei = null;
                      break;
                    }
                    if (null !== p9) {
                      p9.return = h7;
                      Ei = p9;
                      break;
                    }
                    Ei = h7;
                  }
                }
              }
              var m8 = a20.alternate;
              if (null !== m8) {
                var g6 = m8.child;
                if (null !== g6) {
                  m8.child = null;
                  do {
                    var v6 = g6.sibling;
                    g6.sibling = null;
                    g6 = v6;
                  } while (null !== g6);
                }
              }
              Ei = a20;
            }
          }
          if (0 !== (a20.subtreeFlags & 2064) && null !== o21) o21.return = a20, Ei = o21;
          else e: for (; null !== Ei; ) {
            a20 = Ei;
            if (0 !== (a20.flags & 2048)) switch (a20.tag) {
              case 0:
              case 11:
              case 15:
                Pi(9, a20, a20.return);
            }
            var y6 = a20.sibling;
            if (null !== y6) {
              y6.return = a20.return;
              Ei = y6;
              break e;
            }
            Ei = a20.return;
          }
        }
        var b5 = e10.current;
        for (Ei = b5; null !== Ei; ) {
          o21 = Ei;
          var k5 = o21.child;
          if (0 !== (o21.subtreeFlags & 2064) && null !== k5) k5.return = o21, Ei = k5;
          else e: for (o21 = b5; null !== Ei; ) {
            i19 = Ei;
            if (0 !== (i19.flags & 2048)) try {
              switch (i19.tag) {
                case 0:
                case 11:
                case 15:
                  Li(9, i19);
              }
            } catch (e11) {
              Zs(i19, i19.return, e11);
            }
            if (i19 === o21) {
              Ei = null;
              break e;
            }
            var w4 = i19.sibling;
            if (null !== w4) {
              w4.return = i19.return;
              Ei = w4;
              break e;
            }
            Ei = i19.return;
          }
        }
        es = l12;
        da();
        if (dn && "function" === typeof dn.onPostCommitFiberRoot) try {
          dn.onPostCommitFiberRoot(fn, e10);
        } catch (e11) {
        }
        r10 = true;
      }
      return r10;
    } finally {
      Ln = t18, Ji.transition = n14;
    }
  }
  return false;
}
function Gs(e10, n14, t18) {
  n14 = Fo(t18, n14);
  n14 = Io(e10, n14, 1);
  e10 = su(e10, n14, 1);
  n14 = Ns();
  null !== e10 && (_n(e10, 1, n14), Ps(e10, n14));
}
function Zs(e10, n14, t18) {
  if (3 === e10.tag) Gs(e10, e10, t18);
  else for (; null !== n14; ) {
    if (3 === n14.tag) {
      Gs(n14, e10, t18);
      break;
    } else if (1 === n14.tag) {
      var r10 = n14.stateNode;
      if ("function" === typeof n14.type.getDerivedStateFromError || "function" === typeof r10.componentDidCatch && (null === ys || !ys.has(r10))) {
        e10 = Fo(t18, e10);
        e10 = Uo(n14, e10, 1);
        n14 = su(n14, e10, 1);
        e10 = Ns();
        null !== n14 && (_n(n14, 1, e10), Ps(n14, e10));
        break;
      }
    }
    n14 = n14.return;
  }
}
function Js(e10, n14, t18) {
  var r10 = e10.pingCache;
  null !== r10 && r10.delete(n14);
  n14 = Ns();
  e10.pingedLanes |= e10.suspendedLanes & t18;
  ns === e10 && (rs & t18) === t18 && (4 === us || 3 === us && (rs & 130023424) === rs && 500 > rn() - ps ? Vs(e10, 0) : cs |= t18);
  Ps(e10, n14);
}
function ec(e10, n14) {
  0 === n14 && (0 === (e10.mode & 1) ? n14 = 1 : (n14 = bn, bn <<= 1, 0 === (bn & 130023424) && (bn = 4194304)));
  var t18 = Ns();
  e10 = lu(e10, n14);
  null !== e10 && (_n(e10, n14, t18), Ps(e10, t18));
}
function nc(e10) {
  var n14 = e10.memoizedState, t18 = 0;
  null !== n14 && (t18 = n14.retryLane);
  ec(e10, t18);
}
function tc(e10, n14) {
  var t18 = 0;
  switch (e10.tag) {
    case 13:
      var r10 = e10.stateNode;
      var l12 = e10.memoizedState;
      null !== l12 && (t18 = l12.retryLane);
      break;
    case 19:
      r10 = e10.stateNode;
      break;
    default:
      throw Error(u3(314));
  }
  null !== r10 && r10.delete(n14);
  ec(e10, t18);
}
var rc;
rc = function(e10, n14, t18) {
  if (null !== e10) if (e10.memoizedProps !== n14.pendingProps || Zl.current) Wo = true;
  else {
    if (0 === (e10.lanes & t18) && 0 === (n14.flags & 128)) return Wo = false, di(e10, n14, t18);
    Wo = 0 !== (e10.flags & 131072) ? true : false;
  }
  else Wo = false, za && 0 !== (n14.flags & 1048576) && xa(n14, ga, n14.index);
  n14.lanes = 0;
  switch (n14.tag) {
    case 2:
      var r10 = n14.type;
      ci(e10, n14);
      e10 = n14.pendingProps;
      var l12 = ea(n14, Gl.current);
      Ja(n14, t18);
      l12 = Vu(null, n14, r10, e10, l12, t18);
      var a20 = Au();
      n14.flags |= 1;
      "object" === typeof l12 && null !== l12 && "function" === typeof l12.render && void 0 === l12.$$typeof ? (n14.tag = 1, n14.memoizedState = null, n14.updateQueue = null, na(r10) ? (a20 = true, aa(n14)) : a20 = false, n14.memoizedState = null !== l12.state && void 0 !== l12.state ? l12.state : null, uu(n14), l12.updater = zo, n14.stateNode = l12, l12._reactInternals = n14, Mo(n14, r10, e10, t18), n14 = Zo(null, n14, r10, true, a20, t18)) : (n14.tag = 0, za && a20 && Ea(n14), Qo(null, n14, l12, t18), n14 = n14.child);
      return n14;
    case 16:
      r10 = n14.elementType;
      e: {
        ci(e10, n14);
        e10 = n14.pendingProps;
        l12 = r10._init;
        r10 = l12(r10._payload);
        n14.type = r10;
        l12 = n14.tag = ic(r10);
        e10 = No(r10, e10);
        switch (l12) {
          case 0:
            n14 = Xo(null, n14, r10, e10, t18);
            break e;
          case 1:
            n14 = Go(null, n14, r10, e10, t18);
            break e;
          case 11:
            n14 = jo(null, n14, r10, e10, t18);
            break e;
          case 14:
            n14 = $o(null, n14, r10, No(r10.type, e10), t18);
            break e;
        }
        throw Error(u3(306, r10, ""));
      }
      return n14;
    case 0:
      return r10 = n14.type, l12 = n14.pendingProps, l12 = n14.elementType === r10 ? l12 : No(r10, l12), Xo(e10, n14, r10, l12, t18);
    case 1:
      return r10 = n14.type, l12 = n14.pendingProps, l12 = n14.elementType === r10 ? l12 : No(r10, l12), Go(e10, n14, r10, l12, t18);
    case 3:
      e: {
        Jo(n14);
        if (null === e10) throw Error(u3(387));
        r10 = n14.pendingProps;
        a20 = n14.memoizedState;
        l12 = a20.element;
        ou(e10, n14);
        du(n14, r10, null, t18);
        var o21 = n14.memoizedState;
        r10 = o21.element;
        if (a20.isDehydrated) if (a20 = { element: r10, isDehydrated: false, cache: o21.cache, pendingSuspenseBoundaries: o21.pendingSuspenseBoundaries, transitions: o21.transitions }, n14.updateQueue.baseState = a20, n14.memoizedState = a20, n14.flags & 256) {
          l12 = Fo(Error(u3(423)), n14);
          n14 = ei(e10, n14, r10, t18, l12);
          break e;
        } else if (r10 !== l12) {
          l12 = Fo(Error(u3(424)), n14);
          n14 = ei(e10, n14, r10, t18, l12);
          break e;
        } else for (_a = Ml(n14.stateNode.containerInfo.firstChild), Na = n14, za = true, Pa = null, t18 = ja(n14, null, r10, t18), n14.child = t18; t18; ) t18.flags = t18.flags & -3 | 4096, t18 = t18.sibling;
        else {
          Ia();
          if (r10 === l12) {
            n14 = fi(e10, n14, t18);
            break e;
          }
          Qo(e10, n14, r10, t18);
        }
        n14 = n14.child;
      }
      return n14;
    case 5:
      return wu(n14), null === e10 && Fa(n14), r10 = n14.type, l12 = n14.pendingProps, a20 = null !== e10 ? e10.memoizedProps : null, o21 = l12.children, Cl(r10, l12) ? o21 = null : null !== a20 && Cl(r10, a20) && (n14.flags |= 32), Yo(e10, n14), Qo(e10, n14, o21, t18), n14.child;
    case 6:
      return null === e10 && Fa(n14), null;
    case 13:
      return ri(e10, n14, t18);
    case 4:
      return bu(n14, n14.stateNode.containerInfo), r10 = n14.pendingProps, null === e10 ? n14.child = Qa(n14, null, r10, t18) : Qo(e10, n14, r10, t18), n14.child;
    case 11:
      return r10 = n14.type, l12 = n14.pendingProps, l12 = n14.elementType === r10 ? l12 : No(r10, l12), jo(e10, n14, r10, l12, t18);
    case 7:
      return Qo(e10, n14, n14.pendingProps, t18), n14.child;
    case 8:
      return Qo(e10, n14, n14.pendingProps.children, t18), n14.child;
    case 12:
      return Qo(e10, n14, n14.pendingProps.children, t18), n14.child;
    case 10:
      e: {
        r10 = n14.type._context;
        l12 = n14.pendingProps;
        a20 = n14.memoizedProps;
        o21 = l12.value;
        Yl($a, r10._currentValue);
        r10._currentValue = o21;
        if (null !== a20) if (zr(a20.value, o21)) {
          if (a20.children === l12.children && !Zl.current) {
            n14 = fi(e10, n14, t18);
            break e;
          }
        } else for (a20 = n14.child, null !== a20 && (a20.return = n14); null !== a20; ) {
          var i19 = a20.dependencies;
          if (null !== i19) {
            o21 = a20.child;
            for (var s19 = i19.firstContext; null !== s19; ) {
              if (s19.context === r10) {
                if (1 === a20.tag) {
                  s19 = iu(-1, t18 & -t18);
                  s19.tag = 2;
                  var c16 = a20.updateQueue;
                  if (null !== c16) {
                    c16 = c16.shared;
                    var f7 = c16.pending;
                    null === f7 ? s19.next = s19 : (s19.next = f7.next, f7.next = s19);
                    c16.pending = s19;
                  }
                }
                a20.lanes |= t18;
                s19 = a20.alternate;
                null !== s19 && (s19.lanes |= t18);
                Za(a20.return, t18, n14);
                i19.lanes |= t18;
                break;
              }
              s19 = s19.next;
            }
          } else if (10 === a20.tag) o21 = a20.type === n14.type ? null : a20.child;
          else if (18 === a20.tag) {
            o21 = a20.return;
            if (null === o21) throw Error(u3(341));
            o21.lanes |= t18;
            i19 = o21.alternate;
            null !== i19 && (i19.lanes |= t18);
            Za(o21, t18, n14);
            o21 = a20.sibling;
          } else o21 = a20.child;
          if (null !== o21) o21.return = a20;
          else for (o21 = a20; null !== o21; ) {
            if (o21 === n14) {
              o21 = null;
              break;
            }
            a20 = o21.sibling;
            if (null !== a20) {
              a20.return = o21.return;
              o21 = a20;
              break;
            }
            o21 = o21.return;
          }
          a20 = o21;
        }
        Qo(e10, n14, l12.children, t18);
        n14 = n14.child;
      }
      return n14;
    case 9:
      return l12 = n14.type, r10 = n14.pendingProps.children, Ja(n14, t18), l12 = eu(l12), r10 = r10(l12), n14.flags |= 1, Qo(e10, n14, r10, t18), n14.child;
    case 14:
      return r10 = n14.type, l12 = No(r10, n14.pendingProps), l12 = No(r10.type, l12), $o(e10, n14, r10, l12, t18);
    case 15:
      return Ko(e10, n14, n14.type, n14.pendingProps, t18);
    case 17:
      return r10 = n14.type, l12 = n14.pendingProps, l12 = n14.elementType === r10 ? l12 : No(r10, l12), ci(e10, n14), n14.tag = 1, na(r10) ? (e10 = true, aa(n14)) : e10 = false, Ja(n14, t18), Lo(n14, r10, l12), Mo(n14, r10, l12, t18), Zo(null, n14, r10, true, e10, t18);
    case 19:
      return si(e10, n14, t18);
    case 22:
      return qo(e10, n14, t18);
  }
  throw Error(u3(156, n14.tag));
};
function lc(e10, n14) {
  return Je(e10, n14);
}
function ac(e10, n14, t18, r10) {
  this.tag = e10;
  this.key = t18;
  this.sibling = this.child = this.return = this.stateNode = this.type = this.elementType = null;
  this.index = 0;
  this.ref = null;
  this.pendingProps = n14;
  this.dependencies = this.memoizedState = this.updateQueue = this.memoizedProps = null;
  this.mode = r10;
  this.subtreeFlags = this.flags = 0;
  this.deletions = null;
  this.childLanes = this.lanes = 0;
  this.alternate = null;
}
function uc(e10, n14, t18, r10) {
  return new ac(e10, n14, t18, r10);
}
function oc(e10) {
  e10 = e10.prototype;
  return !(!e10 || !e10.isReactComponent);
}
function ic(e10) {
  if ("function" === typeof e10) return oc(e10) ? 1 : 0;
  if (void 0 !== e10 && null !== e10) {
    e10 = e10.$$typeof;
    if (e10 === M2) return 11;
    if (e10 === D2) return 14;
  }
  return 2;
}
function sc(e10, n14) {
  var t18 = e10.alternate;
  null === t18 ? (t18 = uc(e10.tag, n14, e10.key, e10.mode), t18.elementType = e10.elementType, t18.type = e10.type, t18.stateNode = e10.stateNode, t18.alternate = e10, e10.alternate = t18) : (t18.pendingProps = n14, t18.type = e10.type, t18.flags = 0, t18.subtreeFlags = 0, t18.deletions = null);
  t18.flags = e10.flags & 14680064;
  t18.childLanes = e10.childLanes;
  t18.lanes = e10.lanes;
  t18.child = e10.child;
  t18.memoizedProps = e10.memoizedProps;
  t18.memoizedState = e10.memoizedState;
  t18.updateQueue = e10.updateQueue;
  n14 = e10.dependencies;
  t18.dependencies = null === n14 ? null : { lanes: n14.lanes, firstContext: n14.firstContext };
  t18.sibling = e10.sibling;
  t18.index = e10.index;
  t18.ref = e10.ref;
  return t18;
}
function cc(e10, n14, t18, r10, l12, a20) {
  var o21 = 2;
  r10 = e10;
  if ("function" === typeof e10) oc(e10) && (o21 = 1);
  else if ("string" === typeof e10) o21 = 5;
  else e: switch (e10) {
    case _3:
      return fc(t18.children, l12, a20, n14);
    case z2:
      o21 = 8;
      l12 |= 8;
      break;
    case P2:
      return e10 = uc(12, t18, n14, l12 | 2), e10.elementType = P2, e10.lanes = a20, e10;
    case F2:
      return e10 = uc(13, t18, n14, l12), e10.elementType = F2, e10.lanes = a20, e10;
    case R2:
      return e10 = uc(19, t18, n14, l12), e10.elementType = R2, e10.lanes = a20, e10;
    case I2:
      return dc(t18, l12, a20, n14);
    default:
      if ("object" === typeof e10 && null !== e10) switch (e10.$$typeof) {
        case L2:
          o21 = 10;
          break e;
        case T2:
          o21 = 9;
          break e;
        case M2:
          o21 = 11;
          break e;
        case D2:
          o21 = 14;
          break e;
        case O2:
          o21 = 16;
          r10 = null;
          break e;
      }
      throw Error(u3(130, null == e10 ? e10 : typeof e10, ""));
  }
  n14 = uc(o21, t18, n14, l12);
  n14.elementType = e10;
  n14.type = r10;
  n14.lanes = a20;
  return n14;
}
function fc(e10, n14, t18, r10) {
  e10 = uc(7, e10, r10, n14);
  e10.lanes = t18;
  return e10;
}
function dc(e10, n14, t18, r10) {
  e10 = uc(22, e10, r10, n14);
  e10.elementType = I2;
  e10.lanes = t18;
  e10.stateNode = { isHidden: false };
  return e10;
}
function pc(e10, n14, t18) {
  e10 = uc(6, e10, null, n14);
  e10.lanes = t18;
  return e10;
}
function hc(e10, n14, t18) {
  n14 = uc(4, null !== e10.children ? e10.children : [], e10.key, n14);
  n14.lanes = t18;
  n14.stateNode = { containerInfo: e10.containerInfo, pendingChildren: null, implementation: e10.implementation };
  return n14;
}
function mc(e10, n14, t18, r10, l12) {
  this.tag = n14;
  this.containerInfo = e10;
  this.finishedWork = this.pingCache = this.current = this.pendingChildren = null;
  this.timeoutHandle = -1;
  this.callbackNode = this.pendingContext = this.context = null;
  this.callbackPriority = 0;
  this.eventTimes = Nn(0);
  this.expirationTimes = Nn(-1);
  this.entangledLanes = this.finishedLanes = this.mutableReadLanes = this.expiredLanes = this.pingedLanes = this.suspendedLanes = this.pendingLanes = 0;
  this.entanglements = Nn(0);
  this.identifierPrefix = r10;
  this.onRecoverableError = l12;
  this.mutableSourceEagerHydrationData = null;
}
function gc(e10, n14, t18, r10, l12, a20, u6, o21, i19) {
  e10 = new mc(e10, n14, t18, o21, i19);
  1 === n14 ? (n14 = 1, true === a20 && (n14 |= 8)) : n14 = 0;
  a20 = uc(3, null, null, n14);
  e10.current = a20;
  a20.stateNode = e10;
  a20.memoizedState = { element: r10, isDehydrated: t18, cache: null, transitions: null, pendingSuspenseBoundaries: null };
  uu(a20);
  return e10;
}
function vc(e10, n14, t18) {
  var r10 = 3 < arguments.length && void 0 !== arguments[3] ? arguments[3] : null;
  return { $$typeof: N2, key: null == r10 ? null : "" + r10, children: e10, containerInfo: n14, implementation: t18 };
}
function yc(e10) {
  if (!e10) return Xl;
  e10 = e10._reactInternals;
  e: {
    if (Ke(e10) !== e10 || 1 !== e10.tag) throw Error(u3(170));
    var n14 = e10;
    do {
      switch (n14.tag) {
        case 3:
          n14 = n14.stateNode.context;
          break e;
        case 1:
          if (na(n14.type)) {
            n14 = n14.stateNode.__reactInternalMemoizedMergedChildContext;
            break e;
          }
      }
      n14 = n14.return;
    } while (null !== n14);
    throw Error(u3(171));
  }
  if (1 === e10.tag) {
    var t18 = e10.type;
    if (na(t18)) return la(e10, t18, n14);
  }
  return n14;
}
function bc(e10, n14, t18, r10, l12, a20, u6, o21, i19) {
  e10 = gc(t18, r10, true, e10, l12, a20, u6, o21, i19);
  e10.context = yc(null);
  t18 = e10.current;
  r10 = Ns();
  l12 = _s(t18);
  a20 = iu(r10, l12);
  a20.callback = void 0 !== n14 && null !== n14 ? n14 : null;
  su(t18, a20, l12);
  e10.current.lanes = l12;
  _n(e10, l12, r10);
  Ps(e10, r10);
  return e10;
}
function kc(e10, n14, t18, r10) {
  var l12 = n14.current, a20 = Ns(), u6 = _s(l12);
  t18 = yc(t18);
  null === n14.context ? n14.context = t18 : n14.pendingContext = t18;
  n14 = iu(a20, u6);
  n14.payload = { element: e10 };
  r10 = void 0 === r10 ? null : r10;
  null !== r10 && (n14.callback = r10);
  e10 = su(l12, n14, u6);
  null !== e10 && (zs(e10, l12, u6, a20), cu(e10, l12, u6));
  return u6;
}
function wc(e10) {
  e10 = e10.current;
  if (!e10.child) return null;
  switch (e10.child.tag) {
    case 5:
      return e10.child.stateNode;
    default:
      return e10.child.stateNode;
  }
}
function Sc(e10, n14) {
  e10 = e10.memoizedState;
  if (null !== e10 && null !== e10.dehydrated) {
    var t18 = e10.retryLane;
    e10.retryLane = 0 !== t18 && t18 < n14 ? t18 : n14;
  }
}
function xc(e10, n14) {
  Sc(e10, n14);
  (e10 = e10.alternate) && Sc(e10, n14);
}
function Ec() {
  return null;
}
var Cc = "function" === typeof reportError ? reportError : function(e10) {
  console.error(e10);
};
function Nc(e10) {
  this._internalRoot = e10;
}
_c.prototype.render = Nc.prototype.render = function(e10) {
  var n14 = this._internalRoot;
  if (null === n14) throw Error(u3(409));
  kc(e10, n14, null, null);
};
_c.prototype.unmount = Nc.prototype.unmount = function() {
  var e10 = this._internalRoot;
  if (null !== e10) {
    this._internalRoot = null;
    var n14 = e10.containerInfo;
    Is(function() {
      kc(null, e10, null, null);
    });
    n14[Il] = null;
  }
};
function _c(e10) {
  this._internalRoot = e10;
}
_c.prototype.unstable_scheduleHydration = function(e10) {
  if (e10) {
    var n14 = Dn();
    e10 = { blockedOn: null, target: e10, priority: n14 };
    for (var t18 = 0; t18 < Qn.length && 0 !== n14 && n14 < Qn[t18].priority; t18++) ;
    Qn.splice(t18, 0, e10);
    0 === t18 && Yn(e10);
  }
};
function zc(e10) {
  return !(!e10 || 1 !== e10.nodeType && 9 !== e10.nodeType && 11 !== e10.nodeType);
}
function Pc(e10) {
  return !(!e10 || 1 !== e10.nodeType && 9 !== e10.nodeType && 11 !== e10.nodeType && (8 !== e10.nodeType || " react-mount-point-unstable " !== e10.nodeValue));
}
function Lc() {
}
function Tc(e10, n14, t18, r10, l12) {
  if (l12) {
    if ("function" === typeof r10) {
      var a20 = r10;
      r10 = function() {
        var e11 = wc(u6);
        a20.call(e11);
      };
    }
    var u6 = bc(n14, r10, e10, 0, null, false, false, "", Lc);
    e10._reactRootContainer = u6;
    e10[Il] = u6.current;
    fl(8 === e10.nodeType ? e10.parentNode : e10);
    Is();
    return u6;
  }
  for (; l12 = e10.lastChild; ) e10.removeChild(l12);
  if ("function" === typeof r10) {
    var o21 = r10;
    r10 = function() {
      var e11 = wc(i19);
      o21.call(e11);
    };
  }
  var i19 = gc(e10, 0, false, null, null, false, false, "", Lc);
  e10._reactRootContainer = i19;
  e10[Il] = i19.current;
  fl(8 === e10.nodeType ? e10.parentNode : e10);
  Is(function() {
    kc(n14, i19, t18, r10);
  });
  return i19;
}
function Mc(e10, n14, t18, r10, l12) {
  var a20 = t18._reactRootContainer;
  if (a20) {
    var u6 = a20;
    if ("function" === typeof l12) {
      var o21 = l12;
      l12 = function() {
        var e11 = wc(u6);
        o21.call(e11);
      };
    }
    kc(n14, u6, e10, l12);
  } else u6 = Tc(t18, n14, e10, l12, r10);
  return wc(u6);
}
Mn = function(e10) {
  switch (e10.tag) {
    case 3:
      var n14 = e10.stateNode;
      if (n14.current.memoizedState.isDehydrated) {
        var t18 = kn(n14.pendingLanes);
        0 !== t18 && (Pn(n14, t18 | 1), Ps(n14, rn()), 0 === (es & 6) && (hs = rn() + 500, da()));
      }
      break;
    case 13:
      Is(function() {
        var n15 = lu(e10, 1);
        if (null !== n15) {
          var t19 = Ns();
          zs(n15, e10, 1, t19);
        }
      }), xc(e10, 1);
  }
};
Fn = function(e10) {
  if (13 === e10.tag) {
    var n14 = lu(e10, 134217728);
    if (null !== n14) {
      var t18 = Ns();
      zs(n14, e10, 134217728, t18);
    }
    xc(e10, 134217728);
  }
};
Rn = function(e10) {
  if (13 === e10.tag) {
    var n14 = _s(e10), t18 = lu(e10, n14);
    if (null !== t18) {
      var r10 = Ns();
      zs(t18, e10, n14, r10);
    }
    xc(e10, n14);
  }
};
Dn = function() {
  return Ln;
};
On = function(e10, n14) {
  var t18 = Ln;
  try {
    return Ln = e10, n14();
  } finally {
    Ln = t18;
  }
};
Ne = function(e10, n14, t18) {
  switch (n14) {
    case "input":
      re2(e10, t18);
      n14 = t18.name;
      if ("radio" === t18.type && null != n14) {
        for (t18 = e10; t18.parentNode; ) t18 = t18.parentNode;
        t18 = t18.querySelectorAll("input[name=" + JSON.stringify("" + n14) + '][type="radio"]');
        for (n14 = 0; n14 < t18.length; n14++) {
          var r10 = t18[n14];
          if (r10 !== e10 && r10.form === e10.form) {
            var l12 = Ql(r10);
            if (!l12) throw Error(u3(90));
            Z2(r10);
            re2(r10, l12);
          }
        }
      }
      break;
    case "textarea":
      ce2(e10, t18);
      break;
    case "select":
      n14 = t18.value, null != n14 && oe2(e10, !!t18.multiple, n14, false);
  }
};
Me = Os;
Fe = Is;
var Fc = { usingClientEntryPoint: false, Events: [Hl, Wl, Ql, Le, Te, Os] };
var Rc = { findFiberByHostInstance: Bl, bundleType: 0, version: "18.3.1", rendererPackageName: "react-dom" };
var Dc = { bundleType: Rc.bundleType, version: Rc.version, rendererPackageName: Rc.rendererPackageName, rendererConfig: Rc.rendererConfig, overrideHookState: null, overrideHookStateDeletePath: null, overrideHookStateRenamePath: null, overrideProps: null, overridePropsDeletePath: null, overridePropsRenamePath: null, setErrorHandler: null, setSuspenseHandler: null, scheduleUpdate: null, currentDispatcherRef: E2.ReactCurrentDispatcher, findHostInstanceByFiber: function(e10) {
  e10 = Ge(e10);
  return null === e10 ? null : e10.stateNode;
}, findFiberByHostInstance: Rc.findFiberByHostInstance || Ec, findHostInstancesForRefresh: null, scheduleRefresh: null, scheduleRoot: null, setRefreshHandler: null, getCurrentFiber: null, reconcilerVersion: "18.3.1-next-f1338f8080-20240426" };
if ("undefined" !== typeof __REACT_DEVTOOLS_GLOBAL_HOOK__) {
  Oc = __REACT_DEVTOOLS_GLOBAL_HOOK__;
  if (!Oc.isDisabled && Oc.supportsFiber) try {
    fn = Oc.inject(Dc), dn = Oc;
  } catch (e10) {
  }
}
var Oc;
r3.__SECRET_INTERNALS_DO_NOT_USE_OR_YOU_WILL_BE_FIRED = Fc;
r3.createPortal = function(e10, n14) {
  var t18 = 2 < arguments.length && void 0 !== arguments[2] ? arguments[2] : null;
  if (!zc(n14)) throw Error(u3(200));
  return vc(e10, n14, null, t18);
};
r3.createRoot = function(e10, n14) {
  if (!zc(e10)) throw Error(u3(299));
  var t18 = false, r10 = "", l12 = Cc;
  null !== n14 && void 0 !== n14 && (true === n14.unstable_strictMode && (t18 = true), void 0 !== n14.identifierPrefix && (r10 = n14.identifierPrefix), void 0 !== n14.onRecoverableError && (l12 = n14.onRecoverableError));
  n14 = gc(e10, 1, false, null, null, t18, false, r10, l12);
  e10[Il] = n14.current;
  fl(8 === e10.nodeType ? e10.parentNode : e10);
  return new Nc(n14);
};
r3.findDOMNode = function(e10) {
  if (null == e10) return null;
  if (1 === e10.nodeType) return e10;
  var n14 = e10._reactInternals;
  if (void 0 === n14) {
    if ("function" === typeof e10.render) throw Error(u3(188));
    e10 = Object.keys(e10).join(",");
    throw Error(u3(268, e10));
  }
  e10 = Ge(n14);
  e10 = null === e10 ? null : e10.stateNode;
  return e10;
};
r3.flushSync = function(e10) {
  return Is(e10);
};
r3.hydrate = function(e10, n14, t18) {
  if (!Pc(n14)) throw Error(u3(200));
  return Mc(null, e10, n14, true, t18);
};
r3.hydrateRoot = function(e10, n14, t18) {
  if (!zc(e10)) throw Error(u3(405));
  var r10 = null != t18 && t18.hydratedSources || null, l12 = false, a20 = "", o21 = Cc;
  null !== t18 && void 0 !== t18 && (true === t18.unstable_strictMode && (l12 = true), void 0 !== t18.identifierPrefix && (a20 = t18.identifierPrefix), void 0 !== t18.onRecoverableError && (o21 = t18.onRecoverableError));
  n14 = bc(n14, null, e10, 1, null != t18 ? t18 : null, l12, false, a20, o21);
  e10[Il] = n14.current;
  fl(e10);
  if (r10) for (e10 = 0; e10 < r10.length; e10++) t18 = r10[e10], l12 = t18._getVersion, l12 = l12(t18._source), null == n14.mutableSourceEagerHydrationData ? n14.mutableSourceEagerHydrationData = [t18, l12] : n14.mutableSourceEagerHydrationData.push(t18, l12);
  return new _c(n14);
};
r3.render = function(e10, n14, t18) {
  if (!Pc(n14)) throw Error(u3(200));
  return Mc(null, e10, n14, false, t18);
};
r3.unmountComponentAtNode = function(e10) {
  if (!Pc(e10)) throw Error(u3(40));
  return e10._reactRootContainer ? (Is(function() {
    Mc(null, null, e10, false, function() {
      e10._reactRootContainer = null;
      e10[Il] = null;
    });
  }), true) : false;
};
r3.unstable_batchedUpdates = Os;
r3.unstable_renderSubtreeIntoContainer = function(e10, n14, t18, r10) {
  if (!Pc(t18)) throw Error(u3(200));
  if (null == e10 || void 0 === e10._reactInternals) throw Error(u3(38));
  return Mc(e10, n14, t18, false, r10);
};
r3.version = "18.3.1-next-f1338f8080-20240426";
function Ic() {
  if (typeof __REACT_DEVTOOLS_GLOBAL_HOOK__ === "undefined" || typeof __REACT_DEVTOOLS_GLOBAL_HOOK__.checkDCE !== "function") {
    return;
  }
  try {
    __REACT_DEVTOOLS_GLOBAL_HOOK__.checkDCE(Ic);
  } catch (e10) {
    console.error(e10);
  }
}
{
  Ic();
  t3.exports = r3;
}
var Uc = t3.exports;
var Vc = t3.exports.__SECRET_INTERNALS_DO_NOT_USE_OR_YOU_WILL_BE_FIRED;
var Ac = t3.exports.createPortal;
var Bc = t3.exports.createRoot;
var Hc = t3.exports.findDOMNode;
var Wc = t3.exports.flushSync;
var Qc = t3.exports.hydrate;
var jc = t3.exports.hydrateRoot;
var $c = t3.exports.render;
var Kc = t3.exports.unmountComponentAtNode;
var qc = t3.exports.unstable_batchedUpdates;
var Yc = t3.exports.unstable_renderSubtreeIntoContainer;
var Xc = t3.exports.version;

// external:https://cdn.jsdelivr.net/npm/react-dom@18.3.1/client/+esm
var t4;
var e3;
var r4 = {};
var a4 = Uc;
e3 = r4.createRoot = a4.createRoot, t4 = r4.hydrateRoot = a4.hydrateRoot;

// external:https://cdn.jsdelivr.net/npm/clsx@2.1.1/+esm
function r5(e10) {
  var t18, f7, n14 = "";
  if ("string" == typeof e10 || "number" == typeof e10) n14 += e10;
  else if ("object" == typeof e10) if (Array.isArray(e10)) {
    var o21 = e10.length;
    for (t18 = 0; t18 < o21; t18++) e10[t18] && (f7 = r5(e10[t18])) && (n14 && (n14 += " "), n14 += f7);
  } else for (f7 in e10) e10[f7] && (n14 && (n14 += " "), n14 += f7);
  return n14;
}
function e4() {
  for (var e10, t18, f7 = 0, n14 = "", o21 = arguments.length; f7 < o21; f7++) (e10 = arguments[f7]) && (t18 = r5(e10)) && (n14 && (n14 += " "), n14 += t18);
  return n14;
}

// external:https://cdn.jsdelivr.net/npm/class-variance-authority/+esm
var e5 = (l12) => "boolean" == typeof l12 ? `${l12}` : 0 === l12 ? "0" : l12;
var n3 = e4;
var r6 = (l12, r10) => (t18) => {
  var s19;
  if (null == (null == r10 ? void 0 : r10.variants)) return n3(l12, null == t18 ? void 0 : t18.class, null == t18 ? void 0 : t18.className);
  const { variants: u6, defaultVariants: a20 } = r10, o21 = Object.keys(u6).map((l13) => {
    const n14 = null == t18 ? void 0 : t18[l13], r11 = null == a20 ? void 0 : a20[l13];
    if (null === n14) return null;
    const s20 = e5(n14) || e5(r11);
    return u6[l13][s20];
  }), i19 = t18 && Object.entries(t18).reduce((l13, e10) => {
    let [n14, r11] = e10;
    return void 0 === r11 || (l13[n14] = r11), l13;
  }, {}), c16 = null == r10 || null === (s19 = r10.compoundVariants) || void 0 === s19 ? void 0 : s19.reduce((l13, e10) => {
    let { class: n14, className: r11, ...t19 } = e10;
    return Object.entries(t19).every((l14) => {
      let [e11, n15] = l14;
      return Array.isArray(n15) ? n15.includes({ ...a20, ...i19 }[e11]) : { ...a20, ...i19 }[e11] === n15;
    }) ? [...l13, n14, r11] : l13;
  }, []);
  return n3(l12, o21, c16, null == t18 ? void 0 : t18.class, null == t18 ? void 0 : t18.className);
};

// external:https://cdn.jsdelivr.net/npm/clsx/+esm
function r7(e10) {
  var t18, f7, n14 = "";
  if ("string" == typeof e10 || "number" == typeof e10) n14 += e10;
  else if ("object" == typeof e10) if (Array.isArray(e10)) {
    var o21 = e10.length;
    for (t18 = 0; t18 < o21; t18++) e10[t18] && (f7 = r7(e10[t18])) && (n14 && (n14 += " "), n14 += f7);
  } else for (f7 in e10) e10[f7] && (n14 && (n14 += " "), n14 += f7);
  return n14;
}
function e6() {
  for (var e10, t18, f7 = 0, n14 = "", o21 = arguments.length; f7 < o21; f7++) (e10 = arguments[f7]) && (t18 = r7(e10)) && (n14 && (n14 += " "), n14 += t18);
  return n14;
}

// external:https://cdn.jsdelivr.net/npm/tailwind-merge/+esm
var e7 = (e10) => {
  const o21 = s4(e10), { conflictingClassGroups: a20, conflictingClassGroupModifiers: n14 } = e10;
  return { getClassGroupId: (e11) => {
    const s19 = e11.split("-");
    return "" === s19[0] && 1 !== s19.length && s19.shift(), r8(s19, o21) || t5(e11);
  }, getConflictingClassGroupIds: (e11, r10) => {
    const o22 = a20[e11] || [];
    return r10 && n14[e11] ? [...o22, ...n14[e11]] : o22;
  } };
};
var r8 = (e10, o21) => {
  if (0 === e10.length) return o21.classGroupId;
  const t18 = e10[0], s19 = o21.nextPart.get(t18), a20 = s19 ? r8(e10.slice(1), s19) : void 0;
  if (a20) return a20;
  if (0 === o21.validators.length) return;
  const n14 = e10.join("-");
  return o21.validators.find(({ validator: e11 }) => e11(n14))?.classGroupId;
};
var o4 = /^\[(.+)\]$/;
var t5 = (e10) => {
  if (o4.test(e10)) {
    const r10 = o4.exec(e10)[1], t18 = r10?.substring(0, r10.indexOf(":"));
    if (t18) return "arbitrary.." + t18;
  }
};
var s4 = (e10) => {
  const { theme: r10, classGroups: o21 } = e10, t18 = { nextPart: /* @__PURE__ */ new Map(), validators: [] };
  for (const e11 in o21) a5(o21[e11], t18, e11, r10);
  return t18;
};
var a5 = (e10, r10, o21, t18) => {
  e10.forEach((e11) => {
    if ("string" != typeof e11) {
      if ("function" == typeof e11) return i4(e11) ? void a5(e11(t18), r10, o21, t18) : void r10.validators.push({ validator: e11, classGroupId: o21 });
      Object.entries(e11).forEach(([e12, s19]) => {
        a5(s19, n4(r10, e12), o21, t18);
      });
    } else {
      ("" === e11 ? r10 : n4(r10, e11)).classGroupId = o21;
    }
  });
};
var n4 = (e10, r10) => {
  let o21 = e10;
  return r10.split("-").forEach((e11) => {
    o21.nextPart.has(e11) || o21.nextPart.set(e11, { nextPart: /* @__PURE__ */ new Map(), validators: [] }), o21 = o21.nextPart.get(e11);
  }), o21;
};
var i4 = (e10) => e10.isThemeGetter;
var l4 = (e10) => {
  if (e10 < 1) return { get: () => {
  }, set: () => {
  } };
  let r10 = 0, o21 = /* @__PURE__ */ new Map(), t18 = /* @__PURE__ */ new Map();
  const s19 = (s20, a20) => {
    o21.set(s20, a20), r10++, r10 > e10 && (r10 = 0, t18 = o21, o21 = /* @__PURE__ */ new Map());
  };
  return { get(e11) {
    let r11 = o21.get(e11);
    return void 0 !== r11 ? r11 : void 0 !== (r11 = t18.get(e11)) ? (s19(e11, r11), r11) : void 0;
  }, set(e11, r11) {
    o21.has(e11) ? o21.set(e11, r11) : s19(e11, r11);
  } };
};
var d4 = (e10) => {
  const { prefix: r10, experimentalParseClassName: o21 } = e10;
  let t18 = (e11) => {
    const r11 = [];
    let o22, t19 = 0, s19 = 0, a20 = 0;
    for (let n15 = 0; n15 < e11.length; n15++) {
      let i20 = e11[n15];
      if (0 === t19 && 0 === s19) {
        if (":" === i20) {
          r11.push(e11.slice(a20, n15)), a20 = n15 + 1;
          continue;
        }
        if ("/" === i20) {
          o22 = n15;
          continue;
        }
      }
      "[" === i20 ? t19++ : "]" === i20 ? t19-- : "(" === i20 ? s19++ : ")" === i20 && s19--;
    }
    const n14 = 0 === r11.length ? e11 : e11.substring(a20), i19 = c4(n14);
    return { modifiers: r11, hasImportantModifier: i19 !== n14, baseClassName: i19, maybePostfixModifierPosition: o22 && o22 > a20 ? o22 - a20 : void 0 };
  };
  if (r10) {
    const e11 = r10 + ":", o22 = t18;
    t18 = (r11) => r11.startsWith(e11) ? o22(r11.substring(e11.length)) : { isExternal: true, modifiers: [], hasImportantModifier: false, baseClassName: r11, maybePostfixModifierPosition: void 0 };
  }
  if (o21) {
    const e11 = t18;
    t18 = (r11) => o21({ className: r11, parseClassName: e11 });
  }
  return t18;
};
var c4 = (e10) => e10.endsWith("!") ? e10.substring(0, e10.length - 1) : e10.startsWith("!") ? e10.substring(1) : e10;
var m4 = (e10) => {
  const r10 = Object.fromEntries(e10.orderSensitiveModifiers.map((e11) => [e11, true]));
  return (e11) => {
    if (e11.length <= 1) return e11;
    const o21 = [];
    let t18 = [];
    return e11.forEach((e12) => {
      "[" === e12[0] || r10[e12] ? (o21.push(...t18.sort(), e12), t18 = []) : t18.push(e12);
    }), o21.push(...t18.sort()), o21;
  };
};
var p4 = /\s+/;
function b4() {
  let e10, r10, o21 = 0, t18 = "";
  for (; o21 < arguments.length; ) (e10 = arguments[o21++]) && (r10 = u4(e10)) && (t18 && (t18 += " "), t18 += r10);
  return t18;
}
var u4 = (e10) => {
  if ("string" == typeof e10) return e10;
  let r10, o21 = "";
  for (let t18 = 0; t18 < e10.length; t18++) e10[t18] && (r10 = u4(e10[t18])) && (o21 && (o21 += " "), o21 += r10);
  return o21;
};
function f4(r10, ...o21) {
  let t18, s19, a20, n14 = function(c16) {
    const p9 = o21.reduce((e10, r11) => r11(e10), r10());
    return t18 = ((r11) => ({ cache: l4(r11.cacheSize), parseClassName: d4(r11), sortModifiers: m4(r11), ...e7(r11) }))(p9), s19 = t18.cache.get, a20 = t18.cache.set, n14 = i19, i19(c16);
  };
  function i19(e10) {
    const r11 = s19(e10);
    if (r11) return r11;
    const o22 = ((e11, r12) => {
      const { parseClassName: o23, getClassGroupId: t19, getConflictingClassGroupIds: s20, sortModifiers: a21 } = r12, n15 = [], i20 = e11.trim().split(p4);
      let l12 = "";
      for (let e12 = i20.length - 1; e12 >= 0; e12 -= 1) {
        const r13 = i20[e12], { isExternal: d6, modifiers: c16, hasImportantModifier: m8, baseClassName: p9, maybePostfixModifierPosition: b5 } = o23(r13);
        if (d6) {
          l12 = r13 + (l12.length > 0 ? " " + l12 : l12);
          continue;
        }
        let u6 = !!b5, f7 = t19(u6 ? p9.substring(0, b5) : p9);
        if (!f7) {
          if (!u6) {
            l12 = r13 + (l12.length > 0 ? " " + l12 : l12);
            continue;
          }
          if (f7 = t19(p9), !f7) {
            l12 = r13 + (l12.length > 0 ? " " + l12 : l12);
            continue;
          }
          u6 = false;
        }
        const g6 = a21(c16).join(":"), h7 = m8 ? g6 + "!" : g6, x7 = h7 + f7;
        if (n15.includes(x7)) continue;
        n15.push(x7);
        const k5 = s20(f7, u6);
        for (let e13 = 0; e13 < k5.length; ++e13) {
          const r14 = k5[e13];
          n15.push(h7 + r14);
        }
        l12 = r13 + (l12.length > 0 ? " " + l12 : l12);
      }
      return l12;
    })(e10, t18);
    return a20(e10, o22), o22;
  }
  return function() {
    return n14(b4.apply(null, arguments));
  };
}
var g4 = (e10) => {
  const r10 = (r11) => r11[e10] || [];
  return r10.isThemeGetter = true, r10;
};
var h3 = /^\[(?:(\w[\w-]*):)?(.+)\]$/i;
var x4 = /^\((?:(\w[\w-]*):)?(.+)\)$/i;
var k4 = /^\d+\/\d+$/;
var y4 = /^(\d+(\.\d+)?)?(xs|sm|md|lg|xl)$/;
var w3 = /\d+(%|px|r?em|[sdl]?v([hwib]|min|max)|pt|pc|in|cm|mm|cap|ch|ex|r?lh|cq(w|h|i|b|min|max))|\b(calc|min|max|clamp)\(.+\)|^0$/;
var v4 = /^(rgba?|hsla?|hwb|(ok)?(lab|lch)|color-mix)\(.+\)$/;
var z3 = /^(inset_)?-?((\d+)?\.?(\d+)[a-z]+|0)_-?((\d+)?\.?(\d+)[a-z]+|0)/;
var G3 = /^(url|image|image-set|cross-fade|element|(repeating-)?(linear|radial|conic)-gradient)\(.+\)$/;
var C3 = (e10) => k4.test(e10);
var M3 = (e10) => !!e10 && !Number.isNaN(Number(e10));
var N3 = (e10) => !!e10 && Number.isInteger(Number(e10));
var P3 = (e10) => e10.endsWith("%") && M3(e10.slice(0, -1));
var j3 = (e10) => y4.test(e10);
var A3 = () => true;
var S3 = (e10) => w3.test(e10) && !v4.test(e10);
var I3 = () => false;
var V3 = (e10) => z3.test(e10);
var $3 = (e10) => G3.test(e10);
var E3 = (e10) => !O3(e10) && !B3(e10);
var _4 = (e10) => U3(e10, ee3, I3);
var O3 = (e10) => h3.test(e10);
var T3 = (e10) => U3(e10, re3, S3);
var W3 = (e10) => U3(e10, oe3, M3);
var q3 = (e10) => U3(e10, Y3, I3);
var F3 = (e10) => U3(e10, Z3, $3);
var L3 = (e10) => U3(e10, se3, V3);
var B3 = (e10) => x4.test(e10);
var D3 = (e10) => X3(e10, re3);
var H3 = (e10) => X3(e10, te3);
var J3 = (e10) => X3(e10, Y3);
var K3 = (e10) => X3(e10, ee3);
var Q3 = (e10) => X3(e10, Z3);
var R3 = (e10) => X3(e10, se3, true);
var U3 = (e10, r10, o21) => {
  const t18 = h3.exec(e10);
  return !!t18 && (t18[1] ? r10(t18[1]) : o21(t18[2]));
};
var X3 = (e10, r10, o21 = false) => {
  const t18 = x4.exec(e10);
  return !!t18 && (t18[1] ? r10(t18[1]) : o21);
};
var Y3 = (e10) => "position" === e10 || "percentage" === e10;
var Z3 = (e10) => "image" === e10 || "url" === e10;
var ee3 = (e10) => "length" === e10 || "size" === e10 || "bg-size" === e10;
var re3 = (e10) => "length" === e10;
var oe3 = (e10) => "number" === e10;
var te3 = (e10) => "family-name" === e10;
var se3 = (e10) => "shadow" === e10;
var ae3 = Object.defineProperty({ __proto__: null, isAny: A3, isAnyNonArbitrary: E3, isArbitraryImage: F3, isArbitraryLength: T3, isArbitraryNumber: W3, isArbitraryPosition: q3, isArbitraryShadow: L3, isArbitrarySize: _4, isArbitraryValue: O3, isArbitraryVariable: B3, isArbitraryVariableFamilyName: H3, isArbitraryVariableImage: Q3, isArbitraryVariableLength: D3, isArbitraryVariablePosition: J3, isArbitraryVariableShadow: R3, isArbitraryVariableSize: K3, isFraction: C3, isInteger: N3, isNumber: M3, isPercent: P3, isTshirtSize: j3 }, Symbol.toStringTag, { value: "Module" });
var ne3 = () => {
  const e10 = g4("color"), r10 = g4("font"), o21 = g4("text"), t18 = g4("font-weight"), s19 = g4("tracking"), a20 = g4("leading"), n14 = g4("breakpoint"), i19 = g4("container"), l12 = g4("spacing"), d6 = g4("radius"), c16 = g4("shadow"), m8 = g4("inset-shadow"), p9 = g4("text-shadow"), b5 = g4("drop-shadow"), u6 = g4("blur"), f7 = g4("perspective"), h7 = g4("aspect"), x7 = g4("ease"), k5 = g4("animate"), y6 = () => ["center", "top", "bottom", "left", "right", "top-left", "left-top", "top-right", "right-top", "bottom-right", "right-bottom", "bottom-left", "left-bottom", B3, O3], w4 = () => [B3, O3, l12], v6 = () => [C3, "full", "auto", ...w4()], z4 = () => [N3, "none", "subgrid", B3, O3], G4 = () => ["auto", { span: ["full", N3, B3, O3] }, N3, B3, O3], S4 = () => [N3, "auto", B3, O3], I4 = () => ["auto", "min", "max", "fr", B3, O3], V4 = () => ["auto", ...w4()], $5 = () => [C3, "auto", "full", "dvw", "dvh", "lvw", "lvh", "svw", "svh", "min", "max", "fit", ...w4()], U4 = () => [e10, B3, O3], X4 = () => ["center", "top", "bottom", "left", "right", "top-left", "left-top", "top-right", "right-top", "bottom-right", "right-bottom", "bottom-left", "left-bottom", J3, q3, { position: [B3, O3] }], Y4 = () => ["auto", "cover", "contain", K3, _4, { size: [B3, O3] }], Z4 = () => [P3, D3, T3], ee4 = () => ["", "none", "full", d6, B3, O3], re4 = () => ["", M3, D3, T3], oe4 = () => [M3, P3, J3, q3], te4 = () => ["", "none", u6, B3, O3], se4 = () => ["none", M3, B3, O3], ae4 = () => ["none", M3, B3, O3], ne4 = () => [M3, B3, O3], ie3 = () => [C3, "full", ...w4()];
  return { cacheSize: 500, theme: { animate: ["spin", "ping", "pulse", "bounce"], aspect: ["video"], blur: [j3], breakpoint: [j3], color: [A3], container: [j3], "drop-shadow": [j3], ease: ["in", "out", "in-out"], font: [E3], "font-weight": ["thin", "extralight", "light", "normal", "medium", "semibold", "bold", "extrabold", "black"], "inset-shadow": [j3], leading: ["none", "tight", "snug", "normal", "relaxed", "loose"], perspective: ["dramatic", "near", "normal", "midrange", "distant", "none"], radius: [j3], shadow: [j3], spacing: ["px", M3], text: [j3], "text-shadow": [j3], tracking: ["tighter", "tight", "normal", "wide", "wider", "widest"] }, classGroups: { aspect: [{ aspect: ["auto", "square", C3, O3, B3, h7] }], container: ["container"], columns: [{ columns: [M3, O3, B3, i19] }], "break-after": [{ "break-after": ["auto", "avoid", "all", "avoid-page", "page", "left", "right", "column"] }], "break-before": [{ "break-before": ["auto", "avoid", "all", "avoid-page", "page", "left", "right", "column"] }], "break-inside": [{ "break-inside": ["auto", "avoid", "avoid-page", "avoid-column"] }], "box-decoration": [{ "box-decoration": ["slice", "clone"] }], box: [{ box: ["border", "content"] }], display: ["block", "inline-block", "inline", "flex", "inline-flex", "table", "inline-table", "table-caption", "table-cell", "table-column", "table-column-group", "table-footer-group", "table-header-group", "table-row-group", "table-row", "flow-root", "grid", "inline-grid", "contents", "list-item", "hidden"], sr: ["sr-only", "not-sr-only"], float: [{ float: ["right", "left", "none", "start", "end"] }], clear: [{ clear: ["left", "right", "both", "none", "start", "end"] }], isolation: ["isolate", "isolation-auto"], "object-fit": [{ object: ["contain", "cover", "fill", "none", "scale-down"] }], "object-position": [{ object: y6() }], overflow: [{ overflow: ["auto", "hidden", "clip", "visible", "scroll"] }], "overflow-x": [{ "overflow-x": ["auto", "hidden", "clip", "visible", "scroll"] }], "overflow-y": [{ "overflow-y": ["auto", "hidden", "clip", "visible", "scroll"] }], overscroll: [{ overscroll: ["auto", "contain", "none"] }], "overscroll-x": [{ "overscroll-x": ["auto", "contain", "none"] }], "overscroll-y": [{ "overscroll-y": ["auto", "contain", "none"] }], position: ["static", "fixed", "absolute", "relative", "sticky"], inset: [{ inset: v6() }], "inset-x": [{ "inset-x": v6() }], "inset-y": [{ "inset-y": v6() }], start: [{ start: v6() }], end: [{ end: v6() }], top: [{ top: v6() }], right: [{ right: v6() }], bottom: [{ bottom: v6() }], left: [{ left: v6() }], visibility: ["visible", "invisible", "collapse"], z: [{ z: [N3, "auto", B3, O3] }], basis: [{ basis: [C3, "full", "auto", i19, ...w4()] }], "flex-direction": [{ flex: ["row", "row-reverse", "col", "col-reverse"] }], "flex-wrap": [{ flex: ["nowrap", "wrap", "wrap-reverse"] }], flex: [{ flex: [M3, C3, "auto", "initial", "none", O3] }], grow: [{ grow: ["", M3, B3, O3] }], shrink: [{ shrink: ["", M3, B3, O3] }], order: [{ order: [N3, "first", "last", "none", B3, O3] }], "grid-cols": [{ "grid-cols": z4() }], "col-start-end": [{ col: G4() }], "col-start": [{ "col-start": S4() }], "col-end": [{ "col-end": S4() }], "grid-rows": [{ "grid-rows": z4() }], "row-start-end": [{ row: G4() }], "row-start": [{ "row-start": S4() }], "row-end": [{ "row-end": S4() }], "grid-flow": [{ "grid-flow": ["row", "col", "dense", "row-dense", "col-dense"] }], "auto-cols": [{ "auto-cols": I4() }], "auto-rows": [{ "auto-rows": I4() }], gap: [{ gap: w4() }], "gap-x": [{ "gap-x": w4() }], "gap-y": [{ "gap-y": w4() }], "justify-content": [{ justify: ["start", "end", "center", "between", "around", "evenly", "stretch", "baseline", "center-safe", "end-safe", "normal"] }], "justify-items": [{ "justify-items": ["start", "end", "center", "stretch", "center-safe", "end-safe", "normal"] }], "justify-self": [{ "justify-self": ["auto", "start", "end", "center", "stretch", "center-safe", "end-safe"] }], "align-content": [{ content: ["normal", "start", "end", "center", "between", "around", "evenly", "stretch", "baseline", "center-safe", "end-safe"] }], "align-items": [{ items: ["start", "end", "center", "stretch", "center-safe", "end-safe", { baseline: ["", "last"] }] }], "align-self": [{ self: ["auto", "start", "end", "center", "stretch", "center-safe", "end-safe", { baseline: ["", "last"] }] }], "place-content": [{ "place-content": ["start", "end", "center", "between", "around", "evenly", "stretch", "baseline", "center-safe", "end-safe"] }], "place-items": [{ "place-items": ["start", "end", "center", "stretch", "center-safe", "end-safe", "baseline"] }], "place-self": [{ "place-self": ["auto", "start", "end", "center", "stretch", "center-safe", "end-safe"] }], p: [{ p: w4() }], px: [{ px: w4() }], py: [{ py: w4() }], ps: [{ ps: w4() }], pe: [{ pe: w4() }], pt: [{ pt: w4() }], pr: [{ pr: w4() }], pb: [{ pb: w4() }], pl: [{ pl: w4() }], m: [{ m: V4() }], mx: [{ mx: V4() }], my: [{ my: V4() }], ms: [{ ms: V4() }], me: [{ me: V4() }], mt: [{ mt: V4() }], mr: [{ mr: V4() }], mb: [{ mb: V4() }], ml: [{ ml: V4() }], "space-x": [{ "space-x": w4() }], "space-x-reverse": ["space-x-reverse"], "space-y": [{ "space-y": w4() }], "space-y-reverse": ["space-y-reverse"], size: [{ size: $5() }], w: [{ w: [i19, "screen", ...$5()] }], "min-w": [{ "min-w": [i19, "screen", "none", ...$5()] }], "max-w": [{ "max-w": [i19, "screen", "none", "prose", { screen: [n14] }, ...$5()] }], h: [{ h: ["screen", "lh", ...$5()] }], "min-h": [{ "min-h": ["screen", "lh", "none", ...$5()] }], "max-h": [{ "max-h": ["screen", "lh", ...$5()] }], "font-size": [{ text: ["base", o21, D3, T3] }], "font-smoothing": ["antialiased", "subpixel-antialiased"], "font-style": ["italic", "not-italic"], "font-weight": [{ font: [t18, B3, W3] }], "font-stretch": [{ "font-stretch": ["ultra-condensed", "extra-condensed", "condensed", "semi-condensed", "normal", "semi-expanded", "expanded", "extra-expanded", "ultra-expanded", P3, O3] }], "font-family": [{ font: [H3, O3, r10] }], "fvn-normal": ["normal-nums"], "fvn-ordinal": ["ordinal"], "fvn-slashed-zero": ["slashed-zero"], "fvn-figure": ["lining-nums", "oldstyle-nums"], "fvn-spacing": ["proportional-nums", "tabular-nums"], "fvn-fraction": ["diagonal-fractions", "stacked-fractions"], tracking: [{ tracking: [s19, B3, O3] }], "line-clamp": [{ "line-clamp": [M3, "none", B3, W3] }], leading: [{ leading: [a20, ...w4()] }], "list-image": [{ "list-image": ["none", B3, O3] }], "list-style-position": [{ list: ["inside", "outside"] }], "list-style-type": [{ list: ["disc", "decimal", "none", B3, O3] }], "text-alignment": [{ text: ["left", "center", "right", "justify", "start", "end"] }], "placeholder-color": [{ placeholder: U4() }], "text-color": [{ text: U4() }], "text-decoration": ["underline", "overline", "line-through", "no-underline"], "text-decoration-style": [{ decoration: ["solid", "dashed", "dotted", "double", "wavy"] }], "text-decoration-thickness": [{ decoration: [M3, "from-font", "auto", B3, T3] }], "text-decoration-color": [{ decoration: U4() }], "underline-offset": [{ "underline-offset": [M3, "auto", B3, O3] }], "text-transform": ["uppercase", "lowercase", "capitalize", "normal-case"], "text-overflow": ["truncate", "text-ellipsis", "text-clip"], "text-wrap": [{ text: ["wrap", "nowrap", "balance", "pretty"] }], indent: [{ indent: w4() }], "vertical-align": [{ align: ["baseline", "top", "middle", "bottom", "text-top", "text-bottom", "sub", "super", B3, O3] }], whitespace: [{ whitespace: ["normal", "nowrap", "pre", "pre-line", "pre-wrap", "break-spaces"] }], break: [{ break: ["normal", "words", "all", "keep"] }], wrap: [{ wrap: ["break-word", "anywhere", "normal"] }], hyphens: [{ hyphens: ["none", "manual", "auto"] }], content: [{ content: ["none", B3, O3] }], "bg-attachment": [{ bg: ["fixed", "local", "scroll"] }], "bg-clip": [{ "bg-clip": ["border", "padding", "content", "text"] }], "bg-origin": [{ "bg-origin": ["border", "padding", "content"] }], "bg-position": [{ bg: X4() }], "bg-repeat": [{ bg: ["no-repeat", { repeat: ["", "x", "y", "space", "round"] }] }], "bg-size": [{ bg: Y4() }], "bg-image": [{ bg: ["none", { linear: [{ to: ["t", "tr", "r", "br", "b", "bl", "l", "tl"] }, N3, B3, O3], radial: ["", B3, O3], conic: [N3, B3, O3] }, Q3, F3] }], "bg-color": [{ bg: U4() }], "gradient-from-pos": [{ from: Z4() }], "gradient-via-pos": [{ via: Z4() }], "gradient-to-pos": [{ to: Z4() }], "gradient-from": [{ from: U4() }], "gradient-via": [{ via: U4() }], "gradient-to": [{ to: U4() }], rounded: [{ rounded: ee4() }], "rounded-s": [{ "rounded-s": ee4() }], "rounded-e": [{ "rounded-e": ee4() }], "rounded-t": [{ "rounded-t": ee4() }], "rounded-r": [{ "rounded-r": ee4() }], "rounded-b": [{ "rounded-b": ee4() }], "rounded-l": [{ "rounded-l": ee4() }], "rounded-ss": [{ "rounded-ss": ee4() }], "rounded-se": [{ "rounded-se": ee4() }], "rounded-ee": [{ "rounded-ee": ee4() }], "rounded-es": [{ "rounded-es": ee4() }], "rounded-tl": [{ "rounded-tl": ee4() }], "rounded-tr": [{ "rounded-tr": ee4() }], "rounded-br": [{ "rounded-br": ee4() }], "rounded-bl": [{ "rounded-bl": ee4() }], "border-w": [{ border: re4() }], "border-w-x": [{ "border-x": re4() }], "border-w-y": [{ "border-y": re4() }], "border-w-s": [{ "border-s": re4() }], "border-w-e": [{ "border-e": re4() }], "border-w-t": [{ "border-t": re4() }], "border-w-r": [{ "border-r": re4() }], "border-w-b": [{ "border-b": re4() }], "border-w-l": [{ "border-l": re4() }], "divide-x": [{ "divide-x": re4() }], "divide-x-reverse": ["divide-x-reverse"], "divide-y": [{ "divide-y": re4() }], "divide-y-reverse": ["divide-y-reverse"], "border-style": [{ border: ["solid", "dashed", "dotted", "double", "hidden", "none"] }], "divide-style": [{ divide: ["solid", "dashed", "dotted", "double", "hidden", "none"] }], "border-color": [{ border: U4() }], "border-color-x": [{ "border-x": U4() }], "border-color-y": [{ "border-y": U4() }], "border-color-s": [{ "border-s": U4() }], "border-color-e": [{ "border-e": U4() }], "border-color-t": [{ "border-t": U4() }], "border-color-r": [{ "border-r": U4() }], "border-color-b": [{ "border-b": U4() }], "border-color-l": [{ "border-l": U4() }], "divide-color": [{ divide: U4() }], "outline-style": [{ outline: ["solid", "dashed", "dotted", "double", "none", "hidden"] }], "outline-offset": [{ "outline-offset": [M3, B3, O3] }], "outline-w": [{ outline: ["", M3, D3, T3] }], "outline-color": [{ outline: U4() }], shadow: [{ shadow: ["", "none", c16, R3, L3] }], "shadow-color": [{ shadow: U4() }], "inset-shadow": [{ "inset-shadow": ["none", m8, R3, L3] }], "inset-shadow-color": [{ "inset-shadow": U4() }], "ring-w": [{ ring: re4() }], "ring-w-inset": ["ring-inset"], "ring-color": [{ ring: U4() }], "ring-offset-w": [{ "ring-offset": [M3, T3] }], "ring-offset-color": [{ "ring-offset": U4() }], "inset-ring-w": [{ "inset-ring": re4() }], "inset-ring-color": [{ "inset-ring": U4() }], "text-shadow": [{ "text-shadow": ["none", p9, R3, L3] }], "text-shadow-color": [{ "text-shadow": U4() }], opacity: [{ opacity: [M3, B3, O3] }], "mix-blend": [{ "mix-blend": ["normal", "multiply", "screen", "overlay", "darken", "lighten", "color-dodge", "color-burn", "hard-light", "soft-light", "difference", "exclusion", "hue", "saturation", "color", "luminosity", "plus-darker", "plus-lighter"] }], "bg-blend": [{ "bg-blend": ["normal", "multiply", "screen", "overlay", "darken", "lighten", "color-dodge", "color-burn", "hard-light", "soft-light", "difference", "exclusion", "hue", "saturation", "color", "luminosity"] }], "mask-clip": [{ "mask-clip": ["border", "padding", "content", "fill", "stroke", "view"] }, "mask-no-clip"], "mask-composite": [{ mask: ["add", "subtract", "intersect", "exclude"] }], "mask-image-linear-pos": [{ "mask-linear": [M3] }], "mask-image-linear-from-pos": [{ "mask-linear-from": oe4() }], "mask-image-linear-to-pos": [{ "mask-linear-to": oe4() }], "mask-image-linear-from-color": [{ "mask-linear-from": U4() }], "mask-image-linear-to-color": [{ "mask-linear-to": U4() }], "mask-image-t-from-pos": [{ "mask-t-from": oe4() }], "mask-image-t-to-pos": [{ "mask-t-to": oe4() }], "mask-image-t-from-color": [{ "mask-t-from": U4() }], "mask-image-t-to-color": [{ "mask-t-to": U4() }], "mask-image-r-from-pos": [{ "mask-r-from": oe4() }], "mask-image-r-to-pos": [{ "mask-r-to": oe4() }], "mask-image-r-from-color": [{ "mask-r-from": U4() }], "mask-image-r-to-color": [{ "mask-r-to": U4() }], "mask-image-b-from-pos": [{ "mask-b-from": oe4() }], "mask-image-b-to-pos": [{ "mask-b-to": oe4() }], "mask-image-b-from-color": [{ "mask-b-from": U4() }], "mask-image-b-to-color": [{ "mask-b-to": U4() }], "mask-image-l-from-pos": [{ "mask-l-from": oe4() }], "mask-image-l-to-pos": [{ "mask-l-to": oe4() }], "mask-image-l-from-color": [{ "mask-l-from": U4() }], "mask-image-l-to-color": [{ "mask-l-to": U4() }], "mask-image-x-from-pos": [{ "mask-x-from": oe4() }], "mask-image-x-to-pos": [{ "mask-x-to": oe4() }], "mask-image-x-from-color": [{ "mask-x-from": U4() }], "mask-image-x-to-color": [{ "mask-x-to": U4() }], "mask-image-y-from-pos": [{ "mask-y-from": oe4() }], "mask-image-y-to-pos": [{ "mask-y-to": oe4() }], "mask-image-y-from-color": [{ "mask-y-from": U4() }], "mask-image-y-to-color": [{ "mask-y-to": U4() }], "mask-image-radial": [{ "mask-radial": [B3, O3] }], "mask-image-radial-from-pos": [{ "mask-radial-from": oe4() }], "mask-image-radial-to-pos": [{ "mask-radial-to": oe4() }], "mask-image-radial-from-color": [{ "mask-radial-from": U4() }], "mask-image-radial-to-color": [{ "mask-radial-to": U4() }], "mask-image-radial-shape": [{ "mask-radial": ["circle", "ellipse"] }], "mask-image-radial-size": [{ "mask-radial": [{ closest: ["side", "corner"], farthest: ["side", "corner"] }] }], "mask-image-radial-pos": [{ "mask-radial-at": ["center", "top", "bottom", "left", "right", "top-left", "left-top", "top-right", "right-top", "bottom-right", "right-bottom", "bottom-left", "left-bottom"] }], "mask-image-conic-pos": [{ "mask-conic": [M3] }], "mask-image-conic-from-pos": [{ "mask-conic-from": oe4() }], "mask-image-conic-to-pos": [{ "mask-conic-to": oe4() }], "mask-image-conic-from-color": [{ "mask-conic-from": U4() }], "mask-image-conic-to-color": [{ "mask-conic-to": U4() }], "mask-mode": [{ mask: ["alpha", "luminance", "match"] }], "mask-origin": [{ "mask-origin": ["border", "padding", "content", "fill", "stroke", "view"] }], "mask-position": [{ mask: X4() }], "mask-repeat": [{ mask: ["no-repeat", { repeat: ["", "x", "y", "space", "round"] }] }], "mask-size": [{ mask: Y4() }], "mask-type": [{ "mask-type": ["alpha", "luminance"] }], "mask-image": [{ mask: ["none", B3, O3] }], filter: [{ filter: ["", "none", B3, O3] }], blur: [{ blur: te4() }], brightness: [{ brightness: [M3, B3, O3] }], contrast: [{ contrast: [M3, B3, O3] }], "drop-shadow": [{ "drop-shadow": ["", "none", b5, R3, L3] }], "drop-shadow-color": [{ "drop-shadow": U4() }], grayscale: [{ grayscale: ["", M3, B3, O3] }], "hue-rotate": [{ "hue-rotate": [M3, B3, O3] }], invert: [{ invert: ["", M3, B3, O3] }], saturate: [{ saturate: [M3, B3, O3] }], sepia: [{ sepia: ["", M3, B3, O3] }], "backdrop-filter": [{ "backdrop-filter": ["", "none", B3, O3] }], "backdrop-blur": [{ "backdrop-blur": te4() }], "backdrop-brightness": [{ "backdrop-brightness": [M3, B3, O3] }], "backdrop-contrast": [{ "backdrop-contrast": [M3, B3, O3] }], "backdrop-grayscale": [{ "backdrop-grayscale": ["", M3, B3, O3] }], "backdrop-hue-rotate": [{ "backdrop-hue-rotate": [M3, B3, O3] }], "backdrop-invert": [{ "backdrop-invert": ["", M3, B3, O3] }], "backdrop-opacity": [{ "backdrop-opacity": [M3, B3, O3] }], "backdrop-saturate": [{ "backdrop-saturate": [M3, B3, O3] }], "backdrop-sepia": [{ "backdrop-sepia": ["", M3, B3, O3] }], "border-collapse": [{ border: ["collapse", "separate"] }], "border-spacing": [{ "border-spacing": w4() }], "border-spacing-x": [{ "border-spacing-x": w4() }], "border-spacing-y": [{ "border-spacing-y": w4() }], "table-layout": [{ table: ["auto", "fixed"] }], caption: [{ caption: ["top", "bottom"] }], transition: [{ transition: ["", "all", "colors", "opacity", "shadow", "transform", "none", B3, O3] }], "transition-behavior": [{ transition: ["normal", "discrete"] }], duration: [{ duration: [M3, "initial", B3, O3] }], ease: [{ ease: ["linear", "initial", x7, B3, O3] }], delay: [{ delay: [M3, B3, O3] }], animate: [{ animate: ["none", k5, B3, O3] }], backface: [{ backface: ["hidden", "visible"] }], perspective: [{ perspective: [f7, B3, O3] }], "perspective-origin": [{ "perspective-origin": y6() }], rotate: [{ rotate: se4() }], "rotate-x": [{ "rotate-x": se4() }], "rotate-y": [{ "rotate-y": se4() }], "rotate-z": [{ "rotate-z": se4() }], scale: [{ scale: ae4() }], "scale-x": [{ "scale-x": ae4() }], "scale-y": [{ "scale-y": ae4() }], "scale-z": [{ "scale-z": ae4() }], "scale-3d": ["scale-3d"], skew: [{ skew: ne4() }], "skew-x": [{ "skew-x": ne4() }], "skew-y": [{ "skew-y": ne4() }], transform: [{ transform: [B3, O3, "", "none", "gpu", "cpu"] }], "transform-origin": [{ origin: y6() }], "transform-style": [{ transform: ["3d", "flat"] }], translate: [{ translate: ie3() }], "translate-x": [{ "translate-x": ie3() }], "translate-y": [{ "translate-y": ie3() }], "translate-z": [{ "translate-z": ie3() }], "translate-none": ["translate-none"], accent: [{ accent: U4() }], appearance: [{ appearance: ["none", "auto"] }], "caret-color": [{ caret: U4() }], "color-scheme": [{ scheme: ["normal", "dark", "light", "light-dark", "only-dark", "only-light"] }], cursor: [{ cursor: ["auto", "default", "pointer", "wait", "text", "move", "help", "not-allowed", "none", "context-menu", "progress", "cell", "crosshair", "vertical-text", "alias", "copy", "no-drop", "grab", "grabbing", "all-scroll", "col-resize", "row-resize", "n-resize", "e-resize", "s-resize", "w-resize", "ne-resize", "nw-resize", "se-resize", "sw-resize", "ew-resize", "ns-resize", "nesw-resize", "nwse-resize", "zoom-in", "zoom-out", B3, O3] }], "field-sizing": [{ "field-sizing": ["fixed", "content"] }], "pointer-events": [{ "pointer-events": ["auto", "none"] }], resize: [{ resize: ["none", "", "y", "x"] }], "scroll-behavior": [{ scroll: ["auto", "smooth"] }], "scroll-m": [{ "scroll-m": w4() }], "scroll-mx": [{ "scroll-mx": w4() }], "scroll-my": [{ "scroll-my": w4() }], "scroll-ms": [{ "scroll-ms": w4() }], "scroll-me": [{ "scroll-me": w4() }], "scroll-mt": [{ "scroll-mt": w4() }], "scroll-mr": [{ "scroll-mr": w4() }], "scroll-mb": [{ "scroll-mb": w4() }], "scroll-ml": [{ "scroll-ml": w4() }], "scroll-p": [{ "scroll-p": w4() }], "scroll-px": [{ "scroll-px": w4() }], "scroll-py": [{ "scroll-py": w4() }], "scroll-ps": [{ "scroll-ps": w4() }], "scroll-pe": [{ "scroll-pe": w4() }], "scroll-pt": [{ "scroll-pt": w4() }], "scroll-pr": [{ "scroll-pr": w4() }], "scroll-pb": [{ "scroll-pb": w4() }], "scroll-pl": [{ "scroll-pl": w4() }], "snap-align": [{ snap: ["start", "end", "center", "align-none"] }], "snap-stop": [{ snap: ["normal", "always"] }], "snap-type": [{ snap: ["none", "x", "y", "both"] }], "snap-strictness": [{ snap: ["mandatory", "proximity"] }], touch: [{ touch: ["auto", "none", "manipulation"] }], "touch-x": [{ "touch-pan": ["x", "left", "right"] }], "touch-y": [{ "touch-pan": ["y", "up", "down"] }], "touch-pz": ["touch-pinch-zoom"], select: [{ select: ["none", "text", "all", "auto"] }], "will-change": [{ "will-change": ["auto", "scroll", "contents", "transform", B3, O3] }], fill: [{ fill: ["none", ...U4()] }], "stroke-w": [{ stroke: [M3, D3, T3, W3] }], stroke: [{ stroke: ["none", ...U4()] }], "forced-color-adjust": [{ "forced-color-adjust": ["auto", "none"] }] }, conflictingClassGroups: { overflow: ["overflow-x", "overflow-y"], overscroll: ["overscroll-x", "overscroll-y"], inset: ["inset-x", "inset-y", "start", "end", "top", "right", "bottom", "left"], "inset-x": ["right", "left"], "inset-y": ["top", "bottom"], flex: ["basis", "grow", "shrink"], gap: ["gap-x", "gap-y"], p: ["px", "py", "ps", "pe", "pt", "pr", "pb", "pl"], px: ["pr", "pl"], py: ["pt", "pb"], m: ["mx", "my", "ms", "me", "mt", "mr", "mb", "ml"], mx: ["mr", "ml"], my: ["mt", "mb"], size: ["w", "h"], "font-size": ["leading"], "fvn-normal": ["fvn-ordinal", "fvn-slashed-zero", "fvn-figure", "fvn-spacing", "fvn-fraction"], "fvn-ordinal": ["fvn-normal"], "fvn-slashed-zero": ["fvn-normal"], "fvn-figure": ["fvn-normal"], "fvn-spacing": ["fvn-normal"], "fvn-fraction": ["fvn-normal"], "line-clamp": ["display", "overflow"], rounded: ["rounded-s", "rounded-e", "rounded-t", "rounded-r", "rounded-b", "rounded-l", "rounded-ss", "rounded-se", "rounded-ee", "rounded-es", "rounded-tl", "rounded-tr", "rounded-br", "rounded-bl"], "rounded-s": ["rounded-ss", "rounded-es"], "rounded-e": ["rounded-se", "rounded-ee"], "rounded-t": ["rounded-tl", "rounded-tr"], "rounded-r": ["rounded-tr", "rounded-br"], "rounded-b": ["rounded-br", "rounded-bl"], "rounded-l": ["rounded-tl", "rounded-bl"], "border-spacing": ["border-spacing-x", "border-spacing-y"], "border-w": ["border-w-x", "border-w-y", "border-w-s", "border-w-e", "border-w-t", "border-w-r", "border-w-b", "border-w-l"], "border-w-x": ["border-w-r", "border-w-l"], "border-w-y": ["border-w-t", "border-w-b"], "border-color": ["border-color-x", "border-color-y", "border-color-s", "border-color-e", "border-color-t", "border-color-r", "border-color-b", "border-color-l"], "border-color-x": ["border-color-r", "border-color-l"], "border-color-y": ["border-color-t", "border-color-b"], translate: ["translate-x", "translate-y", "translate-none"], "translate-none": ["translate", "translate-x", "translate-y", "translate-z"], "scroll-m": ["scroll-mx", "scroll-my", "scroll-ms", "scroll-me", "scroll-mt", "scroll-mr", "scroll-mb", "scroll-ml"], "scroll-mx": ["scroll-mr", "scroll-ml"], "scroll-my": ["scroll-mt", "scroll-mb"], "scroll-p": ["scroll-px", "scroll-py", "scroll-ps", "scroll-pe", "scroll-pt", "scroll-pr", "scroll-pb", "scroll-pl"], "scroll-px": ["scroll-pr", "scroll-pl"], "scroll-py": ["scroll-pt", "scroll-pb"], touch: ["touch-x", "touch-y", "touch-pz"], "touch-x": ["touch"], "touch-y": ["touch"], "touch-pz": ["touch"] }, conflictingClassGroupModifiers: { "font-size": ["leading"] }, orderSensitiveModifiers: ["*", "**", "after", "backdrop", "before", "details-content", "file", "first-letter", "first-line", "marker", "placeholder", "selection"] };
};
var be2 = f4(ne3);

// internal:@/lib/utils
function cn2(...inputs) {
  return be2(e6(inputs));
}

// external:https://cdn.jsdelivr.net/npm/react@18.3.1/jsx-runtime/+esm
var e8 = { exports: {} };
var o5 = {};
var t6 = L;
var s5 = Symbol.for("react.element");
var p5 = Symbol.for("react.fragment");
var n5 = Object.prototype.hasOwnProperty;
var a6 = t6.__SECRET_INTERNALS_DO_NOT_USE_OR_YOU_WILL_BE_FIRED.ReactCurrentOwner;
var f5 = { key: true, ref: true, __self: true, __source: true };
function _5(r10, e10, o21) {
  var t18, p9 = {}, _6 = null, l12 = null;
  for (t18 in void 0 !== o21 && (_6 = "" + o21), void 0 !== e10.key && (_6 = "" + e10.key), void 0 !== e10.ref && (l12 = e10.ref), e10) n5.call(e10, t18) && !f5.hasOwnProperty(t18) && (p9[t18] = e10[t18]);
  if (r10 && r10.defaultProps) for (t18 in e10 = r10.defaultProps) void 0 === p9[t18] && (p9[t18] = e10[t18]);
  return { $$typeof: s5, type: r10, key: _6, ref: l12, props: p9, _owner: a6.current };
}
o5.Fragment = p5, o5.jsx = _5, o5.jsxs = _5, e8.exports = o5;
var l5 = e8.exports;
var x5 = e8.exports.Fragment;
var y5 = e8.exports.jsx;
var m5 = e8.exports.jsxs;

// internal:@/components/ui/alert
var alertVariants = r6(
  "relative w-full rounded-lg border px-4 py-3 text-sm [&>svg+div]:translate-y-[-3px] [&>svg]:absolute [&>svg]:left-4 [&>svg]:top-4 [&>svg]:text-foreground [&>svg~*]:pl-7",
  {
    variants: {
      variant: {
        default: "bg-background text-foreground",
        destructive: "border-destructive/50 text-destructive dark:border-destructive [&>svg]:text-destructive"
      }
    },
    defaultVariants: {
      variant: "default"
    }
  }
);
var Alert = Q(({ className, variant, ...props }, ref) => /* @__PURE__ */ y5(
  "div",
  {
    ref,
    role: "alert",
    className: cn2(alertVariants({ variant }), className),
    ...props
  }
));
Alert.displayName = "Alert";
var AlertTitle = Q(({ className, ...props }, ref) => /* @__PURE__ */ y5(
  "h5",
  {
    ref,
    className: cn2("mb-1 font-medium leading-none tracking-tight", className),
    ...props
  }
));
AlertTitle.displayName = "AlertTitle";
var AlertDescription = Q(({ className, ...props }, ref) => /* @__PURE__ */ y5(
  "div",
  {
    ref,
    className: cn2("text-sm [&_p]:leading-relaxed", className),
    ...props
  }
));
AlertDescription.displayName = "AlertDescription";

// internal:@/components/ui/badge
var badgeVariants = r6(
  "inline-flex items-center rounded-full border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2",
  {
    variants: {
      variant: {
        default: "border-transparent bg-primary text-primary-foreground hover:bg-primary/80",
        secondary: "border-transparent bg-secondary text-secondary-foreground hover:bg-secondary/80",
        destructive: "border-transparent bg-destructive text-destructive-foreground hover:bg-destructive/80",
        outline: "text-foreground"
      }
    },
    defaultVariants: {
      variant: "default"
    }
  }
);
function Badge({ className, variant, ...props }) {
  return /* @__PURE__ */ y5("div", { className: cn2(badgeVariants({ variant }), className), ...props });
}

// external:https://cdn.jsdelivr.net/npm/@radix-ui/react-compose-refs@1.1.2/+esm
function t7(n14, t18) {
  if ("function" == typeof n14) return n14(t18);
  null != n14 && (n14.current = t18);
}
function e9(...n14) {
  return (e10) => {
    let r10 = false;
    const o21 = n14.map((n15) => {
      const o22 = t7(n15, e10);
      return r10 || "function" != typeof o22 || (r10 = true), o22;
    });
    if (r10) return () => {
      for (let e11 = 0; e11 < o21.length; e11++) {
        const r11 = o21[e11];
        "function" == typeof r11 ? r11() : t7(n14[e11], null);
      }
    };
  };
}

// external:https://cdn.jsdelivr.net/npm/@radix-ui/react-slot/+esm
function o6(r10) {
  const t18 = l6(r10), o21 = Q((r11, o22) => {
    const { children: i19, ...l12 } = r11, a20 = F.toArray(i19), c16 = a20.find(p6);
    if (c16) {
      const r12 = c16.props.children, i20 = a20.map((n14) => n14 === c16 ? F.count(r12) > 1 ? F.only(null) : X(r12) ? r12.props.children : null : n14);
      return y5(t18, { ...l12, ref: o22, children: X(r12) ? W(r12, void 0, i20) : null });
    }
    return y5(t18, { ...l12, ref: o22, children: i19 });
  });
  return o21.displayName = `${r10}.Slot`, o21;
}
var i5 = o6("Slot");
function l6(n14) {
  const t18 = Q((n15, t19) => {
    const { children: o21, ...i19 } = n15;
    if (X(o21)) {
      const n16 = function(e10) {
        let r10 = Object.getOwnPropertyDescriptor(e10.props, "ref")?.get, n17 = r10 && "isReactWarning" in r10 && r10.isReactWarning;
        if (n17) return e10.ref;
        if (r10 = Object.getOwnPropertyDescriptor(e10, "ref")?.get, n17 = r10 && "isReactWarning" in r10 && r10.isReactWarning, n17) return e10.props.ref;
        return e10.props.ref || e10.ref;
      }(o21), l12 = function(e10, r10) {
        const n17 = { ...r10 };
        for (const t20 in r10) {
          const o22 = e10[t20], i20 = r10[t20];
          /^on[A-Z]/.test(t20) ? o22 && i20 ? n17[t20] = (...e11) => {
            const r11 = i20(...e11);
            return o22(...e11), r11;
          } : o22 && (n17[t20] = o22) : "style" === t20 ? n17[t20] = { ...o22, ...i20 } : "className" === t20 && (n17[t20] = [o22, i20].filter(Boolean).join(" "));
        }
        return { ...e10, ...n17 };
      }(i19, o21.props);
      return o21.type !== A && (l12.ref = t19 ? e9(t19, n16) : n16), W(o21, l12);
    }
    return F.count(o21) > 1 ? F.only(null) : null;
  });
  return t18.displayName = `${n14}.SlotClone`, t18;
}
var a7 = Symbol("radix.slottable");
function c5(e10) {
  const r10 = ({ children: e11 }) => y5(x5, { children: e11 });
  return r10.displayName = `${e10}.Slottable`, r10.__radixId = a7, r10;
}
var s6 = c5("Slottable");
function p6(r10) {
  return X(r10) && "function" == typeof r10.type && "__radixId" in r10.type && r10.type.__radixId === a7;
}

// internal:@/components/ui/button
var buttonVariants = r6(
  "inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md text-sm font-medium transition-colors focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-ring disabled:pointer-events-none disabled:opacity-50 [&_svg]:pointer-events-none [&_svg]:size-4 [&_svg]:shrink-0",
  {
    variants: {
      variant: {
        default: "bg-primary text-primary-foreground shadow hover:bg-primary/90",
        destructive: "bg-destructive text-destructive-foreground shadow-sm hover:bg-destructive/90",
        outline: "border border-input bg-background shadow-sm hover:bg-accent hover:text-accent-foreground",
        secondary: "bg-secondary text-secondary-foreground shadow-sm hover:bg-secondary/80",
        ghost: "hover:bg-accent hover:text-accent-foreground",
        link: "text-primary underline-offset-4 hover:underline"
      },
      size: {
        default: "h-9 px-4 py-2",
        sm: "h-8 rounded-md px-3 text-xs",
        lg: "h-10 rounded-md px-8",
        icon: "h-9 w-9"
      }
    },
    defaultVariants: {
      variant: "default",
      size: "default"
    }
  }
);
var Button = Q(
  ({ className, variant, size, asChild = false, ...props }, ref) => {
    const Comp = asChild ? i5 : "button";
    return /* @__PURE__ */ y5(
      Comp,
      {
        className: cn2(buttonVariants({ variant, size, className })),
        ref,
        ...props
      }
    );
  }
);
Button.displayName = "Button";

// internal:@/components/ui/card
var Card = Q(({ className, ...props }, ref) => /* @__PURE__ */ y5(
  "div",
  {
    ref,
    className: cn2(
      "rounded-lg border bg-card text-card-foreground shadow-sm",
      className
    ),
    ...props
  }
));
Card.displayName = "Card";
var CardHeader = Q(({ className, ...props }, ref) => /* @__PURE__ */ y5(
  "div",
  {
    ref,
    className: cn2("flex flex-col space-y-1.5 p-6", className),
    ...props
  }
));
CardHeader.displayName = "CardHeader";
var CardTitle = Q(({ className, ...props }, ref) => /* @__PURE__ */ y5(
  "div",
  {
    ref,
    className: cn2(
      "text-2xl font-semibold leading-none tracking-tight",
      className
    ),
    ...props
  }
));
CardTitle.displayName = "CardTitle";
var CardDescription = Q(({ className, ...props }, ref) => /* @__PURE__ */ y5(
  "div",
  {
    ref,
    className: cn2("text-sm text-muted-foreground", className),
    ...props
  }
));
CardDescription.displayName = "CardDescription";
var CardContent = Q(({ className, ...props }, ref) => /* @__PURE__ */ y5("div", { ref, className: cn2("p-6 pt-0", className), ...props }));
CardContent.displayName = "CardContent";
var CardFooter = Q(({ className, ...props }, ref) => /* @__PURE__ */ y5(
  "div",
  {
    ref,
    className: cn2("flex items-center p-6 pt-0", className),
    ...props
  }
));
CardFooter.displayName = "CardFooter";

// external:https://cdn.jsdelivr.net/npm/@radix-ui/react-context@1.1.2/+esm
function r9(n14, r10 = []) {
  let c16 = [];
  const s19 = () => {
    const t18 = c16.map((t19) => Y(t19));
    return function(r11) {
      const o21 = r11?.[n14] || t18;
      return pe(() => ({ [`__scope${n14}`]: { ...r11, [n14]: o21 } }), [r11, o21]);
    };
  };
  return s19.scopeName = n14, [function(r11, o21) {
    const s20 = Y(o21), u6 = c16.length;
    c16 = [...c16, o21];
    const i19 = (r12) => {
      const { scope: o22, children: c17, ...i20 } = r12, a20 = o22?.[n14]?.[u6] || s20, m8 = pe(() => i20, Object.values(i20));
      return y5(a20.Provider, { value: m8, children: c17 });
    };
    return i19.displayName = r11 + "Provider", [i19, function(t18, c17) {
      const i20 = c17?.[n14]?.[u6] || s20, a20 = oe(i20);
      if (a20) return a20;
      if (void 0 !== o21) return o21;
      throw new Error(`\`${t18}\` must be used within \`${r11}\``);
    }];
  }, o7(s19, ...r10)];
}
function o7(...t18) {
  const n14 = t18[0];
  if (1 === t18.length) return n14;
  const r10 = () => {
    const r11 = t18.map((e10) => ({ useScope: e10(), scopeName: e10.scopeName }));
    return function(t19) {
      const o21 = r11.reduce((e10, { useScope: n15, scopeName: r12 }) => ({ ...e10, ...n15(t19)[`__scope${r12}`] }), {});
      return pe(() => ({ [`__scope${n14.scopeName}`]: o21 }), [o21]);
    };
  };
  return r10.scopeName = n14.scopeName, r10;
}

// external:https://cdn.jsdelivr.net/npm/@radix-ui/react-slot@1.2.3/+esm
function o8(r10) {
  const t18 = l7(r10), o21 = Q((r11, o22) => {
    const { children: i19, ...l12 } = r11, a20 = F.toArray(i19), c16 = a20.find(p7);
    if (c16) {
      const r12 = c16.props.children, i20 = a20.map((n14) => n14 === c16 ? F.count(r12) > 1 ? F.only(null) : X(r12) ? r12.props.children : null : n14);
      return y5(t18, { ...l12, ref: o22, children: X(r12) ? W(r12, void 0, i20) : null });
    }
    return y5(t18, { ...l12, ref: o22, children: i19 });
  });
  return o21.displayName = `${r10}.Slot`, o21;
}
var i6 = o8("Slot");
function l7(n14) {
  const t18 = Q((n15, t19) => {
    const { children: o21, ...i19 } = n15;
    if (X(o21)) {
      const n16 = function(e10) {
        let r10 = Object.getOwnPropertyDescriptor(e10.props, "ref")?.get, n17 = r10 && "isReactWarning" in r10 && r10.isReactWarning;
        if (n17) return e10.ref;
        if (r10 = Object.getOwnPropertyDescriptor(e10, "ref")?.get, n17 = r10 && "isReactWarning" in r10 && r10.isReactWarning, n17) return e10.props.ref;
        return e10.props.ref || e10.ref;
      }(o21), l12 = function(e10, r10) {
        const n17 = { ...r10 };
        for (const t20 in r10) {
          const o22 = e10[t20], i20 = r10[t20];
          /^on[A-Z]/.test(t20) ? o22 && i20 ? n17[t20] = (...e11) => {
            const r11 = i20(...e11);
            return o22(...e11), r11;
          } : o22 && (n17[t20] = o22) : "style" === t20 ? n17[t20] = { ...o22, ...i20 } : "className" === t20 && (n17[t20] = [o22, i20].filter(Boolean).join(" "));
        }
        return { ...e10, ...n17 };
      }(i19, o21.props);
      return o21.type !== A && (l12.ref = t19 ? e9(t19, n16) : n16), W(o21, l12);
    }
    return F.count(o21) > 1 ? F.only(null) : null;
  });
  return t18.displayName = `${n14}.SlotClone`, t18;
}
var a8 = Symbol("radix.slottable");
function c6(e10) {
  const r10 = ({ children: e11 }) => y5(x5, { children: e11 });
  return r10.displayName = `${e10}.Slottable`, r10.__radixId = a8, r10;
}
var s7 = c6("Slottable");
function p7(r10) {
  return X(r10) && "function" == typeof r10.type && "__radixId" in r10.type && r10.type.__radixId === a8;
}

// external:https://cdn.jsdelivr.net/npm/@radix-ui/react-primitive@2.1.3/+esm
var m6 = ["a", "button", "div", "form", "h2", "h3", "img", "input", "label", "li", "nav", "ol", "p", "select", "span", "svg", "ul"].reduce((e10, m8) => {
  const o21 = o8(`Primitive.${m8}`), n14 = Q((r10, e11) => {
    const { asChild: t18, ...n15 } = r10, a20 = t18 ? o21 : m8;
    return "undefined" != typeof window && (window[Symbol.for("radix-ui")] = true), y5(a20, { ...n15, ref: e11 });
  });
  return n14.displayName = `Primitive.${m8}`, { ...e10, [m8]: n14 };
}, {});

// external:https://cdn.jsdelivr.net/npm/@radix-ui/react-progress/+esm
var n6 = "Progress";
var o9 = 100;
var [i7, u5] = r9(n6);
var [l8, s8] = i7(n6);
var m7 = Q((e10, r10) => {
  const { __scopeProgress: n14, value: i19 = null, max: u6, getValueLabel: s19 = v5, ...m8 } = e10;
  !u6 && 0 !== u6 || x6(u6) || console.error(`Invalid prop \`max\` of value \`${`${u6}`}\` supplied to \`${"Progress"}\`. Only numbers greater than 0 are valid max values. Defaulting to \`100\`.`);
  const p9 = x6(u6) ? u6 : o9;
  null === i19 || g5(i19, p9) || console.error(function(e11, r11) {
    return `Invalid prop \`value\` of value \`${e11}\` supplied to \`${r11}\`. The \`value\` prop must be:
  - a positive number
  - less than the value passed to \`max\` (or 100 if no \`max\` prop is set)
  - \`null\` or \`undefined\` if the progress is indeterminate.

Defaulting to \`null\`.`;
  }(`${i19}`, "Progress"));
  const d6 = g5(i19, p9) ? i19 : null, h7 = c7(d6) ? s19(d6, p9) : void 0;
  return y5(l8, { scope: n14, value: d6, max: p9, children: y5(m6.div, { "aria-valuemax": p9, "aria-valuemin": 0, "aria-valuenow": c7(d6) ? d6 : void 0, "aria-valuetext": h7, role: "progressbar", "data-state": f6(d6, p9), "data-value": d6 ?? void 0, "data-max": p9, ...m8, ref: r10 }) });
});
m7.displayName = n6;
var p8 = "ProgressIndicator";
var d5 = Q((e10, r10) => {
  const { __scopeProgress: n14, ...o21 } = e10, i19 = s8(p8, n14);
  return y5(m6.div, { "data-state": f6(i19.value, i19.max), "data-value": i19.value ?? void 0, "data-max": i19.max, ...o21, ref: r10 });
});
function v5(e10, r10) {
  return `${Math.round(e10 / r10 * 100)}%`;
}
function f6(e10, r10) {
  return null == e10 ? "indeterminate" : e10 === r10 ? "complete" : "loading";
}
function c7(e10) {
  return "number" == typeof e10;
}
function x6(e10) {
  return c7(e10) && !isNaN(e10) && e10 > 0;
}
function g5(e10, r10) {
  return c7(e10) && !isNaN(e10) && e10 <= r10 && e10 >= 0;
}
d5.displayName = p8;
var h4 = m7;
var $4 = d5;

// internal:@/components/ui/progress
var Progress = Q(({ className, value, ...props }, ref) => /* @__PURE__ */ y5(
  h4,
  {
    ref,
    className: cn2(
      "relative h-4 w-full overflow-hidden rounded-full bg-secondary",
      className
    ),
    ...props,
    children: /* @__PURE__ */ y5(
      $4,
      {
        className: "h-full w-full flex-1 bg-primary transition-all",
        style: { transform: `translateX(-${100 - (value || 0)}%)` }
      }
    )
  }
));
Progress.displayName = h4.displayName;

// external:https://cdn.jsdelivr.net/npm/@radix-ui/react-separator/+esm
var o10 = "horizontal";
var a9 = ["horizontal", "vertical"];
var i8 = Q((r10, i19) => {
  const { decorative: n14, orientation: m8 = o10, ...p9 } = r10, l12 = function(r11) {
    return a9.includes(r11);
  }(m8) ? m8 : o10, c16 = n14 ? { role: "none" } : { "aria-orientation": "vertical" === l12 ? l12 : void 0, role: "separator" };
  return y5(m6.div, { "data-orientation": l12, ...c16, ...p9, ref: i19 });
});
i8.displayName = "Separator";
var n7 = i8;

// internal:@/components/ui/separator
var Separator = Q(
  ({ className, orientation = "horizontal", decorative = true, ...props }, ref) => /* @__PURE__ */ y5(
    n7,
    {
      ref,
      decorative,
      orientation,
      className: cn2(
        "shrink-0 bg-border",
        orientation === "horizontal" ? "h-[1px] w-full" : "h-full w-[1px]",
        className
      ),
      ...props
    }
  )
);
Separator.displayName = n7.displayName;

// external:https://cdn.jsdelivr.net/npm/lucide-react/dist/esm/icons/check-circle-2.js/+esm
var t8 = (e10) => {
  const r10 = ((e11) => e11.replace(/^([A-Z])|[\s-_]+(\w)/g, (e12, r11, t18) => t18 ? t18.toUpperCase() : r11.toLowerCase()))(e10);
  return r10.charAt(0).toUpperCase() + r10.slice(1);
};
var o11 = (...e10) => e10.filter((e11, r10, t18) => Boolean(e11) && "" !== e11.trim() && t18.indexOf(e11) === r10).join(" ").trim();
var i9 = (e10) => {
  for (const r10 in e10) if (r10.startsWith("aria-") || "role" === r10 || "title" === r10) return true;
};
var s9 = { xmlns: "http://www.w3.org/2000/svg", width: 24, height: 24, viewBox: "0 0 24 24", fill: "none", stroke: "currentColor", strokeWidth: 2, strokeLinecap: "round", strokeLinejoin: "round" };
var a10 = Q(({ color: e10 = "currentColor", size: t18 = 24, strokeWidth: a20 = 2, absoluteStrokeWidth: c16, className: n14 = "", children: l12, iconNode: d6, ...m8 }, h7) => G("svg", { ref: h7, ...s9, width: t18, height: t18, stroke: e10, strokeWidth: c16 ? 24 * Number(a20) / Number(t18) : a20, className: o11("lucide", n14), ...!l12 && !i9(m8) && { "aria-hidden": "true" }, ...m8 }, [...d6.map(([e11, t19]) => G(e11, t19)), ...Array.isArray(l12) ? l12 : [l12]]));
var c8 = ((i19, s19) => {
  const c16 = Q(({ className: e10, ...c17 }, n14) => {
    return G(a10, { ref: n14, iconNode: s19, className: o11(`lucide-${l12 = t8(i19), l12.replace(/([a-z0-9])([A-Z])/g, "$1-$2").toLowerCase()}`, `lucide-${i19}`, e10), ...c17 });
    var l12;
  });
  return c16.displayName = t8(i19), c16;
})("circle-check", [["circle", { cx: "12", cy: "12", r: "10", key: "1mglay" }], ["path", { d: "m9 12 2 2 4-4", key: "dzmm74" }]]);

// external:https://cdn.jsdelivr.net/npm/lucide-react/dist/esm/icons/circle-alert.js/+esm
var t9 = (e10) => {
  const r10 = ((e11) => e11.replace(/^([A-Z])|[\s-_]+(\w)/g, (e12, r11, t18) => t18 ? t18.toUpperCase() : r11.toLowerCase()))(e10);
  return r10.charAt(0).toUpperCase() + r10.slice(1);
};
var o12 = (...e10) => e10.filter((e11, r10, t18) => Boolean(e11) && "" !== e11.trim() && t18.indexOf(e11) === r10).join(" ").trim();
var i10 = (e10) => {
  for (const r10 in e10) if (r10.startsWith("aria-") || "role" === r10 || "title" === r10) return true;
};
var s10 = { xmlns: "http://www.w3.org/2000/svg", width: 24, height: 24, viewBox: "0 0 24 24", fill: "none", stroke: "currentColor", strokeWidth: 2, strokeLinecap: "round", strokeLinejoin: "round" };
var a11 = Q(({ color: e10 = "currentColor", size: t18 = 24, strokeWidth: a20 = 2, absoluteStrokeWidth: c16, className: l12 = "", children: n14, iconNode: d6, ...u6 }, h7) => G("svg", { ref: h7, ...s10, width: t18, height: t18, stroke: e10, strokeWidth: c16 ? 24 * Number(a20) / Number(t18) : a20, className: o12("lucide", l12), ...!n14 && !i10(u6) && { "aria-hidden": "true" }, ...u6 }, [...d6.map(([e11, t19]) => G(e11, t19)), ...Array.isArray(n14) ? n14 : [n14]]));
var c9 = [["circle", { cx: "12", cy: "12", r: "10", key: "1mglay" }], ["line", { x1: "12", x2: "12", y1: "8", y2: "12", key: "1pkeuh" }], ["line", { x1: "12", x2: "12.01", y1: "16", y2: "16", key: "4dfq90" }]];
var l9 = ((i19, s19) => {
  const c16 = Q(({ className: e10, ...c17 }, l12) => {
    return G(a11, { ref: l12, iconNode: s19, className: o12(`lucide-${n14 = t9(i19), n14.replace(/([a-z0-9])([A-Z])/g, "$1-$2").toLowerCase()}`, `lucide-${i19}`, e10), ...c17 });
    var n14;
  });
  return c16.displayName = t9(i19), c16;
})("circle-alert", c9);

// external:https://cdn.jsdelivr.net/npm/lucide-react/dist/esm/icons/clock.js/+esm
var t10 = (e10) => {
  const r10 = ((e11) => e11.replace(/^([A-Z])|[\s-_]+(\w)/g, (e12, r11, t18) => t18 ? t18.toUpperCase() : r11.toLowerCase()))(e10);
  return r10.charAt(0).toUpperCase() + r10.slice(1);
};
var o13 = (...e10) => e10.filter((e11, r10, t18) => Boolean(e11) && "" !== e11.trim() && t18.indexOf(e11) === r10).join(" ").trim();
var i11 = (e10) => {
  for (const r10 in e10) if (r10.startsWith("aria-") || "role" === r10 || "title" === r10) return true;
};
var s11 = { xmlns: "http://www.w3.org/2000/svg", width: 24, height: 24, viewBox: "0 0 24 24", fill: "none", stroke: "currentColor", strokeWidth: 2, strokeLinecap: "round", strokeLinejoin: "round" };
var a12 = Q(({ color: e10 = "currentColor", size: t18 = 24, strokeWidth: a20 = 2, absoluteStrokeWidth: c16, className: l12 = "", children: n14, iconNode: d6, ...m8 }, h7) => G("svg", { ref: h7, ...s11, width: t18, height: t18, stroke: e10, strokeWidth: c16 ? 24 * Number(a20) / Number(t18) : a20, className: o13("lucide", l12), ...!n14 && !i11(m8) && { "aria-hidden": "true" }, ...m8 }, [...d6.map(([e11, t19]) => G(e11, t19)), ...Array.isArray(n14) ? n14 : [n14]]));
var c10 = [["path", { d: "M12 6v6l4 2", key: "mmk7yg" }], ["circle", { cx: "12", cy: "12", r: "10", key: "1mglay" }]];
var l10 = ((i19, s19) => {
  const c16 = Q(({ className: e10, ...c17 }, l12) => {
    return G(a12, { ref: l12, iconNode: s19, className: o13(`lucide-${n14 = t10(i19), n14.replace(/([a-z0-9])([A-Z])/g, "$1-$2").toLowerCase()}`, `lucide-${i19}`, e10), ...c17 });
    var n14;
  });
  return c16.displayName = t10(i19), c16;
})("clock", c10);

// external:https://cdn.jsdelivr.net/npm/lucide-react/dist/esm/icons/coins.js/+esm
var t11 = (e10) => {
  const r10 = ((e11) => e11.replace(/^([A-Z])|[\s-_]+(\w)/g, (e12, r11, t18) => t18 ? t18.toUpperCase() : r11.toLowerCase()))(e10);
  return r10.charAt(0).toUpperCase() + r10.slice(1);
};
var o14 = (...e10) => e10.filter((e11, r10, t18) => Boolean(e11) && "" !== e11.trim() && t18.indexOf(e11) === r10).join(" ").trim();
var s12 = (e10) => {
  for (const r10 in e10) if (r10.startsWith("aria-") || "role" === r10 || "title" === r10) return true;
};
var i12 = { xmlns: "http://www.w3.org/2000/svg", width: 24, height: 24, viewBox: "0 0 24 24", fill: "none", stroke: "currentColor", strokeWidth: 2, strokeLinecap: "round", strokeLinejoin: "round" };
var a13 = Q(({ color: e10 = "currentColor", size: t18 = 24, strokeWidth: a20 = 2, absoluteStrokeWidth: c16, className: n14 = "", children: l12, iconNode: d6, ...h7 }, m8) => G("svg", { ref: m8, ...i12, width: t18, height: t18, stroke: e10, strokeWidth: c16 ? 24 * Number(a20) / Number(t18) : a20, className: o14("lucide", n14), ...!l12 && !s12(h7) && { "aria-hidden": "true" }, ...h7 }, [...d6.map(([e11, t19]) => G(e11, t19)), ...Array.isArray(l12) ? l12 : [l12]]));
var c11 = [["circle", { cx: "8", cy: "8", r: "6", key: "3yglwk" }], ["path", { d: "M18.09 10.37A6 6 0 1 1 10.34 18", key: "t5s6rm" }], ["path", { d: "M7 6h1v4", key: "1obek4" }], ["path", { d: "m16.71 13.88.7.71-2.82 2.82", key: "1rbuyh" }]];
var n8 = ((s19, i19) => {
  const c16 = Q(({ className: e10, ...c17 }, n14) => {
    return G(a13, { ref: n14, iconNode: i19, className: o14(`lucide-${l12 = t11(s19), l12.replace(/([a-z0-9])([A-Z])/g, "$1-$2").toLowerCase()}`, `lucide-${s19}`, e10), ...c17 });
    var l12;
  });
  return c16.displayName = t11(s19), c16;
})("coins", c11);

// external:https://cdn.jsdelivr.net/npm/lucide-react/dist/esm/icons/shield-check.js/+esm
var t12 = (e10) => {
  const r10 = ((e11) => e11.replace(/^([A-Z])|[\s-_]+(\w)/g, (e12, r11, t18) => t18 ? t18.toUpperCase() : r11.toLowerCase()))(e10);
  return r10.charAt(0).toUpperCase() + r10.slice(1);
};
var o15 = (...e10) => e10.filter((e11, r10, t18) => Boolean(e11) && "" !== e11.trim() && t18.indexOf(e11) === r10).join(" ").trim();
var a14 = (e10) => {
  for (const r10 in e10) if (r10.startsWith("aria-") || "role" === r10 || "title" === r10) return true;
};
var s13 = { xmlns: "http://www.w3.org/2000/svg", width: 24, height: 24, viewBox: "0 0 24 24", fill: "none", stroke: "currentColor", strokeWidth: 2, strokeLinecap: "round", strokeLinejoin: "round" };
var i13 = Q(({ color: e10 = "currentColor", size: t18 = 24, strokeWidth: i19 = 2, absoluteStrokeWidth: c16, className: n14 = "", children: l12, iconNode: d6, ...h7 }, m8) => G("svg", { ref: m8, ...s13, width: t18, height: t18, stroke: e10, strokeWidth: c16 ? 24 * Number(i19) / Number(t18) : i19, className: o15("lucide", n14), ...!l12 && !a14(h7) && { "aria-hidden": "true" }, ...h7 }, [...d6.map(([e11, t19]) => G(e11, t19)), ...Array.isArray(l12) ? l12 : [l12]]));
var c12 = [["path", { d: "M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z", key: "oel41y" }], ["path", { d: "m9 12 2 2 4-4", key: "dzmm74" }]];
var n9 = ((a20, s19) => {
  const c16 = Q(({ className: e10, ...c17 }, n14) => {
    return G(i13, { ref: n14, iconNode: s19, className: o15(`lucide-${l12 = t12(a20), l12.replace(/([a-z0-9])([A-Z])/g, "$1-$2").toLowerCase()}`, `lucide-${a20}`, e10), ...c17 });
    var l12;
  });
  return c16.displayName = t12(a20), c16;
})("shield-check", c12);

// external:https://cdn.jsdelivr.net/npm/lucide-react/dist/esm/icons/users.js/+esm
var t13 = (e10) => {
  const r10 = ((e11) => e11.replace(/^([A-Z])|[\s-_]+(\w)/g, (e12, r11, t18) => t18 ? t18.toUpperCase() : r11.toLowerCase()))(e10);
  return r10.charAt(0).toUpperCase() + r10.slice(1);
};
var o16 = (...e10) => e10.filter((e11, r10, t18) => Boolean(e11) && "" !== e11.trim() && t18.indexOf(e11) === r10).join(" ").trim();
var a15 = (e10) => {
  for (const r10 in e10) if (r10.startsWith("aria-") || "role" === r10 || "title" === r10) return true;
};
var s14 = { xmlns: "http://www.w3.org/2000/svg", width: 24, height: 24, viewBox: "0 0 24 24", fill: "none", stroke: "currentColor", strokeWidth: 2, strokeLinecap: "round", strokeLinejoin: "round" };
var i14 = Q(({ color: e10 = "currentColor", size: t18 = 24, strokeWidth: i19 = 2, absoluteStrokeWidth: n14, className: c16 = "", children: l12, iconNode: d6, ...h7 }, u6) => G("svg", { ref: u6, ...s14, width: t18, height: t18, stroke: e10, strokeWidth: n14 ? 24 * Number(i19) / Number(t18) : i19, className: o16("lucide", c16), ...!l12 && !a15(h7) && { "aria-hidden": "true" }, ...h7 }, [...d6.map(([e11, t19]) => G(e11, t19)), ...Array.isArray(l12) ? l12 : [l12]]));
var n10 = [["path", { d: "M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2", key: "1yyitq" }], ["path", { d: "M16 3.128a4 4 0 0 1 0 7.744", key: "16gr8j" }], ["path", { d: "M22 21v-2a4 4 0 0 0-3-3.87", key: "kshegd" }], ["circle", { cx: "9", cy: "7", r: "4", key: "nufk8" }]];
var c13 = ((a20, s19) => {
  const n14 = Q(({ className: e10, ...n15 }, c16) => {
    return G(i14, { ref: c16, iconNode: s19, className: o16(`lucide-${l12 = t13(a20), l12.replace(/([a-z0-9])([A-Z])/g, "$1-$2").toLowerCase()}`, `lucide-${a20}`, e10), ...n15 });
    var l12;
  });
  return n14.displayName = t13(a20), n14;
})("users", n10);

// external:https://cdn.jsdelivr.net/npm/lucide-react/dist/esm/icons/refresh-ccw.js/+esm
var t14 = (e10) => {
  const r10 = ((e11) => e11.replace(/^([A-Z])|[\s-_]+(\w)/g, (e12, r11, t18) => t18 ? t18.toUpperCase() : r11.toLowerCase()))(e10);
  return r10.charAt(0).toUpperCase() + r10.slice(1);
};
var o17 = (...e10) => e10.filter((e11, r10, t18) => Boolean(e11) && "" !== e11.trim() && t18.indexOf(e11) === r10).join(" ").trim();
var a16 = (e10) => {
  for (const r10 in e10) if (r10.startsWith("aria-") || "role" === r10 || "title" === r10) return true;
};
var s15 = { xmlns: "http://www.w3.org/2000/svg", width: 24, height: 24, viewBox: "0 0 24 24", fill: "none", stroke: "currentColor", strokeWidth: 2, strokeLinecap: "round", strokeLinejoin: "round" };
var i15 = Q(({ color: e10 = "currentColor", size: t18 = 24, strokeWidth: i19 = 2, absoluteStrokeWidth: n14, className: c16 = "", children: h7, iconNode: l12, ...d6 }, p9) => G("svg", { ref: p9, ...s15, width: t18, height: t18, stroke: e10, strokeWidth: n14 ? 24 * Number(i19) / Number(t18) : i19, className: o17("lucide", c16), ...!h7 && !a16(d6) && { "aria-hidden": "true" }, ...d6 }, [...l12.map(([e11, t19]) => G(e11, t19)), ...Array.isArray(h7) ? h7 : [h7]]));
var n11 = [["path", { d: "M21 12a9 9 0 0 0-9-9 9.75 9.75 0 0 0-6.74 2.74L3 8", key: "14sxne" }], ["path", { d: "M3 3v5h5", key: "1xhq8a" }], ["path", { d: "M3 12a9 9 0 0 0 9 9 9.75 9.75 0 0 0 6.74-2.74L21 16", key: "1hlbsb" }], ["path", { d: "M16 16h5v5", key: "ccwih5" }]];
var c14 = ((a20, s19) => {
  const n14 = Q(({ className: e10, ...n15 }, c16) => {
    return G(i15, { ref: c16, iconNode: s19, className: o17(`lucide-${h7 = t14(a20), h7.replace(/([a-z0-9])([A-Z])/g, "$1-$2").toLowerCase()}`, `lucide-${a20}`, e10), ...n15 });
    var h7;
  });
  return n14.displayName = t14(a20), n14;
})("refresh-ccw", n11);

// external:https://cdn.jsdelivr.net/npm/lucide-react/dist/esm/icons/book-open-text.js/+esm
var t15 = (e10) => {
  const r10 = ((e11) => e11.replace(/^([A-Z])|[\s-_]+(\w)/g, (e12, r11, t18) => t18 ? t18.toUpperCase() : r11.toLowerCase()))(e10);
  return r10.charAt(0).toUpperCase() + r10.slice(1);
};
var o18 = (...e10) => e10.filter((e11, r10, t18) => Boolean(e11) && "" !== e11.trim() && t18.indexOf(e11) === r10).join(" ").trim();
var a17 = (e10) => {
  for (const r10 in e10) if (r10.startsWith("aria-") || "role" === r10 || "title" === r10) return true;
};
var s16 = { xmlns: "http://www.w3.org/2000/svg", width: 24, height: 24, viewBox: "0 0 24 24", fill: "none", stroke: "currentColor", strokeWidth: 2, strokeLinecap: "round", strokeLinejoin: "round" };
var i16 = Q(({ color: e10 = "currentColor", size: t18 = 24, strokeWidth: i19 = 2, absoluteStrokeWidth: n14, className: h7 = "", children: l12, iconNode: c16, ...d6 }, p9) => G("svg", { ref: p9, ...s16, width: t18, height: t18, stroke: e10, strokeWidth: n14 ? 24 * Number(i19) / Number(t18) : i19, className: o18("lucide", h7), ...!l12 && !a17(d6) && { "aria-hidden": "true" }, ...d6 }, [...c16.map(([e11, t19]) => G(e11, t19)), ...Array.isArray(l12) ? l12 : [l12]]));
var n12 = [["path", { d: "M12 7v14", key: "1akyts" }], ["path", { d: "M16 12h2", key: "7q9ll5" }], ["path", { d: "M16 8h2", key: "msurwy" }], ["path", { d: "M3 18a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h5a4 4 0 0 1 4 4 4 4 0 0 1 4-4h5a1 1 0 0 1 1 1v13a1 1 0 0 1-1 1h-6a3 3 0 0 0-3 3 3 3 0 0 0-3-3z", key: "ruj8y" }], ["path", { d: "M6 12h2", key: "32wvfc" }], ["path", { d: "M6 8h2", key: "30oboj" }]];
var h5 = ((a20, s19) => {
  const n14 = Q(({ className: e10, ...n15 }, h7) => {
    return G(i16, { ref: h7, iconNode: s19, className: o18(`lucide-${l12 = t15(a20), l12.replace(/([a-z0-9])([A-Z])/g, "$1-$2").toLowerCase()}`, `lucide-${a20}`, e10), ...n15 });
    var l12;
  });
  return n14.displayName = t15(a20), n14;
})("book-open-text", n12);

// external:https://cdn.jsdelivr.net/npm/lucide-react/dist/esm/icons/target.js/+esm
var t16 = (e10) => {
  const r10 = ((e11) => e11.replace(/^([A-Z])|[\s-_]+(\w)/g, (e12, r11, t18) => t18 ? t18.toUpperCase() : r11.toLowerCase()))(e10);
  return r10.charAt(0).toUpperCase() + r10.slice(1);
};
var o19 = (...e10) => e10.filter((e11, r10, t18) => Boolean(e11) && "" !== e11.trim() && t18.indexOf(e11) === r10).join(" ").trim();
var i17 = (e10) => {
  for (const r10 in e10) if (r10.startsWith("aria-") || "role" === r10 || "title" === r10) return true;
};
var c15 = { xmlns: "http://www.w3.org/2000/svg", width: 24, height: 24, viewBox: "0 0 24 24", fill: "none", stroke: "currentColor", strokeWidth: 2, strokeLinecap: "round", strokeLinejoin: "round" };
var s17 = Q(({ color: e10 = "currentColor", size: t18 = 24, strokeWidth: s19 = 2, absoluteStrokeWidth: a20, className: l12 = "", children: n14, iconNode: d6, ...h7 }, m8) => G("svg", { ref: m8, ...c15, width: t18, height: t18, stroke: e10, strokeWidth: a20 ? 24 * Number(s19) / Number(t18) : s19, className: o19("lucide", l12), ...!n14 && !i17(h7) && { "aria-hidden": "true" }, ...h7 }, [...d6.map(([e11, t19]) => G(e11, t19)), ...Array.isArray(n14) ? n14 : [n14]]));
var a18 = [["circle", { cx: "12", cy: "12", r: "10", key: "1mglay" }], ["circle", { cx: "12", cy: "12", r: "6", key: "1vlfrh" }], ["circle", { cx: "12", cy: "12", r: "2", key: "1c9p78" }]];
var l11 = ((i19, c16) => {
  const a20 = Q(({ className: e10, ...a21 }, l12) => {
    return G(s17, { ref: l12, iconNode: c16, className: o19(`lucide-${n14 = t16(i19), n14.replace(/([a-z0-9])([A-Z])/g, "$1-$2").toLowerCase()}`, `lucide-${i19}`, e10), ...a21 });
    var n14;
  });
  return a20.displayName = t16(i19), a20;
})("target", a18);

// external:https://cdn.jsdelivr.net/npm/lucide-react/dist/esm/icons/trophy.js/+esm
var t17 = (e10) => {
  const r10 = ((e11) => e11.replace(/^([A-Z])|[\s-_]+(\w)/g, (e12, r11, t18) => t18 ? t18.toUpperCase() : r11.toLowerCase()))(e10);
  return r10.charAt(0).toUpperCase() + r10.slice(1);
};
var a19 = (...e10) => e10.filter((e11, r10, t18) => Boolean(e11) && "" !== e11.trim() && t18.indexOf(e11) === r10).join(" ").trim();
var o20 = (e10) => {
  for (const r10 in e10) if (r10.startsWith("aria-") || "role" === r10 || "title" === r10) return true;
};
var i18 = { xmlns: "http://www.w3.org/2000/svg", width: 24, height: 24, viewBox: "0 0 24 24", fill: "none", stroke: "currentColor", strokeWidth: 2, strokeLinecap: "round", strokeLinejoin: "round" };
var s18 = Q(({ color: e10 = "currentColor", size: t18 = 24, strokeWidth: s19 = 2, absoluteStrokeWidth: n14, className: h7 = "", children: d6, iconNode: c16, ...l12 }, p9) => G("svg", { ref: p9, ...i18, width: t18, height: t18, stroke: e10, strokeWidth: n14 ? 24 * Number(s19) / Number(t18) : s19, className: a19("lucide", h7), ...!d6 && !o20(l12) && { "aria-hidden": "true" }, ...l12 }, [...c16.map(([e11, t19]) => G(e11, t19)), ...Array.isArray(d6) ? d6 : [d6]]));
var n13 = [["path", { d: "M10 14.66v1.626a2 2 0 0 1-.976 1.696A5 5 0 0 0 7 21.978", key: "1n3hpd" }], ["path", { d: "M14 14.66v1.626a2 2 0 0 0 .976 1.696A5 5 0 0 1 17 21.978", key: "rfe1zi" }], ["path", { d: "M18 9h1.5a1 1 0 0 0 0-5H18", key: "7xy6bh" }], ["path", { d: "M4 22h16", key: "57wxv0" }], ["path", { d: "M6 9a6 6 0 0 0 12 0V3a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1z", key: "1mhfuq" }], ["path", { d: "M6 9H4.5a1 1 0 0 1 0-5H6", key: "tex48p" }]];
var h6 = ((o21, i19) => {
  const n14 = Q(({ className: e10, ...n15 }, h7) => {
    return G(s18, { ref: h7, iconNode: i19, className: a19(`lucide-${d6 = t17(o21), d6.replace(/([a-z0-9])([A-Z])/g, "$1-$2").toLowerCase()}`, `lucide-${o21}`, e10), ...n15 });
    var d6;
  });
  return n14.displayName = t17(o21), n14;
})("trophy", n13);

// internal:user-component.js
var PHASES = <?php include 'phases-en.js'; ?>;
function clamp(n14, min, max) {
  return Math.max(min, Math.min(max, n14));
}
function rand() {
  return Math.random();
}
function GovernanceChallenge() {
  const [phaseIndex, setPhaseIndex] = _e(0);
  const [done, setDone] = _e(false);
  const [resources, setResources] = _e({
    tiempo: 50,
    // a mayor valor, más holgura (- es retraso)
    presupuesto: 50,
    // a mayor valor, más holgura presupuestaria
    confianza: 50
    // percepción de stakeholders
  });
  const [riesgo, setRisk] = _e(20);
  const [log, setLog] = _e([]);
  const [tags, setTags] = _e([]);
  const [lessons, setLessons] = _e([]);
  const [eventsFired, setEventsFired] = _e([]);
  const current = PHASES[phaseIndex];
  const progress = phaseIndex / PHASES.length * 100;
  function applyDelta(d6, title) {
    const nr2 = {
      ...resources
    };
    if (d6.tiempo) nr2.tiempo = clamp(nr2.tiempo + d6.tiempo, 0, 100);
    if (d6.presupuesto) nr2.presupuesto = clamp(nr2.presupuesto + d6.presupuesto, 0, 100);
    if (d6.confianza) nr2.confianza = clamp(nr2.confianza + d6.confianza, 0, 100);
    const newRisk = clamp(riesgo + (d6.riesgo || 0), 0, 100);
    setResources(nr2);
    setRisk(newRisk);
    if (d6.tags && d6.tags.length) setTags((t18) => Array.from(/* @__PURE__ */ new Set([...t18, ...d6.tags])));
    if (d6.lesson) setLessons((ls2) => Array.from(/* @__PURE__ */ new Set([...ls2, d6.lesson])));
    setLog((l12) => [...l12, `${title}: ${formatDelta(d6)}`]);
  }
  function formatDelta(d6) {
    const parts = [];
    if (d6.tiempo) parts.push(`Time ${signed(d6.tiempo)}`);
    if (d6.presupuesto) parts.push(`Budget ${signed(d6.presupuesto)}`);
    if (d6.confianza) parts.push(`Confidence ${signed(d6.confianza)}`);
    if (d6.riesgo) parts.push(`Risk ${signed(d6.riesgo)}`);
    return parts.join(" | ");
  }
  function signed(n14) {
    return n14 > 0 ? `+${n14}` : `${n14}`;
  }
  function onChoose(option) {
    applyDelta(option.delta, `Decision: ${option.label}`);
    const maybe = RANDOM_EVENTS.filter(() => rand() < 0.9);
    const candidate = maybe.find((e10) => rand() < e10.triggerChance);
    if (candidate) {
      setEventsFired((ev) => [...ev, candidate]);
      applyDelta(candidate.effect, `Event: ${candidate.title}`);
    }
    const next = phaseIndex + 1;
    if (next < PHASES.length) {
      setPhaseIndex(next);
    } else {
      setDone(true);
    }
  }
  function reset() {
    setPhaseIndex(0);
    setDone(false);
    setResources({
      tiempo: 50,
      presupuesto: 50,
      confianza: 50
    });
    setRisk(20);
    setLog([]);
    setTags([]);
    setLessons([]);
    setEventsFired([]);
  }
  const score = pe(() => {
    const base = resources.tiempo + resources.presupuesto + resources.confianza + (100 - riesgo);
    let adjust = 0;
    if (tags.includes("custom-heavy")) adjust -= 15;
    if (tags.includes("std-process")) adjust += 10;
    if (tags.includes("qa")) adjust += 10;
    if (tags.includes("min-test")) adjust -= 12;
    if (tags.includes("weak-governance")) adjust -= 8;
    if (tags.includes("risk-assessment")) adjust += 8;
    if (tags.includes("phased")) adjust += 6;
    if (tags.includes("forced-go")) adjust -= 10;
    const total = clamp(Math.round(base / 4 + adjust), 0, 100);
    let rank;
    if (total >= 80) rank = "Successful";
    else if (total >= 60) rank = "Acceptable";
    else if (total >= 40) rank = "Complicated";
    else rank = "Failure";
    return {
      total,
      rank
    };
  }, [resources, riesgo, tags]);
  const recommendations = pe(() => buildRecommendations(resources, riesgo, tags, lessons), [resources, riesgo, tags, lessons]);
  return /* @__PURE__ */ y5("div", { "data-source-pos": "370:4-440:10", "data-source-name": "div", className: "min-h-screen w-full bg-gradient-to-b from-slate-50 to-white text-slate-900 p-6", children: /* @__PURE__ */ m5("div", { "data-source-pos": "371:6-439:12", "data-source-name": "div", className: "max-w-5xl mx-auto space-y-6", children: [
    /* @__PURE__ */ m5("header", { "data-source-pos": "372:8-383:17", "data-source-name": "header", className: "flex items-center justify-between", children: [
      /* @__PURE__ */ m5("div", { "data-source-pos": "373:10-378:16", "data-source-name": "div", children: [
        /* @__PURE__ */ m5("h1", { "data-source-pos": "374:12-376:17", "data-source-name": "h1", className: "text-2xl font-bold tracking-tight flex items-center gap-2", children: [
          /* @__PURE__ */ y5(n9, { "data-source-pos": "375:14-375:49", "data-source-name": "ShieldCheck", className: "w-6 h-6" }),
          " Governance Challenge: ERP Project"
        ] }),
        /* @__PURE__ */ y5("p", { "data-source-pos": "377:12-377:112", "data-source-name": "p", className: "text-sm text-slate-600", children: "Short game to practice IT Governance decisions." })
      ] }),
      /* @__PURE__ */ m5("div", { "data-source-pos": "379:10-382:16", "data-source-name": "div", className: "flex items-center gap-3", children: [
        /* @__PURE__ */ y5(Badge, { "data-source-pos": "380:12-380:79", "data-source-name": "Badge", variant: "secondary", className: "text-xs", children: "Demo version" }),
        /* @__PURE__ */ m5(Button, { "data-source-pos": "381:12-381:124", "data-source-name": "Button", variant: "outline", onClick: reset, className: "gap-2", children: [
          /* @__PURE__ */ y5(c14, { "data-source-pos": "381:72-381:105", "data-source-name": "RefreshCcw", className: "w-4 h-4" }),
          " Restart"
        ] })
      ] })
    ] }),
    /* @__PURE__ */ m5(Card, { "data-source-pos": "385:8-400:15", "data-source-name": "Card", className: "border-slate-200", children: [
      /* @__PURE__ */ y5(CardHeader, { "data-source-pos": "386:10-396:23", "data-source-name": "CardHeader", className: "pb-2", children: /* @__PURE__ */ m5("div", { "data-source-pos": "387:12-395:18", "data-source-name": "div", className: "flex items-center justify-between", children: [
        /* @__PURE__ */ y5(CardTitle, { "data-source-pos": "388:14-388:65", "data-source-name": "CardTitle", className: "text-lg", children: "Progress" }),
        /* @__PURE__ */ m5("div", { "data-source-pos": "389:14-394:20", "data-source-name": "div", className: "flex gap-3 text-xs text-slate-600", children: [
          /* @__PURE__ */ m5("span", { "data-source-pos": "390:16-390:137", "data-source-name": "span", className: "flex items-center gap-1", children: [
            /* @__PURE__ */ y5(l10, { "data-source-pos": "390:58-390:86", "data-source-name": "Clock", className: "w-4 h-4" }),
            " Time: ",
            /* @__PURE__ */ y5("strong", { "data-source-pos": "390:95-390:130", "data-source-name": "strong", children: resources.tiempo })
          ] }),
          /* @__PURE__ */ m5("span", { "data-source-pos": "391:16-391:147", "data-source-name": "span", className: "flex items-center gap-1", children: [
            /* @__PURE__ */ y5(n8, { "data-source-pos": "391:58-391:86", "data-source-name": "Coins", className: "w-4 h-4" }),
            " Budget: ",
            /* @__PURE__ */ y5("strong", { "data-source-pos": "391:100-391:140", "data-source-name": "strong", children: resources.presupuesto })
          ] }),
          /* @__PURE__ */ m5("span", { "data-source-pos": "392:16-392:143", "data-source-name": "span", className: "flex items-center gap-1", children: [
            /* @__PURE__ */ y5(c13, { "data-source-pos": "392:58-392:86", "data-source-name": "Users", className: "w-4 h-4" }),
            " Confidence: ",
            /* @__PURE__ */ y5("strong", { "data-source-pos": "392:98-392:136", "data-source-name": "strong", children: resources.confianza })
          ] }),
          /* @__PURE__ */ m5("span", { "data-source-pos": "393:16-393:133", "data-source-name": "span", className: "flex items-center gap-1", children: [
            /* @__PURE__ */ y5(l9, { "data-source-pos": "393:58-393:92", "data-source-name": "CircleAlert", className: "w-4 h-4" }),
            " Risk: ",
            /* @__PURE__ */ y5("strong", { "data-source-pos": "393:101-393:126", "data-source-name": "strong", children: riesgo })
          ] })
        ] })
      ] }) }),
      /* @__PURE__ */ y5(CardContent, { "data-source-pos": "397:10-399:24", "data-source-name": "CardContent", children: /* @__PURE__ */ y5(Progress, { "data-source-pos": "398:12-398:69", "data-source-name": "Progress", value: done ? 100 : progress, className: "h-2" }) })
    ] }),
    !done ? /* @__PURE__ */ m5(x5, { children: [
      /* @__PURE__ */ m5(Card, { "data-source-pos": "404:12-432:19", "data-source-name": "Card", className: "border-slate-200", children: [
        /* @__PURE__ */ y5(CardHeader, { "data-source-pos": "405:14-413:27", "data-source-name": "CardHeader", children: /* @__PURE__ */ m5("div", { "data-source-pos": "406:16-412:22", "data-source-name": "div", className: "flex items-center justify-between gap-4", children: [
          /* @__PURE__ */ m5("div", { "data-source-pos": "407:18-410:24", "data-source-name": "div", children: [
            /* @__PURE__ */ y5(CardTitle, { "data-source-pos": "408:20-408:78", "data-source-name": "CardTitle", className: "text-xl", children: current.title }),
            /* @__PURE__ */ m5("p", { "data-source-pos": "409:20-409:92", "data-source-name": "p", className: "text-sm text-slate-600", children: [
              "Principle: ",
              current.principle
            ] })
          ] }),
          /* @__PURE__ */ m5(Badge, { "data-source-pos": "411:18-411:113", "data-source-name": "Badge", children: [
            /* @__PURE__ */ y5(h5, { "data-source-pos": "411:25-411:65", "data-source-name": "BookOpenText", className: "w-4 h-4 mr-1" }),
            " Phase ",
            phaseIndex + 1,
            " / ",
            PHASES.length
          ] })
        ] }) }),
        /* @__PURE__ */ m5(CardContent, { "data-source-pos": "414:14-431:28", "data-source-name": "CardContent", className: "space-y-4", children: [
          /* @__PURE__ */ y5("p", { "data-source-pos": "415:16-415:67", "data-source-name": "p", className: "text-slate-700", children: current.context }),
          /* @__PURE__ */ y5(Separator, { "data-source-pos": "416:16-416:28", "data-source-name": "Separator" }),
          /* @__PURE__ */ y5("div", { "data-source-pos": "417:16-430:22", "data-source-name": "div", className: "grid md:grid-cols-3 gap-4", children: current.options.map((opt) => /* @__PURE__ */ m5(Card, { "data-source-pos": "419:20-428:27", "data-source-name": "Card", className: "border-slate-200", children: [
            /* @__PURE__ */ y5(CardHeader, { "data-source-pos": "420:22-422:35", "data-source-name": "CardHeader", className: "pb-2", children: /* @__PURE__ */ y5(CardTitle, { "data-source-pos": "421:24-421:80", "data-source-name": "CardTitle", className: "text-base", children: opt.label }) }),
            /* @__PURE__ */ m5(CardContent, { "data-source-pos": "423:22-427:36", "data-source-name": "CardContent", className: "space-y-3", children: [
              /* @__PURE__ */ y5("p", { "data-source-pos": "424:24-424:83", "data-source-name": "p", className: "text-sm text-slate-700", children: opt.description }),
              /* @__PURE__ */ m5("div", { "data-source-pos": "425:24-425:130", "data-source-name": "div", className: "text-xs text-slate-600 bg-slate-50 rounded-xl p-2", children: [
                "Impact: ",
                formatDelta(opt.delta)
              ] }),
              /* @__PURE__ */ y5(Button, { "data-source-pos": "426:24-426:96", "data-source-name": "Button", onClick: () => onChoose(opt), className: "w-full", children: "Choose" })
            ] })
          ] }, opt.id)) })
        ] })
      ] }),
      /* @__PURE__ */ y5(LogPanel, { "data-source-pos": "434:12-434:33", "data-source-name": "LogPanel", log })
    ] }) : /* @__PURE__ */ y5(FinalReport, { "data-source-pos": "437:10-437:161", "data-source-name": "FinalReport", score, resources, riesgo, tags, events: eventsFired, recommendations, onRestart: reset })
  ] }) });
}
function LogPanel({
  log
}) {
  if (!log.length) return null;
  return /* @__PURE__ */ m5(Card, { "data-source-pos": "447:4-456:11", "data-source-name": "Card", className: "border-slate-200", children: [
    /* @__PURE__ */ y5(CardHeader, { "data-source-pos": "448:6-450:19", "data-source-name": "CardHeader", children: /* @__PURE__ */ y5(CardTitle, { "data-source-pos": "449:8-449:59", "data-source-name": "CardTitle", className: "text-lg", children: "Binnacle" }) }),
    /* @__PURE__ */ y5(CardContent, { "data-source-pos": "451:6-455:20", "data-source-name": "CardContent", className: "space-y-2", children: log.slice().reverse().map((l12, i19) => /* @__PURE__ */ m5("div", { "data-source-pos": "453:10-453:69", "data-source-name": "div", className: "text-sm text-slate-700", children: [
      "\u2022 ",
      l12
    ] }, i19)) })
  ] });
}
function FinalReport({
  score,
  resources,
  riesgo,
  tags,
  events,
  recommendations,
  onRestart
}) {
  return /* @__PURE__ */ m5("div", { "data-source-pos": "478:4-545:10", "data-source-name": "div", className: "space-y-6", children: [
    /* @__PURE__ */ m5(Alert, { "data-source-pos": "479:6-490:14", "data-source-name": "Alert", children: [
      /* @__PURE__ */ y5(h6, { "data-source-pos": "480:8-480:38", "data-source-name": "Trophy", className: "h-5 w-5" }),
      /* @__PURE__ */ m5(AlertTitle, { "data-source-pos": "481:8-481:192", "data-source-name": "AlertTitle", className: "flex items-center gap-2", children: [
        "Result: ",
        /* @__PURE__ */ y5("span", { "data-source-pos": "481:67-481:118", "data-source-name": "span", className: "font-semibold", children: score.rank }),
        " ",
        /* @__PURE__ */ m5(Badge, { "data-source-pos": "481:119-481:179", "data-source-name": "Badge", variant: "secondary", children: [
          "Puntaje ",
          score.total,
          "/100"
        ] })
      ] }),
      /* @__PURE__ */ y5(AlertDescription, { "data-source-pos": "482:8-489:27", "data-source-name": "AlertDescription", className: "text-slate-700", children: /* @__PURE__ */ m5("div", { "data-source-pos": "483:10-488:16", "data-source-name": "div", className: "mt-2 grid md:grid-cols-4 gap-3", children: [
        /* @__PURE__ */ y5(KPI, { "data-source-pos": "484:12-484:95", "data-source-name": "KPI", label: "Time", value: resources.tiempo, icon: /* @__PURE__ */ y5(l10, { "data-source-pos": "484:63-484:91", "data-source-name": "Clock", className: "w-4 h-4" }) }),
        /* @__PURE__ */ y5(KPI, { "data-source-pos": "485:12-485:105", "data-source-name": "KPI", label: "Budget", value: resources.presupuesto, icon: /* @__PURE__ */ y5(n8, { "data-source-pos": "485:73-485:101", "data-source-name": "Coins", className: "w-4 h-4" }) }),
        /* @__PURE__ */ y5(KPI, { "data-source-pos": "486:12-486:101", "data-source-name": "KPI", label: "Confidence", value: resources.confianza, icon: /* @__PURE__ */ y5(c13, { "data-source-pos": "486:69-486:97", "data-source-name": "Users", className: "w-4 h-4" }) }),
        /* @__PURE__ */ y5(KPI, { "data-source-pos": "487:12-487:107", "data-source-name": "KPI", label: "Risk (\u2193 mejor)", value: 100 - riesgo, icon: /* @__PURE__ */ y5(n9, { "data-source-pos": "487:69-487:103", "data-source-name": "ShieldCheck", className: "w-4 h-4" }) })
      ] }) })
    ] }),
    /* @__PURE__ */ m5(Card, { "data-source-pos": "492:6-513:13", "data-source-name": "Card", className: "border-slate-200", children: [
      /* @__PURE__ */ y5(CardHeader, { "data-source-pos": "493:8-495:21", "data-source-name": "CardHeader", children: /* @__PURE__ */ m5(CardTitle, { "data-source-pos": "494:10-494:134", "data-source-name": "CardTitle", className: "text-lg flex items-center gap-2", children: [
        /* @__PURE__ */ y5(l11, { "data-source-pos": "494:65-494:94", "data-source-name": "Target", className: "w-5 h-5" }),
        " Recomendaciones y lecciones"
      ] }) }),
      /* @__PURE__ */ m5(CardContent, { "data-source-pos": "496:8-512:22", "data-source-name": "CardContent", className: "space-y-3", children: [
        /* @__PURE__ */ y5("ul", { "data-source-pos": "497:10-501:15", "data-source-name": "ul", className: "list-disc pl-6 text-slate-700", children: recommendations.map((r10, i19) => /* @__PURE__ */ y5("li", { "data-source-pos": "499:14-499:34", "data-source-name": "li", children: r10 }, i19)) }),
        tags.length > 0 && /* @__PURE__ */ y5("div", { "data-source-pos": "503:12-507:18", "data-source-name": "div", className: "pt-3 flex flex-wrap gap-2", children: tags.map((t18) => /* @__PURE__ */ y5(Badge, { "data-source-pos": "505:16-505:60", "data-source-name": "Badge", variant: "outline", children: t18 }, t18)) }),
        /* @__PURE__ */ y5("div", { "data-source-pos": "509:10-511:16", "data-source-name": "div", className: "pt-4", children: /* @__PURE__ */ m5(Button, { "data-source-pos": "510:12-510:118", "data-source-name": "Button", onClick: onRestart, className: "gap-2", children: [
          /* @__PURE__ */ y5(c14, { "data-source-pos": "510:58-510:91", "data-source-name": "RefreshCcw", className: "w-4 h-4" }),
          " Try again"
        ] }) })
      ] })
    ] }),
    events.length > 0 && /* @__PURE__ */ m5(Card, { "data-source-pos": "516:8-529:15", "data-source-name": "Card", className: "border-slate-200", children: [
      /* @__PURE__ */ y5(CardHeader, { "data-source-pos": "517:10-519:23", "data-source-name": "CardHeader", children: /* @__PURE__ */ m5(CardTitle, { "data-source-pos": "518:12-518:131", "data-source-name": "CardTitle", className: "text-lg flex items-center gap-2", children: [
        /* @__PURE__ */ y5(l9, { "data-source-pos": "518:67-518:101", "data-source-name": "CircleAlert", className: "w-5 h-5" }),
        " Events occurred"
      ] }) }),
      /* @__PURE__ */ y5(CardContent, { "data-source-pos": "520:10-528:24", "data-source-name": "CardContent", className: "space-y-3", children: events.map((e10) => /* @__PURE__ */ m5("div", { "data-source-pos": "522:14-526:20", "data-source-name": "div", className: "p-3 rounded-xl bg-slate-50", children: [
        /* @__PURE__ */ m5("div", { "data-source-pos": "523:16-523:126", "data-source-name": "div", className: "font-medium", children: [
          e10.title,
          " ",
          /* @__PURE__ */ y5(Badge, { "data-source-pos": "523:55-523:120", "data-source-name": "Badge", className: "ml-2", variant: "secondary", children: e10.principle })
        ] }),
        /* @__PURE__ */ y5("div", { "data-source-pos": "524:16-524:77", "data-source-name": "div", className: "text-sm text-slate-700", children: e10.description }),
        /* @__PURE__ */ m5("div", { "data-source-pos": "525:16-525:104", "data-source-name": "div", className: "text-xs text-slate-600 mt-1", children: [
          "Impact: ",
          formatQuickDelta(e10.effect)
        ] })
      ] }, e10.id)) })
    ] }),
    /* @__PURE__ */ m5(Card, { "data-source-pos": "532:6-544:13", "data-source-name": "Card", className: "border-slate-200", children: [
      /* @__PURE__ */ y5(CardHeader, { "data-source-pos": "533:8-535:21", "data-source-name": "CardHeader", children: /* @__PURE__ */ m5(CardTitle, { "data-source-pos": "534:10-534:141", "data-source-name": "CardTitle", className: "text-lg flex items-center gap-2", children: [
        /* @__PURE__ */ y5(c8, { "data-source-pos": "534:65-534:100", "data-source-name": "CheckCircle2", className: "w-5 h-5" }),
        " How to evaluate in class/workshop"
      ] }) }),
      /* @__PURE__ */ y5(CardContent, { "data-source-pos": "536:8-543:22", "data-source-name": "CardContent", className: "space-y-3 text-slate-700", children: /* @__PURE__ */ m5("ol", { "data-source-pos": "537:10-542:15", "data-source-name": "ol", className: "list-decimal pl-6 space-y-2", children: [
        /* @__PURE__ */ y5("li", { "data-source-pos": "538:12-538:81", "data-source-name": "li", children: "Ask each participant for a screenshot of their final report." }),
        /* @__PURE__ */ y5("li", { "data-source-pos": "539:12-539:84", "data-source-name": "li", children: "Discuss 2-3 key decisions and how they affected risk/resources." }),
        /* @__PURE__ */ y5("li", { "data-source-pos": "540:12-540:137", "data-source-name": "li", children: "Relate each lesson to a governance principle (roles, risks, change control, QA, security, support)." }),
        /* @__PURE__ */ y5("li", { "data-source-pos": "541:12-541:77", "data-source-name": "li", children: "Connect with the real case: what would have prevented the failure?" })
      ] }) })
    ] })
  ] });
}
function KPI({
  label,
  value,
  icon
}) {
  return /* @__PURE__ */ m5("div", { "data-source-pos": "551:4-554:10", "data-source-name": "div", className: "rounded-2xl border bg-white p-3", children: [
    /* @__PURE__ */ m5("div", { "data-source-pos": "552:6-552:90", "data-source-name": "div", className: "text-xs text-slate-600 flex items-center gap-2", children: [
      icon,
      " ",
      label
    ] }),
    /* @__PURE__ */ y5("div", { "data-source-pos": "553:6-553:58", "data-source-name": "div", className: "text-xl font-semibold", children: value })
  ] });
}
function formatQuickDelta(d6) {
  const out = [];
  if (d6.tiempo) out.push(`Time ${d6.tiempo > 0 ? "+" : ""}${d6.tiempo}`);
  if (d6.presupuesto) out.push(`Budget ${d6.presupuesto > 0 ? "+" : ""}${d6.presupuesto}`);
  if (d6.confianza) out.push(`Confidence ${d6.confianza > 0 ? "+" : ""}${d6.confianza}`);
  if (d6.riesgo) out.push(`Risk ${d6.riesgo > 0 ? "+" : ""}${d6.riesgo}`);
  return out.join(" | ");
}
function buildRecommendations(resources, riesgo, tags, lessons) {
  const recs = [];
  if (resources.tiempo < 40) recs.push("Strengthen schedule management: prioritize ERP standards and control changes to avoid delays.");
  if (resources.presupuesto < 40) recs.push("Improve financial and scope control: limit customizations, use committee approvals.");
  if (resources.confianza < 40) recs.push("Increase transparency: communication rituals, periodic demos and stakeholder participation.");
  if (riesgo > 50) recs.push("Implement continuous risk assessment, milestone audits and robust UAT testing.");
  if (tags.includes("custom-heavy")) recs.push("Reduce customizations and align processes to ERP standard (fit-to-standard).");
  if (tags.includes("min-test")) recs.push("Strengthen QA: formal UAT and pilots before go-live.");
  if (tags.includes("weak-governance")) recs.push("Define a clear governance framework (RACI, committees, escalation).");
  if (tags.includes("forced-go")) recs.push("Don't force dates without checklist: use exit criteria and support plan.");
  if (tags.includes("low-comm")) recs.push("Involve affected areas early and maintain bidirectional communication.");
  if (tags.includes("security")) recs.push("Integrate security by-design and hardening from the first phases.");
  if (tags.includes("vendor-risk")) recs.push("Manage suppliers with SLA, penalties and contingency plans.");
  for (const l12 of lessons) recs.push(l12);
  return Array.from(new Set(recs));
}

// internal:index.js
var UserComponentWithErrorBoundary = class extends U {
  componentDidCatch(error) {
    document.documentElement.setAttribute("data-fatal", "");
  }
  render() {
    return /* @__PURE__ */ y5(GovernanceChallenge, {});
  }
};
try {
  const root = e3(document.getElementById("root"));
  root.render(G(UserComponentWithErrorBoundary));
  requestAnimationFrame(() => {
    requestAnimationFrame(() => {
      document.documentElement.setAttribute("data-ready", "");
    });
  });
} catch (error) {
  console.error(error);
  document.documentElement.setAttribute("data-fatal", "");
}
/**
 * @license React
 * scheduler.production.min.js
 *
 * Copyright (c) Facebook, Inc. and its affiliates.
 *
 * This source code is licensed under the MIT license found in the
 * LICENSE file in the root directory of this source tree.
 */
/**
 * @license React
 * react-dom.production.min.js
 *
 * Copyright (c) Facebook, Inc. and its affiliates.
 *
 * This source code is licensed under the MIT license found in the
 * LICENSE file in the root directory of this source tree.
 */
/**
 * @license lucide-react v0.544.0 - ISC
 *
 * This source code is licensed under the ISC license.
 * See the LICENSE file in the root directory of this source tree.
 */
</script>
  
</body></html>