# wikijalmx
We use a microfw to compile individual source files into html, so we can use partial views, headers and layouts to build the site.

Files in **source/\*.php** are executed and their output saved in **public/\*.html**, you can compile them by running **php compiler.php**, or by running the **php supervisor.php** that re-process the file automagically whenever it changes.

We have partial **views/\*.php** and simpy include them wih **include('views/file.php')**, we can have several **layouts/\*.php**, and run the source files trought layout using the render() function.
