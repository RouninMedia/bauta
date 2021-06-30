# bauta

Across the web, **PHP** is predominantly used for pre-processing **HTML**.

But **PHP**  can be used to pre-process *any* front-end technology, including:

 - CSS
 - Javascript
 - SVG
 - JSON etc.

--- is a simple technique which combines:

 - Apache `.htaccess` `mod_rewrite` (to rewrite a request for `/my-styles.css` to `/my-styles.php`)
 - PHP (to dynamically build the output of `/my-styles.php`)

Thus, --- presents dynamic PHP documents as (seemingly) static front-end files (javascript, css, json etc.).

Given that PHP provides headers with the correct MIME-Type and can require the page to be cached for 0 seconds, the apparent static front-end file will be indistinguishable to the consumer from an actual static front-end file.

To reiterate, --- enables the server to deliver what appears to the consumer to be a static file (eg. `.json` or `.css` or `.js`), albeit, under the hood, that apparently static file is actually a dynamically generated PHP file, built by the server on-the-fly just prior to delivery.

_____

--- is a core approach when delivering the `Module Stylesheet` and `Module Scriptsheet` in **DaNIS3H**.

The same technique is used when presenting the `PageManifest` for each page in **Ashiva**, to enable every Page to reference its `PageManifest` via the same consistent URL:

    /.assets/scheme/meta/manifests/page/page-manifest.json
