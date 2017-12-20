# OrchidGazer-web
the new generation of the mobile web for orchid lovers

## Requirements
 - ~~Ubuntu 16~~ CentOS 7 or later
 - PHP 5.6 (PHP 7.0 not compatible)
 - Python 2.7 (To make mobilenet work properly)
 - Must be served in HTTPS [Get SSL certificate from here](https://letsencrypt.org/)

## Installing

First of all, you need to install TensorFlow on your server first.
 - For CPU: `pip install tensorflow`
 - For GPU: `pip install tensorflow-gpu`

 Second, install LEMP stack to your server. I recommended to use `nginx` [Installing Guide](https://www.digitalocean.com/community/tutorials/how-to-install-linux-nginx-mysql-php-lemp-stack-in-ubuntu-16-04)

Then, import orchid MySQL database to your MySQL server

After that, edit your MySQL connection setting in `sql.php`


## Progressive Web App

This project is built by using newest technology from Google called `Progressive Web App`

![PWA Logo](https://cdn-images-1.medium.com/max/1000/1*U01ubQ9TrE1Zow5pkGHTfw.png)

Native app can do things like send push notifications, work offline, look and feel like a REAL native app, and can be added to the homescreen. Mobile Web Apps can accessed in a mobile browser, by comparison, historically haven’t done those things. Progressive Web App fix that with new Web APIs, new design concepts, and new buzzwords.

In short, it can bring all that stuff to your web application and deliver all exact the same experience that native app did ...Hybrid App

### Compatible

![Chrome](https://cdnjs.cloudflare.com/ajax/libs/browser-logos/43.1.0/chrome/chrome_512x512.png) | ![Firefox](https://cdnjs.cloudflare.com/ajax/libs/browser-logos/43.1.0/firefox/firefox_512x512.png) | ![Opera](https://cdnjs.cloudflare.com/ajax/libs/browser-logos/43.1.0/opera/opera_512x512.png) | ![Samsung Internet](https://cdnjs.cloudflare.com/ajax/libs/browser-logos/43.1.0/samsung-internet/samsung-internet_512x512.png) | ![Edge](https://cdnjs.cloudflare.com/ajax/libs/browser-logos/43.1.0/edge/edge_512x512.png) | ![Safari](https://cdnjs.cloudflare.com/ajax/libs/browser-logos/43.1.0/safari/safari_512x512.png) | ![Internet Explorer](https://cdnjs.cloudflare.com/ajax/libs/browser-logos/43.1.0/archive/internet-explorer-tile_10-11/internet-explorer-tile_10-11_512x512.png)
---|---|---|---|---|---|---
45+|44+|32+|Based on Chromium 44.2403+|17+|Not available|F--- you!

## Troubleshooting

 #### I got a freaking `pip: command not found` error
 Easy, just run `easy_install pip`

 #### `ImportError: libcudnn.so.6: cannot open shared object file: No such file or directory`
 Damn Daniel! You install incorrect version of Nvidia CUDNN [Download a new one here](https://developer.nvidia.com/rdp/cudnn-download)
