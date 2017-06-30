importScripts('js/sw-toolbox.js');

toolbox.precache([
  'offline.html', 'https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.min.css', 'js/sw-toolbox.js', 'js/materialize.js','js/jquery.min.js','https://fonts.googleapis.com/icon?family=Material+Icons',
  'https://firebasestorage.googleapis.com/v0/b/riffyorchid.appspot.com/o/loader.gif?alt=media&token=38d930b5-4f43-4525-b2c7-520363f5e536','https://firebasestorage.googleapis.com/v0/b/riffyorchid.appspot.com/o/loader.gif?alt=media&token=38d930b5-4f43-4525-b2c7-520363f5e536','manifest.json',
  'https://firebasestorage.googleapis.com/v0/b/riffyorchid.appspot.com/o/card_img.jpg?alt=media&token=9ec508da-5b45-4ecf-8b4d-9632ed2594e1'
])

toolbox.options.debug = false;
toolbox.options.cache.name = "orchidgaz-v1";

self.addEventListener('install', function install() {
  self.skipWaiting();
})
self.addEventListener('activate', function activate(e) {
  e.waitUntil(self.clients.claim())
})

toolbox.router.get("(.*)", function get(req, vals, opts) {
  return toolbox.networkFirst(req, vals, opts)
    .catch(function(error) {
      console.log({req, vals, opts, error})
      if (req.method === "GET" && req.headers.get("accept").includes("text/html")) {
        return toolbox.cacheOnly(new Request("offline.html"), vals, opts)
      }
      throw error
    })
})

toolbox.router.get("css/*.css", toolbox.fastest)
toolbox.router.get("js/*.js", toolbox.fastest)
toolbox.router.get("img/*.jpg", toolbox.fastest)
toolbox.router.get("img/*.svg", toolbox.fastest)
toolbox.router.get("img/*.gif", toolbox.fastest)
toolbox.router.get("img/*.png", toolbox.fastest)
toolbox.router.get("manifest.json", toolbox.networkFirst)
