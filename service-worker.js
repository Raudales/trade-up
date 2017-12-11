var cacheName = 'v2';
var cacheFiles = [
  './',
  './index.php',
  './login.php',
  './productos.php',
  './js/sw.js',
  './js/minicart.js',
  './js/materialize.min.js',
  './js/jquery-3.2.1.min.js',
  './php/connection.php',
  './php/iniciar.php',
  './php/logout.php',
  './php/registro.php',
  './css/materialize.css',
  './css/materialize.min.css',
  './css/styles.css',
  './css/assets/img/1.png',
  './css/assets/img/2.jpg',
  './css/assets/img/3.jpg',
  './css/assets/img/4.png',
  './css/assets/img/back-profile.jpg',
  './css/assets/img/back-profile2.jpg',
  './css/assets/img/female.png',
  './css/assets/img/male.png',
  './css/assets/img/trade.png',
  './css/assets/img/tradeUp.png',
  './css/assets/product/1.jpg',
  './css/assets/product/2.jpg',
  './css/assets/product/3.jpg',
  './css/assets/product/4.jpg',
  './css/assets/product/5.jpg',
  './css/assets/product/6.jpg',
  './css/assets/product/7.jpg',
  './css/assets/product/8.jpg',
  './css/assets/product/9.jpg',
]

self.addEventListener ('install', function(e) {
  console.log ("[ServiceWorker] Installed")

  e.waitUntil(
      caches.open(cacheName).then(function(cache){
        console.log("[ServiceWorker] Caching cacheFiles");
        return cache.addAll(cacheFiles);
      })
    )
})

self.addEventListener ("Activate", function(e) {
  console.log ("[ServiceWorker] Activated")

  e.waitUntil(

    cahces.key().then(function(cacheNames) {
      return Promise.all(cacheNames.nap(function(thisCacheName){
        if (thisCacheName !== cacheName) {
          console.log("[ServiceWorker] Removing cache cacheFiles");
          return caches.delete(thisCacheName);
        }
      }))
    })
    )
})

self.addEventListener ("fectch", function (e) {
  console.log ("[ServiceWorker] Fetching", e.request.url);
})