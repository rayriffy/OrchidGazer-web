var EXTRA_FILES = [];

var CHECKSUM = "v15";

var FILES = [
  '/offline.html',
  'https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.min.css',
  '/js/materialize.js',
  '/js/jquery.min.js',
  'https://fonts.googleapis.com/icon?family=Material+Icons',
  '/img/loader.gif',
  '/img/card_img.jpg',
  '/img/ico.png',
  'https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/fonts/roboto/Roboto-Bold.woff2',
  'https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/fonts/roboto/Roboto-Bold.woff'
].concat(EXTRA_FILES || []);

var CACHENAME = 'orchidgaz-' + CHECKSUM;

self.addEventListener('install', function(event) {
  event.waitUntil(caches.open(CACHENAME).then(function(cache) {
    return cache.addAll(FILES);
  }));
});

self.addEventListener('activate', function(event) {
  return event.waitUntil(caches.keys().then(function(keys) {
    return Promise.all(keys.map(function(k) {
      if (k != CACHENAME && k.indexOf('mindsharp-') == 0) {
        return caches.delete(k);
      } else {
        return Promise.resolve();
      }
    }));
  }));
});

self.addEventListener('fetch', event => {
  event.respondWith(
    caches.match(event.request)
      .then(response=>response||fetch(event.request))
      .catch(() => {
        if(event.request.mode == 'navigate') {
          return caches.match('/offline.html');
        }
      })
  );
});
