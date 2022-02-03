class Student:
    data= []
    def getData(self, rn, name, phone):
        Student.data.append(rn)
        Student.data.append(name)
        Student.data.append(phone)       
    def displayData(self):
        print ("Roll Number is: ", Student.rn)
        print ("Name is: ", Student.name)
        print("The phone number of te stuedent is ",Student.phone)        
    def search(self):
        self.ch=input("Enter teh number  wich you want to search:-")
        for self.ch in data:
           return(self.ch)
r = int (input("Enter the roll number: "))
name = input("Enter the name: ")
phone=input("Enter the phone number :-")
s1 = Student()
s1.getData(r, name, phone)
s1.displayData()
s1.search()