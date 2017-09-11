# OrchidGazer-web
the new generation of the mobile web for orchid lovers

## Requirements
 - Ubuntu 16 or later
 - PHP 5.6 (PHP 7.0 not compatible)
 - Python 2.7 (To make mobilenet work properly)
 - Must be served in HTTPS [Get SSL certificate from here](https://letsencrypt.org/)

## Installing

First of all, you need to install TensorFlow on your server first.
 - For CPU: `pip install tensorflow`
 - For GPU: `pip install tensorflow-gpu`
 
 Second, install LEMP stack to your server. I recommended to use `NginX` [Installing Guide](https://www.digitalocean.com/community/tutorials/how-to-install-linux-nginx-mysql-php-lemp-stack-in-ubuntu-16-04)
 
 Then, import orchid MySQL database to your MySQL server
 
 After that, edit your MySQL connection setting in `sql.php`
 
 ## Troubleshooting
 
 ### I got a freaking `pip: command not found` error
 Easy, just run `easy_install pip`

### `ImportError: libcudnn.so.6: cannot open shared object file: No such file or directory`
Damn Daniel! You install incorrect version of Nvidia CUDNN [Download a new one here](https://developer.nvidia.com/rdp/cudnn-download)
