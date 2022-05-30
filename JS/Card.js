class Card extends Payment {
    
    constructor(id, numberCard, CVV, dateCard, amount){
        super(id, amount);
        this.numberCard = numberCard;
        this.CVV = CVV;
        this.dateCard = dateCard;
    }

    printPayment(){
        console.log("Id payment: " +  this.id + " Amount: " + this.amount);
    }
}