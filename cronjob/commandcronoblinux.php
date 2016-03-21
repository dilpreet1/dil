suourdesignz@ourdesignz ~ $ sudo su
[sudo] password for ourdesignz: 
ourdesignz ourdesignz # crontab -e
crontab: installing new crontab
ourdesignz ourdesignz # cd /var/www/html/project/practices/cronjob/
ourdesignz cronjob # ll
total 48
drwxrwxrwx 2 ourdesignz ourdesignz  4096 Feb 23 17:37 .
drwxrwxrwx 5 ourdesignz ourdesignz  4096 Feb 23 12:06 ..
-rwxrwxrwx 1 ourdesignz ourdesignz  5638 Feb 23 17:17 cronjob1.php
-rwxrwxrwx 1 ourdesignz ourdesignz   214 Feb 22 13:30 cronjob.php
-rw-r--r-- 1 ourdesignz ourdesignz   148 Feb 23 15:57 cron.php
-rw-r--r-- 1 ourdesignz ourdesignz 12110 Feb 23 15:40 reservation.php
-rwxr-xr-x 1 ourdesignz ourdesignz    58 Feb 23 17:36 run.php
-rwxrwxrwx 1 ourdesignz ourdesignz  1094 Feb 22 13:30 seduling.php
-rw-r--r-- 1 ourdesignz ourdesignz  1082 Feb 16 15:10 send_reservation.php
ourdesignz cronjob # ./run.php 
./run.php: 2: ./run.php: cannot open ?php: No such file
This code will run every minute
./run.php: 4: ./run.php: Syntax error: end of file unexpected
You have new mail in /var/mail/root
ourdesignz cronjob # ./run.php 
./run.php: line 2: ?php: No such file or directory
This code will run every minute
./run.php: line 4: syntax error near unexpected token `newline'
./run.php: line 4: `?>'
ourdesignz cronjob # php run.php

This code will run every minuteourdesignz cronjob # pwd
/var/www/html/project/practices/cronjob
ourdesignz cronjob # vim cronjob.sh
You have new mail in /var/mail/root
ourdesignz cronjob # crontab -e
crontab: installing new crontab
ourdesignz cronjob # chmod +x run.php 
ourdesignz cronjob # ll
total 52
drwxrwxrwx 2 ourdesignz ourdesignz  4096 Feb 23 17:45 .
drwxrwxrwx 5 ourdesignz ourdesignz  4096 Feb 23 12:06 ..
-rwxrwxrwx 1 ourdesignz ourdesignz  5638 Feb 23 17:17 cronjob1.php
-rwxrwxrwx 1 ourdesignz ourdesignz   214 Feb 22 13:30 cronjob.php
-rw-r--r-- 1 root       root          66 Feb 23 17:45 cronjob.sh
-rw-r--r-- 1 ourdesignz ourdesignz   148 Feb 23 15:57 cron.php
-rw-r--r-- 1 ourdesignz ourdesignz 12110 Feb 23 15:40 reservation.php
-rwxr-xr-x 1 ourdesignz ourdesignz    49 Feb 23 17:43 run.php
-rwxrwxrwx 1 ourdesignz ourdesignz  1094 Feb 22 13:30 seduling.php
-rw-r--r-- 1 ourdesignz ourdesignz  1082 Feb 16 15:10 send_reservation.php
You have new mail in /var/mail/root
ourdesignz cronjob # chmod +x cronjob.sh
ourdesignz cronjob # crontab -e
crontab: installing new crontab
ourdesignz cronjob # ./cronjob.sh

