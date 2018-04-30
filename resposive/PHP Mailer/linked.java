class link
{
int idata;
public link next;
 public link(int k)
 {
 idata= k;
 
 }
class linkedlist
{
public link first;
public link last;
public linkedlist()
{
first=null;
last=null;

}
public void insertfirst(int data)
{
link newlink=new link(data);
if(first==null)
first=newlink;
else
last.next=newlink;
last=newlink;
}
 public void deletefirst()
{
if(first.next=null)
last=null;

first=first.next;
}


}
public void display()
{
link current= first;
while(current.data!=null)

{
System.out.println(current.data);
current=current.next;
}}}
class linked
{

public static void main(String args[])
{
linkedlist item=new linkedlist();

item.insertfirst(45);
item.insertfirst(46);
item.insertfirst(47);
item.display();
item.deletefirst();
item.display();


}}
