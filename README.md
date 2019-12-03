# ZCTestOnLine
利用PHP实现的学生在线考试系统

目录  
一 、项目介绍  
二 、系统设计  
1.概要设计  
1.1系统功能结构设计  
2.总体设计  
2.1数据库表设计  
三 、详细设计及实现  
1.	学生端  
a)	登录/注册(login.php)  
b)	主页面(startteam.php)  
c)	考试页面(answer.php)  
d)	分数页面(result.php)  
e)	题目解析页面(analysis.php)  
2.	教师端  
a)	登录页(admin\adlogin\login.php)  
b)	后台管理系统主页(admin/index.php)  
c)	考生信息管理页(admin/member.php)  
d)	考试题类别管理页(admin/ktlb.php)  
e)	考题信息添加页(admin/add.php)  
f)	考试信息管理页(admin/ktxx.php)  
四 、总结  
 
一 、项目介绍  
1.	开发背景  
随着网络的日益晋及化,无纸化考试等概念的提出也能使得考试更加快捷与方便。假设如果有一个网站可以方便学生和老师们方快捷的进行线上考试，那么将会大大的减轻老师的工作量，同时也可以起到无纸化，保护环境的作用。而本系统就是针对这个需求来实现的。PHP ZC学生在线考试系统,可用学生的考试以及方便老师试卷的批阅，使得师生之间工作效率更高。
2.	需求分析  
2.1	学生端  
2.2	学生可进行注册及登录  
2.3	登录后可进行选择试卷，进行在线考试  
2.4	提交试卷后可实时知道分数，并获得试题解析  
2.5	可进行个人信息的修改保存  
2.6	教师端  
2.7	教师登录后可进行学生信息的管理  
2.8	教师登录后可进行试题信息的添加修改以及删除  
2.9	教师登录后可进行查看学生每次答题的分数  
2.10	教师登录后可进行查看  

二 、系统设计  
1.概要设计  
1.1系统功能结构设计  
	学生端  
	学生可进行注册及登录  
	登录后可进行选择试卷，进行在线考试  
	提交试卷后可实时知道分数，并获得试题解析  
	可进行个人信息的修改保存  
	教师端  
	教师登录后可进行学生信息的管理  
	教师登录后可进行试题信息的添加修改以及删除  
	教师登录后可进行查看学生每次答题的分数  
	教师登录后可进行查看  
 2.1数据库表设计  
Report表(用于记录学生考试成绩)  
 
Admin表 (管理员)  
 
topic表(考题表)  
 
users表 (学生表)  
 
transfer表 (记录学生答题表)  
 

三 、详细设计及实现  
1.	学生端  
a)	登录/注册(login.php)  
 
b)	主页面(startteam.php)  
 
c)	考试页面(answer.php)  
 
d)	分数页面(result.php)  
 
e)	题目解析页面(analysis.php)  
 
2.	教师端  
a)	登录页(admin\adlogin\login.php)  
 
b)	后台管理系统主页(admin/index.php)  
 
c)	考生信息管理页(admin/member.php)  
 
d)	考试题类别管理页(admin/ktlb.php)  
 
e)	考题信息添加页(admin/add.php)  
 
f)	考试信息管理页(admin/ktxx.php)  
 
Github地址: https://github.com/zhengdayu97/ZCTestOnLine  

四 、总结  
本项目案例从开发背景、需求分析开始介绍PHP ZC在线考试系统的开发流程，重点讲述了从数据库设计到完成一个网站的过程。
在这次PHP大作业中，我学会了要从实际应用出发，根据实际需要设计数据库，分析系统具体需要的模块，再对模块的功能进行逐一实现，同时对模块要进行严格的编码控制，对于一些常见的错误要学会进行异常处理以及学会对异常代码的调试，同时在程序设计的时候也要考虑程序的易用性，考虑到如何使得使用者能更方便、更高效率的通过本系统进行快速考试。  
通过对本项目开发过程的学习，我们不仅能掌握在线考试网站的开发流程，以及学会对本学期以来所学习的PHP基础编程进行综合运用，且对于开发其他类的大型软件也有很好的启发和借鉴意义。