This code will run every minuteourdesignz cronjob # tail -f /var/log/syslog
Feb 23 17:46:02 ourdesignz sm-mta[16839]: u1NCG16X016839: from=<root@localhost.localdomain>, size=650, class=0, nrcpts=1, msgid=<201602231216.u1NCG1N6016836@localhost.localdomain>, proto=ESMTP, daemon=MTA-v4, relay=localhost [127.0.0.1]
Feb 23 17:46:02 ourdesignz sendmail[16836]: u1NCG1N6016836: to=root, ctladdr=root (0/0), delay=00:00:01, xdelay=00:00:01, mailer=relay, pri=30362, relay=[127.0.0.1] [127.0.0.1], dsn=2.0.0, stat=Sent (u1NCG16X016839 Message accepted for delivery)
Feb 23 17:46:03 ourdesignz sendmail[16842]: u1NCG3v8016842: from=root, size=247, class=0, nrcpts=1, msgid=<201602231216.u1NCG3v8016842@localhost.localdomain>, relay=root@localhost
Feb 23 17:46:03 ourdesignz sm-mta[16843]: u1NCG16X016839: to=<root@localhost.localdomain>, ctladdr=<root@localhost.localdomain> (0/0), delay=00:00:02, xdelay=00:00:00, mailer=local, pri=30888, dsn=2.0.0, stat=Sent
Feb 23 17:46:04 ourdesignz sm-mta[16845]: u1NCG344016845: from=<root@localhost.localdomain>, size=535, class=0, nrcpts=1, msgid=<201602231216.u1NCG3v8016842@localhost.localdomain>, proto=ESMTP, daemon=MTA-v4, relay=localhost [127.0.0.1]
Feb 23 17:46:04 ourdesignz sendmail[16842]: u1NCG3v8016842: to=root, ctladdr=root (0/0), delay=00:00:01, xdelay=00:00:01, mailer=relay, pri=30247, relay=[127.0.0.1] [127.0.0.1], dsn=2.0.0, stat=Sent (u1NCG344016845 Message accepted for delivery)
Feb 23 17:46:04 ourdesignz sm-mta[16846]: u1NCG344016845: to=<root@localhost.localdomain>, ctladdr=<root@localhost.localdomain> (0/0), delay=00:00:01, xdelay=00:00:00, mailer=local, pri=30773, dsn=2.0.0, stat=Sent
Feb 23 17:46:32 ourdesignz crontab[16854]: (root) BEGIN EDIT (root)
Feb 23 17:46:42 ourdesignz crontab[16854]: (root) REPLACE (root)
Feb 23 17:46:42 ourdesignz crontab[16854]: (root) END EDIT (root)
Feb 23 17:47:01 ourdesignz CRON[16880]: (root) CMD (/var/www/html/project/practices/cronjob/cronjob.sh)
Feb 23 17:47:01 ourdesignz CRON[16879]: (root) CMD (/root/cache.sh )
Feb 23 17:47:02 ourdesignz sendmail[16886]: u1NCH10Q016886: from=root, size=312, class=0, nrcpts=1, msgid=<201602231217.u1NCH10Q016886@localhost.localdomain>, relay=root@localhost
Feb 23 17:47:03 ourdesignz sm-mta[16890]: u1NCH2Ee016890: from=<root@localhost.localdomain>, size=601, class=0, nrcpts=1, msgid=<201602231217.u1NCH10Q016886@localhost.localdomain>, proto=ESMTP, daemon=MTA-v4, relay=localhost [127.0.0.1]
Feb 23 17:47:03 ourdesignz sendmail[16886]: u1NCH10Q016886: to=root, ctladdr=root (0/0), delay=00:00:02, xdelay=00:00:01, mailer=relay, pri=30312, relay=[127.0.0.1] [127.0.0.1], dsn=2.0.0, stat=Sent (u1NCH2Ee016890 Message accepted for delivery)
Feb 23 17:47:04 ourdesignz sendmail[16889]: u1NCH34F016889: from=root, size=247, class=0, nrcpts=1, msgid=<201602231217.u1NCH34F016889@localhost.localdomain>, relay=root@localhost
Feb 23 17:47:04 ourdesignz sm-mta[16893]: u1NCH4Jj016893: from=<root@localhost.localdomain>, size=535, class=0, nrcpts=1, msgid=<201602231217.u1NCH34F016889@localhost.localdomain>, proto=ESMTP, daemon=MTA-v4, relay=localhost [127.0.0.1]
Feb 23 17:47:04 ourdesignz sm-mta[16891]: u1NCH2Ee016890: to=<root@localhost.localdomain>, ctladdr=<root@localhost.localdomain> (0/0), delay=00:00:02, xdelay=00:00:01, mailer=local, pri=30839, dsn=2.0.0, stat=Sent
Feb 23 17:47:04 ourdesignz sendmail[16889]: u1NCH34F016889: to=root, ctladdr=root (0/0), delay=00:00:01, xdelay=00:00:00, mailer=relay, pri=30247, relay=[127.0.0.1] [127.0.0.1], dsn=2.0.0, stat=Sent (u1NCH4Jj016893 Message accepted for delivery)
Feb 23 17:47:04 ourdesignz sm-mta[16894]: u1NCH4Jj016893: to=<root@localhost.localdomain>, ctladdr=<root@localhost.localdomain> (0/0), delay=00:00:00, xdelay=00:00:00, mailer=local, pri=30773, dsn=2.0.0, stat=Sent
Feb 23 17:48:01 ourdesignz CRON[16902]: (root) CMD (/var/www/html/project/practices/cronjob/cronjob.sh)
Feb 23 17:48:01 ourdesignz CRON[16901]: (root) CMD (/root/cache.sh )
Feb 23 17:48:04 ourdesignz sendmail[16909]: u1NCI412016909: from=root, size=247, class=0, nrcpts=1, msgid=<201602231218.u1NCI412016909@localhost.localdomain>, relay=root@localhost
Feb 23 17:48:04 ourdesignz sendmail[16911]: u1NCI4Lv016911: from=root, size=312, class=0, nrcpts=1, msgid=<201602231218.u1NCI4Lv016911@localhost.localdomain>, relay=root@localhost
Feb 23 17:48:04 ourdesignz sm-mta[16913]: u1NCI4TR016913: from=<root@localhost.localdomain>, size=601, class=0, nrcpts=1, msgid=<201602231218.u1NCI4Lv016911@localhost.localdomain>, proto=ESMTP, daemon=MTA-v4, relay=localhost [127.0.0.1]
Feb 23 17:48:04 ourdesignz sm-mta[16912]: u1NCI43H016912: from=<root@localhost.localdomain>, size=535, class=0, nrcpts=1, msgid=<201602231218.u1NCI412016909@localhost.localdomain>, proto=ESMTP, daemon=MTA-v4, relay=localhost [127.0.0.1]
Feb 23 17:48:05 ourdesignz sendmail[16909]: u1NCI412016909: to=root, ctladdr=root (0/0), delay=00:00:01, xdelay=00:00:01, mailer=relay, pri=30247, relay=[127.0.0.1] [127.0.0.1], dsn=2.0.0, stat=Sent (u1NCI43H016912 Message accepted for delivery)
Feb 23 17:48:05 ourdesignz sendmail[16911]: u1NCI4Lv016911: to=root, ctladdr=root (0/0), delay=00:00:01, xdelay=00:00:01, mailer=relay, pri=30312, relay=[127.0.0.1] [127.0.0.1], dsn=2.0.0, stat=Sent (u1NCI4TR016913 Message accepted for delivery)
Feb 23 17:48:05 ourdesignz sm-mta[16914]: u1NCI43H016912: to=<root@localhost.localdomain>, ctladdr=<root@localhost.localdomain> (0/0), delay=00:00:01, xdelay=00:00:00, mailer=local, pri=30773, dsn=2.0.0, stat=Sent
^C
You have new mail in /var/mail/root
ourdesignz cronjob # ^C
ourdesignz cronjob # vim cronjob.sh
ourdesignz cronjob # 
ourdesignz cronjob # ./cronjob.
cronjob.php  cronjob.sh   
ourdesignz cronjob # ./cronjob.sh 
PHP Parse error:  syntax error, unexpected '{', expecting '(' in /var/www/html/project/practices/cronjob/cronjob1.php on line 52
ourdesignz cronjob # ./cronjob.sh 
PHP Fatal error:  Cannot use try without catch or finally in /var/www/html/project/practices/cronjob/cronjob1.php on line 59
You have new mail in /var/mail/root
ourdesignz cronjob # ./cronjob.sh 
You have new mail in /var/mail/root
ourdesignz cronjob # ./cronjob.sh 
You have new mail in /var/mail/root
ourdesignz cronjob # 











