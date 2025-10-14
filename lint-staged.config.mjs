/**
 * @filename: lint-staged.config.mjs
 * @type {import('lint-staged').Configuration}
 */
export default {
    '*.php': ['composer format'],
    '*.{js,mjs,ts,tsx,json,css,scss,md,yml,yaml,vue,blade.php}': [
        'pnpm format',
    ],
    '*.{js, jsx,ts,tsx}': ['pnpm lint'],
};
