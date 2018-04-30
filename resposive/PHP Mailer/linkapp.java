 import java.util.Scanner;


class link
{
 public int idata;
 public link next;
link(int a)
{
idata=a;
}
//public void display()
//{
//System.out.println(idata+"\n");
	// }
//}	 
class linklist
{public int data,key;
 public link first;
 public link last;
 public linklist()
 {
 first=null;
 last=null;
 }
 //public boolean isEmpty()
 //{ return(first=null);
 //}
 public void insertfirst(int data)
 {
 link newlink=new link(data );
 if(first==null)
	 last=null;
 else
 {
 newlink.next=first;
 first=newlink;
 last=first.next;
 }
 }
/* public link delete(int key)
 {
 link current=first;
 link previous=first;
 
 while(current.idata!=key)
 {
 if(current.next==null)
	 return null;
 else
 {
	 previous=current;
 current=current.next;
 }
 }
 if(current == first)
	 first=first.next;
 else
	 previous.next=current.next;
 return current;
 
 
 }*/
 
 public  link delete()
 {
link temp=last;	 
last=last.next;
return last;
	 
 }
 public void find (int key, int data)
 {
	
	link current=first;
	link previous =first;
while(current.idata!=key)	
{
if(current.next==null)
{System.out.println("not in the list");
break;}
 else
	 previous=current;
	current=current.next;
} link newlink = new link(  data);
	newlink.next=current.next;
	current.next=newlink;
	current=previous;
 }
	
	
	 
	 
 
 public void displaylist()
 {
 link current;
 current=first;
 while(current!=null)
 {
 System.out.println(current.idata);
 current=current.next;
 }
 System.out.println("");
 
 }}
 class linkapp
 {
 public static void main(String args[])
 {
 linklist tester =new linklist();
 
 int mainx,m,l;
 do
	{
		Scanner item= new Scanner(System.in);
	 System.out.println(" enter1 for insertfirst ");
 System.out.println("2 for deletefirst");
 System.out.println("3 for display");
  System.out.println("delete last");
   System.out.println("5 to exit");
 m=item.nextInt();
  
  switch(m)
  {
	case 1:
 System.out.println("enter element");
 mainx=item.nextInt();
 tester.insertfirst(mainx);
 
 break;
 case 2:
 //System.out.println("entere key to be deleted");
// mainx=item.nextInt();
  tester.delete();
 // if(f!=null)
	//  System.out.println("deleted");
  //else
	//  System.out.println("not found");
 break;
 case 3:
 tester.displaylist();
 break;
 case 4:
  System.out.println("enter element after which we have to insert and elements");
  mainx= item.nextInt();
 l=item.nextInt();
 	tester.find(mainx,l);
  
 break;
 case 5:
 break;
 default:
  System.out.println("wrong choice");
  
 
 
 
  }
 
		
	}while(m!=5);
 
 
 
 
 }
 
 
 

 
 }
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 