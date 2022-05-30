class PayPal extends Payment {
    constructor(id, email, amount) {
        super(id, amount)
        this.email = email;
    }

    printPayment() {
        console.log("Id payment: " + this.id + " Amount: " + this.amount + " Who deposit: " + this.email);
    }
}