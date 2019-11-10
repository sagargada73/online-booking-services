import java.util.*;
class vector_demo{
	static Vector<String> v=new Vector<String>();
	static int price[]=new int[100];
	static int quantity[]=new int[100];
	static int j=0;
	static void add(Integer pos,String item){
		v.add(pos,item);
	}

	static Vector<String> remove(Integer pos){
		v.remove(pos);
		return v;
	}

	static void display(){
		int i=0;
		//int psum=IntStream.of(price).sum();
		//int qsum=IntStream.of(quantity).sum();
		int psum=0;
		int qsum=0;
		for (int k : price)
    		psum += k;
    	for(int k:quantity)
    		qsum += k;
		Enumeration e=v.elements();
		System.out.println("Item no\t Item name\t Price\t Quantity");
		while(e.hasMoreElements()){
			System.out.println((i+1)+"\t  "+e.nextElement()+"\t\t\t"+price[i]+"\t"+quantity[i]);
			i++;
		}
		System.out.println("Total\t\t\t\t\t"+psum+"\t"+qsum);
	}
	
	public static void main(String[] args){
		int input;
		Scanner i=new Scanner(System.in);
		do{
		System.out.println("Enter 1:add\t 2:delete\t 3:print\t 4:exit");
		input=i.nextInt();
			switch(input){
				case 1:
					Integer pos;
					String item;
					System.out.println("Enter positon");
					pos=i.nextInt();
					System.out.println("Enter item to add");
					item=i.next();
					System.out.println("Enter price");
					price[j]=i.nextInt();
					System.out.println("Enter quantity");
					quantity[j]=i.nextInt();
					j++;
					add(pos,item);
				break;
				case 2:
					System.out.println("Enter positon of item to be deleted");
					pos=i.nextInt();
					remove(pos);
				break;
				case 3:display();
				break;
				case 4:System.out.println("Exiting");
				break;
				default:System.out.println("Invalid input");
			}
		}
		while(input!=4);
	}
}