from payment import Payment
    

class payPal(Payment):
    email = str

    
    def __init__(self, id, amount, email):
        super().__init__(id, amount)
        self.email