ourdesignz cronjob # ./cronjob.
cronjob.php  cronjob.sh   
ourdesignz cronjob # ./cronjob.sh 
PHP Parse error:  syntax error, unexpected '{', expecting '(' in /var/www/html/project/practices/cronjob/cronjob1.php on line 52
ourdesignz cronjob # ./cronjob.sh 
PHP Fatal error:  Cannot use try without catch or finally in /var/www/html/project/practices/cronjob/cronjob1.php on line 59
You have new mail in /var/mail/root
ourdesignz cronjob # 






suourdesignz@ourdesignz ~ $ sudo su
[sudo] password for ourdesignz: 
ourdesignz ourdesignz # crontab -e
crontab: installing new crontab
ourdesignz ourdesignz # cd/var/www/html/project/practices/cronjob/
ourdesignz cronjob # ll
total 48
drwxrwxrwx 2 ourdesignz ourdesignz  4096 Feb 23 17:37 .
drwxrwxrwx 5 ourdesignz ourdesignz  4096 Feb 23 12:06 ..
-rwxrwxrwx 1 ourdesignz ourdesignz  5638 Feb 23 17:17 cronjob1.php
-rwxrwxrwx 1 ourdesignz ourdesignz   214 Feb 22 13:30 cronjob.php
-rw-r--r-- 1 ourdesignz ourdesignz   148 Feb 23 15:57 cron.php
-rw-r--r-- 1 ourdesignz ourdesignz 12110 Feb 23 15:40 reservation.php
-rwxr-xr-x 1 ourdesignz ourdesignz    58 Feb 23 17:36 run.php
-rwxrwxrwx 1 ourdesignz ourdesignz  1094 Feb 22 13:30 seduling.php
-rw-r--r-- 1 ourdesignz ourdesignz  1082 Feb 16 15:10 send_reservation.php
ourdesignz cronjob # ./run.php 
./run.php: 2: ./run.php: cannot open ?php: No such file
This code will run every minute
./run.php: 4: ./run.php: Syntax error: end of file unexpected
You have new mail in /var/mail/root
ourdesignz cronjob # ./run.php 
./run.php: line 2: ?php: No such file or directory
This code will run every minute
./run.php: line 4: syntax error near unexpected token `newline'
./run.php: line 4: `?>'
ourdesignz cronjob # php run.php

