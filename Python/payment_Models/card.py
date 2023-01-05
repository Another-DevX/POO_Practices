from payment import Payment
import date, datetime

class Card(Payment):
    cardNumber = int
    cvv = int
    expiration_date = date.today() + datetime.timedelta(days=60)
        
    def __init__(self, id, cardNumber, cvv, expiration_date):
        super().__init__(id)
        self.cardNumber = cardNumber
        self.cvv = cvv
        self.expiration_date = expiration_date