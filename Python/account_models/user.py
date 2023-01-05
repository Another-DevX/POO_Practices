from account import Account

class User(Account):
   def __init__(self, name, document, id, email, password):
       super().__init__(name,document,id,email,password)