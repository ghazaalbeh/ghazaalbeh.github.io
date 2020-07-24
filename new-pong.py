from tkinter import *

import random
import time
import math
import cmath, math
tk = Tk()
tk.title("Pong!")
tk.resizable(0,0)
tk.wm_attributes("-topmost", 1)
canvas = Canvas(tk, width = 400, height = 400, bd = 0 ,highlightthickness = 0)
canvas.pack()
tk.update()
canvas.pack(expand=YES, fill=BOTH)                
canvas.create_oval(20, 20, 380, 380, width=1)
counter = 1
deltaa = 0
pi=3.141592
z = 10
s=0
teta=0
t=0

class Paddle:
    def __init__(self,canvas,color):
        self.canvas = canvas
        self.a=200
        self.b=200
        
        z= 10
        s = 0
        self.id = canvas.create_arc(20, 20, 380, 380,start=s ,extent=z,fill = color)
        canvas.create_oval(30, 30, 370, 370, width=1,fill='gray')
        self.canvas_height = self.canvas.winfo_height()
        self.canvas_width = self.canvas.winfo_width()
        self.canvas.bind_all('a', self.anticlockwise)
       
        
    def getXY(self,r,teta):
        x=self.a+r*math.cos(math.radians(teta))
        y=self.b+r*math.sin(math.radians(teta))
        return (x,y);
    
    def getrp(self,xn,yn):
        rho = abs(math.sqrt(((xn-200)*(xn-200))+((yn-200)*(yn-200))))
        phi = math.degrees(abs(math.atan2((yn-200),(xn-200))))
        return(rho, phi)
        

      
    def anticlockwise(self,evt):
        
        global z,s,t
        
        z = z +10/170
        s = s +10
        if 0<s<180:
            t= t+10
        if 180<s<360:
            t=t-10
        
        if s==360:
            
            s=0
            z=10
        pos = self.canvas.coords(self.id)        
        canvas.itemconfig(self.id,extent=z)
        canvas.itemconfig(self.id,start=s)
         
        

   

class Ball:
    def __init__(self,canvas,color):
        self.canvas = canvas
        self.paddle= paddle
        self.id = canvas.create_oval(0,0,10,10, fill=color)
        self.canvas.move(self.id, 200,200)
        start =[-3, -2, -1, 0, 1, 2, 3]
        random.shuffle(start)
        self.x = start[3]
        self.y = -1
        self.canvas_height = self.canvas.winfo_height()
        

    def get_Center(self):
        pos = self.canvas.coords(self.id)
        x0 = (pos[0]+ pos[2])/2
        y0 = (pos[1]+ pos[3])/2
        return(x0,y0)
    
    def getrp(self,xn,yn):
        rho = abs(math.sqrt(((xn-200)*(xn-200))+((yn-200)*(yn-200))))
        phi = math.degrees(abs(math.atan2((yn-200),(xn-200))))
        return(rho, phi)

   
    def draw(self):
        global t
        self.canvas.move(self.id, self.x,self.y)
        pos = self.canvas.coords(self.id)
        c = self.get_Center()
        b = self.getrp(c[0],c[1])
        
        if pos[1] <= abs(math.sqrt((170*170)-((pos[2]-205)*(pos[2]-205)))-200):
            self.y = 1
            
          
        if pos[3] >= abs(math.sqrt((170*170)-((pos[2]-205)*(pos[2]-205)))+200):
            self.y = -1
            
            
        if pos[0] <= abs(math.sqrt((170*170)-((pos[3]-205)*(pos[3]-205)))-200):   
            self.x = 1
            
            
        if pos[2] >= abs(math.sqrt((170*170)-((pos[3]-205)*(pos[3]-205)))+200):
            self.x = -1
            
            


        if b[0]>=165 and abs(t)<b[1]<abs(t)+10:
            self.score(True)
            self.x = 2
       

    def score(self, val):
        
        global counter
        if val== True:
            self.canvas.delete("score")
            a = self.canvas.create_text(200,200, text = counter, font = ("Arial",24),fill="black",tag="score")
            canvas.itemconfig(a,fill = "black")
            counter += 1
            
            

      
paddle = Paddle(canvas,'blue')
ball = Ball(canvas,'pink')
while 1:
    ball.draw()
    
    tk.update_idletasks()
    tk.update()
    time.sleep(0.01)
        
