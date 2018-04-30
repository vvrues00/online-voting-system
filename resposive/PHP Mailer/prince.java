import java.util.Scanner;

class stak
{
	public static int top=-1;
	public static int front=-1;
	 public int item;
public  static int arr[]=new int[10];

 public void push()
 {
	if(top==9)
	{
		 System.out.println("over flown");
		 
	}else
	{
		top=top+1;
System.out.println("enter the element");
		Scanner max= new Scanner(System.in);
		
		
	item=max.nextInt();
	arr[top]=item;
		 System.out.println("inserted"+arr[top]);
		 //for(int i=0;i<top+1;i++)
	  //{
		  // System.out.println(arr[i]+"\n");
//	  }
		
 }}
public void pop()
{
	if(top==front)
 System.out.println("stack underflow");		
	
	else
	{
		front++;
		 System.out.println("elements"+arr[front]);
		 
}}
	public void display()
	{if(top==-1)
	 System.out.println("no elements:");
 else{
	  System.out.println("elements are\n:");
	  for(int i=front+1;i<top+1;i++)
	  {
		   System.out.println(arr[i]+"\n");
	  }
 }
	 
	}
	
	
	 
 }





class prince
{
public static void main(String args[])
{
int m;



	do
	{
		Scanner item= new Scanner(System.in);
	 System.out.println(" ente1 for push ");
 System.out.println("2 for pop");
 System.out.println("3 for display");
  System.out.println("4 to exit");
 m=item.nextInt();
  stak ten= new stak();
  switch(m)
  {
	case 1:
 ten.push();
 
 break;
 case 2:
  ten.pop();
 break;
 case 3:
 ten.display();
 break;
 case 4:
 break;
 default:
  System.out.println("wrong choice");
  
 
 
 
  }
 
		
	}while(m!=4);	
 }}