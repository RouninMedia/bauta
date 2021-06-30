# bauta

Across the web, **PHP** is predominantly used for pre-processing `HTML`.

But **PHP**  can be used to pre-process *any* front-end technology, including:

 - CSS
 - Javascript
 - SVG
 - JSON etc.

--- is a simple technique which combines:

 - Apache `.htaccess` `mod_rewrite`
 - PHP

to present dynamic PHP documents as (seemingly) static front-end files (javascript, css, json etc.) with the correct MIME-Type.

To reiterate, --- enables the server to deliver what appears to the consumer to be a static file (eg. `.json` or `.css` or `.js`), albeit, under the hood, that apparently static file is actually a dynamically generated PHP file, built by the server on-the-fly just prior to delivery.

_____

--- is a core approach when delivering the `Module Stylesheet` and `Module Scriptsheet` in **DaNIS3H**.

The same technique is used when presenting the `PageManifest` for each page in **Ashiva**, to enable every Page to reference its `PageManifest` via the same consistent URL:

    /.assets/scheme/meta/manifests/page/page-manifest.json
