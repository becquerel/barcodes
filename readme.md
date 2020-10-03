# Bocian Barcode Generator

* Simple PHP app based on Lumen framework to generate barcodes

# Installation

* run `docker-compose up` and wait for installation to finish
* run `docker-compose exec php composer install` to install dependencies
* application should now run on http://localhost:8888
* if you want to change the port the app responds on, update the `docker-compose.yml` file accordingly

# Usage

* The app can display barcodes in three main formats - HTML, JPG and PNG

## HTML
if you want to get a HTML representation of a barcode, the route would be   
`http://localhost:8888/{BARCODE}`
where `{BARCODE}` would be the actual barcode you want to print out. App will generate a HTML (bunch of DIV elements)
that put together will compose an actual barcode

## JPG, PNG
If you want to return barcode in image format, all you need to do is to attach a `.jpg` or `.png` suffix/extension
to the previous route. App will then return only an image data with a corresponding content type.

`http://localhost:8888/{BARCODE}.png`  
`http://localhost:8888/{BARCODE}.jpg`  

This can be useful when you need to display the barcode somewhere in the HTML - you can just link to the barcode
source, without having to generate the barcode yourself:

`<img src="http://localhost:8888/UPC1123654.jpg" />`