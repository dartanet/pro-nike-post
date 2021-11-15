import random
list1=[1,'a','p',4,'t',5,6,'i',7]
print("Random element is :",random.choice(list1))

a=1
enough=True
while enough:
  a=a+1
  list1=["you","i","he","she"]
  print(random.choice(list1), end=' ')
  list1=["like","love","adore","love","love","hates adidas but loves"]
  print(random.choice(list1), end=' ')
  print("nike", end=' ')
  list1=["", "", "until death", "until life end", "untill nike2 comes out"]
  print(random.choice(list1)) 
  if a==100:
    enough=False

print()
print("time to post")
