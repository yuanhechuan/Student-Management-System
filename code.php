#include <stdio.h>
#include <stdlib.h>
#include <string.h>
#include <math.h>
struct student
{

	char name[10];
	float score;
	int id;
	char sex;
	int old;
};
    struct student num[100];
    int count=0;

int welcome()
{
    int n;
    printf("           欢迎使用西邮秃头学生管理系统      \n");
    printf("   1.增加学生信息       2.删除学生信息       \n");
    printf("   3.查找学生信息       4.修改学生信息       \n");
    printf("   5.输出所有学生信息   6.退出               \n");
    scanf("%d", &n); 
    return n;
}
int input()
{

    int id=0;
    int i=0;
    char sh;
add:
    printf("请输入你要添加的学生的学号\n");
    scanf("%d", &id);
    num[count].id=id;
    printf("请输入你要添加学生的姓名\n");
    scanf("%s", num[count].name);
    printf("请输入你要添加学生的分数\n");
    scanf("%f", &num[count].score);
    getchar();
    printf("请输入你要添加学生的性别\n");
    scanf("%c", &num[count].sex);
    printf("请输入你要添加学生的年龄\n");
    scanf("%d", &num[count].old);
    getchar();
    count++;
    printf("继续输入(Y/y)，退出(N/n)\n");
    sh=getchar();
    if(sh=='Y'||sh=='y')
        goto add;
        return 1;
}
void del()
{
   
   删除学生信息 
   
   
}
int search()
{

    int id, i, s, o=0;
    loop:
    printf("请输入你需要查找的学生的学号\n");
    scanf("%d", &id);
    getchar();
    for(i=0;i<count;i++)
    {
        if(id==num[i].id)
        {
            o=1;
          printf("姓名：%s\n", num[i].name);
          printf("学号：%d\n", num[i].id);
          printf("性别：%c\n", num[i].sex);
          printf("年龄：%d\n", num[i].old);
          printf("学分：%f\n", num[i].score);
        }

    }
    printf("是否继续查找，如果是请输入1   返回主界面请输入 0 \n");
    scanf("%d", &s);
    getchar();
    if(s==1)
    {
        goto loop;
    }
    if(s==0)
    {
        return -1;
    }
}
int modify()
{
	
	修改学生信息 
	
}
void all()
{
    int i;
    for(i=count-1;i>=0;i--)
    {
        printf("姓名：%s\n", num[i].name);
        printf("学号：%d\n", num[i].id);
        printf("性别：%c\n", num[i].sex);
        printf("年龄：%d\n", num[i].old);
        printf("分数：%f\n", num[i].score);
    }
}
int main()
{
	int h;
	while(1)
  	{
    	h=welcome();
    	switch(h)
    	{
        	case 1:input();break;    
        	case 2:del();break;      
        	case 3:search();break;   
        	case 4:modify();break;   
        	case 5:all();break;
        	case 6:goto end;break;
    	}
	}
	end:
    printf("感谢使用西邮秃头学生管理系统\n");
    return 0;
}
