jlecture
========

Lecture Database for Jacobs  

url:  
http://jlecture.user.jacobs-university.de/  

## website changes
Website changes are now automatically pushed to the webserver. Every push event calls executes a webhook which calls a script on an amazon-ec2-instance to sync changes on the webserver.  
### enable auto sync with github:
* add the following code to the `etc/sudoers`-file by doing `sudo visudo` on the instance:
```
Defaults env_keep += "GIT_SSH_COMMAND"
www-data ALL=NOPASSWD: /usr/bin/git
```
* then add the `jlecture-hook.php` to the proper apache dir on the instance
* create a webhook for push-event's pointing to the `jlecture-hook.php` under "Settings=>Webhooks" in the github-repository
now every website change should work automatically

## features
Sorted by Courses/ID:  
Courses can have different versions of different years  


Features:
* Video Lecture
* Slides
* Lecture Notes
* Homework/Assigments
* Exams
* Solutions 