This code will run every minuteourdesignz cronjob # pwd
/var/www/html/project/practices/cronjob
ourdesignz cronjob # vim cronjob.sh
You have new mail in /var/mail/root
ourdesignz cronjob # crontab -e
crontab: installing new crontab
ourdesignz cronjob # chmod +x run.php 
ourdesignz cronjob # ll
total 52
drwxrwxrwx 2 ourdesignz ourdesignz  4096 Feb 23 17:45 .
drwxrwxrwx 5 ourdesignz ourdesignz  4096 Feb 23 12:06 ..
-rwxrwxrwx 1 ourdesignz ourdesignz  5638 Feb 23 17:17 cronjob1.php
-rwxrwxrwx 1 ourdesignz ourdesignz   214 Feb 22 13:30 cronjob.php
-rw-r--r-- 1 root       root          66 Feb 23 17:45 cronjob.sh
-rw-r--r-- 1 ourdesignz ourdesignz   148 Feb 23 15:57 cron.php
-rw-r--r-- 1 ourdesignz ourdesignz 12110 Feb 23 15:40 reservation.php
-rwxr-xr-x 1 ourdesignz ourdesignz    49 Feb 23 17:43 run.php
-rwxrwxrwx 1 ourdesignz ourdesignz  1094 Feb 22 13:30 seduling.php
-rw-r--r-- 1 ourdesignz ourdesignz  1082 Feb 16 15:10 send_reservation.php
You have new mail in /var/mail/root
ourdesignz cronjob # chmod +x cronjob.sh
ourdesignz cronjob # crontab -e
crontab: installing new crontab
ourdesignz cronjob # ./cronjob.sh

