from numpy import number
from payment import Payment

class card(Payment):
    numberCard = str
    CVV = str 
    dateCard = str

    def __init__(self, id, amount, numberCard, CVV, dateCard):
        super().__init__(id, amount)
        self.numberCard = numberCard
        self.CVV = CVV
        self.dateCard = dateCard
    
    