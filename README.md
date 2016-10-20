jlecture
========

Lecture Database for Jacobs  

url:  
http://jlecture.user.jacobs-university.de/  


to push changes to the from the `/website` dir to the webserver,  
you need to simply execute
```
./sync
```

you will need to install `lftp` for that
```
sudo apt-get update; sudo apt-get install lftp
```


compile lftp from source:    
http://lftp.yar.ru/ftp/lftp-4.7.3.tar.gz    

deps:  
libncurses5-dev  
libreadline-dev  

make with `make -j 7``


Sorted by Courses/ID:  
Courses can have different versions of different years  


Features:
* Video Lecture
* Slides
* Lecture Notes
* Homework/Assigments
* Exams
* Solutions 
