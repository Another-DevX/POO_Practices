class Account:
    id = int
    name = str
    document = str
    email = str
    password = str
    
    def __init__(self, name, document, id, email, password ):
        self.name = name
        self.document = document
        self.id = id
        self.email = email
        self.password = password
    