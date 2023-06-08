## Asset compiling

-   Run `yarn install && yarn prepare`
-   Create a .env file at the root of the theme (cf. `.env-sample` file) and set the `MIX_PROXY` variable to your local site address
-   Run `npx mix watch` to start the asset building process
-   Run `npx mix --production` to minify the css and js for production

## Component generation

-   Generate a new block with `yarn generate block BlockName`, this will:
    -   Create a new block folder
    -   Automatically register the new block with ACF (in the `CustomBlocks.php` file)
    -   Make the block available for import from the `blocks/index.js` file (99% of the time it won't be necessary, but it's available)
-   Generate a new module with `yarn generate module ModuleName`:
    -   This will create a new file under the `src/modules` folder
    -   The newly created module will be available for import from the `src/modules.js` file