This code will run every minuteourdesignz cronjob # tail -f /var/log/syslog
Feb 23 17:46:02 ourdesignz sm-mta[16839]: u1NCG16X016839: from=<root@localhost.localdomain>, size=650, class=0, nrcpts=1, msgid=<201602231216.u1NCG1N6016836@localhost.localdomain>, proto=ESMTP, daemon=MTA-v4, relay=localhost [127.0.0.1]
Feb 23 17:46:02 ourdesignz sendmail[16836]: u1NCG1N6016836: to=root, ctladdr=root (0/0), delay=00:00:01, xdelay=00:00:01, mailer=relay, pri=30362, relay=[127.0.0.1] [127.0.0.1], dsn=2.0.0, stat=Sent (u1NCG16X016839 Message accepted for delivery)
Feb 23 17:46:03 ourdesignz sendmail[16842]: u1NCG3v8016842: from=root, size=247, class=0, nrcpts=1, msgid=<201602231216.u1NCG3v8016842@localhost.localdomain>, relay=root@localhost
Feb 23 17:46:03 ourdesignz sm-mta[16843]: u1NCG16X016839: to=<root@localhost.localdomain>, ctladdr=<root@localhost.localdomain> (0/0), delay=00:00:02, xdelay=00:00:00, mailer=local, pri=30888, dsn=2.0.0, stat=Sent
Feb 23 17:46:04 ourdesignz sm-mta[16845]: u1NCG344016845: from=<root@localhost.localdomain>, size=535, class=0, nrcpts=1, msgid=<201602231216.u1NCG3v8016842@localhost.localdomain>, proto=ESMTP, daemon=MTA-v4, relay=localhost [127.0.0.1]
Feb 23 17:46:04 ourdesignz sendmail[16842]: u1NCG3v8016842: to=root, ctladdr=root (0/0), delay=00:00:01, xdelay=00:00:01, mailer=relay, pri=30247, relay=[127.0.0.1] [127.0.0.1], dsn=2.0.0, stat=Sent (u1NCG344016845 Message accepted for delivery)
Feb 23 17:46:04 ourdesignz sm-mta[16846]: u1NCG344016845: to=<root@localhost.localdomain>, ctladdr=<root@localhost.localdomain> (0/0), delay=00:00:01, xdelay=00:00:00, mailer=local, pri=30773, dsn=2.0.0, stat=Sent
Feb 23 17:46:32 ourdesignz crontab[16854]: (root) BEGIN EDIT (root)
Feb 23 17:46:42 ourdesignz crontab[16854]: (root) REPLACE (root)
Feb 23 17:46:42 ourdesignz crontab[16854]: (root) END EDIT (root)
Feb 23 17:47:01 ourdesignz CRON[16880]: (root) CMD (/var/www/html/project/practices/cronjob/cronjob.sh)
Feb 23 17:47:01 ourdesignz CRON[16879]: (root) CMD (/root/cache.sh )
Feb 23 17:47:02 ourdesignz sendmail[16886]: u1NCH10Q016886: from=root, size=312, class=0, nrcpts=1, msgid=<201602231217.u1NCH10Q016886@localhost.localdomain>, relay=root@localhost
Feb 23 17:47:03 ourdesignz sm-mta[16890]: u1NCH2Ee016890: from=<root@localhost.localdomain>, size=601, class=0, nrcpts=1, msgid=<201602231217.u1NCH10Q016886@localhost.localdomain>, proto=ESMTP, daemon=MTA-v4, relay=localhost [127.0.0.1]
Feb 23 17:47:03 ourdesignz sendmail[16886]: u1NCH10Q016886: to=root, ctladdr=root (0/0), delay=00:00:02, xdelay=00:00:01, mailer=relay, pri=30312, relay=[127.0.0.1] [127.0.0.1], dsn=2.0.0, stat=Sent (u1NCH2Ee016890 Message accepted for delivery)
Feb 23 17:47:04 ourdesignz sendmail[16889]: u1NCH34F016889: from=root, size=247, class=0, nrcpts=1, msgid=<201602231217.u1NCH34F016889@localhost.localdomain>, relay=root@localhost
Feb 23 17:47:04 ourdesignz sm-mta[16893]: u1NCH4Jj016893: from=<root@localhost.localdomain>, size=535, class=0, nrcpts=1, msgid=<201602231217.u1NCH34F016889@localhost.localdomain>, proto=ESMTP, daemon=MTA-v4, relay=localhost [127.0.0.1]
Feb 23 17:47:04 ourdesignz sm-mta[16891]: u1NCH2Ee016890: to=<root@localhost.localdomain>, ctladdr=<root@localhost.localdomain> (0/0), delay=00:00:02, xdelay=00:00:01, mailer=local, pri=30839, dsn=2.0.0, stat=Sent
Feb 23 17:47:04 ourdesignz sendmail[16889]: u1NCH34F016889: to=root, ctladdr=root (0/0), delay=00:00:01, xdelay=00:00:00, mailer=relay, pri=30247, relay=[127.0.0.1] [127.0.0.1], dsn=2.0.0, stat=Sent (u1NCH4Jj016893 Message accepted for delivery)
Feb 23 17:47:04 ourdesignz sm-mta[16894]: u1NCH4Jj016893: to=<root@localhost.localdomain>, ctladdr=<root@localhost.localdomain> (0/0), delay=00:00:00, xdelay=00:00:00, mailer=local, pri=30773, dsn=2.0.0, stat=Sent
Feb 23 17:48:01 ourdesignz CRON[16902]: (root) CMD (/var/www/html/project/practices/cronjob/cronjob.sh)
Feb 23 17:48:01 ourdesignz CRON[16901]: (root) CMD (/root/cache.sh )
Feb 23 17:48:04 ourdesignz sendmail[16909]: u1NCI412016909: from=root, size=247, class=0, nrcpts=1, msgid=<201602231218.u1NCI412016909@localhost.localdomain>, relay=root@localhost
Feb 23 17:48:04 ourdesignz sendmail[16911]: u1NCI4Lv016911: from=root, size=312, class=0, nrcpts=1, msgid=<201602231218.u1NCI4Lv016911@localhost.localdomain>, relay=root@localhost
Feb 23 17:48:04 ourdesignz sm-mta[16913]: u1NCI4TR016913: from=<root@localhost.localdomain>, size=601, class=0, nrcpts=1, msgid=<201602231218.u1NCI4Lv016911@localhost.localdomain>, proto=ESMTP, daemon=MTA-v4, relay=localhost [127.0.0.1]
Feb 23 17:48:04 ourdesignz sm-mta[16912]: u1NCI43H016912: from=<root@localhost.localdomain>, size=535, class=0, nrcpts=1, msgid=<201602231218.u1NCI412016909@localhost.localdomain>, proto=ESMTP, daemon=MTA-v4, relay=localhost [127.0.0.1]
Feb 23 17:48:05 ourdesignz sendmail[16909]: u1NCI412016909: to=root, ctladdr=root (0/0), delay=00:00:01, xdelay=00:00:01, mailer=relay, pri=30247, relay=[127.0.0.1] [127.0.0.1], dsn=2.0.0, stat=Sent (u1NCI43H016912 Message accepted for delivery)
Feb 23 17:48:05 ourdesignz sendmail[16911]: u1NCI4Lv016911: to=root, ctladdr=root (0/0), delay=00:00:01, xdelay=00:00:01, mailer=relay, pri=30312, relay=[127.0.0.1] [127.0.0.1], dsn=2.0.0, stat=Sent (u1NCI4TR016913 Message accepted for delivery)
Feb 23 17:48:05 ourdesignz sm-mta[16914]: u1NCI43H016912: to=<root@localhost.localdomain>, ctladdr=<root@localhost.localdomain> (0/0), delay=00:00:01, xdelay=00:00:00, mailer=local, pri=30773, dsn=2.0.0, stat=Sent
^C
You have new mail in /var/mail/root
ourdesignz cronjob # ^C
ourdesignz cronjob # vim cronjob.sh
ourdesignz cronjob # 
ourdesignz cronjob # ./cronjob.
cronjob.php  cronjob.sh   
ourdesignz cronjob # ./cronjob.sh 
PHP Parse error:  syntax error, unexpected '{', expecting '(' in /var/www/html/project/practices/cronjob/cronjob1.php on line 52
ourdesignz cronjob # ./cronjob.sh 
PHP Fatal error:  Cannot use try without catch or finally in /var/www/html/project/practices/cronjob/cronjob1.php on line 59
You have new mail in /var/mail/root
ourdesignz cronjob # ./cronjob.sh 
You have new mail in /var/mail/root
ourdesignz cronjob # ./cronjob.sh 
You have new mail in /var/mail/root
ourdesignz cronjob # 


