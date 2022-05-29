public class Cash extends Payment{
    float amount;
    public Cash(Integer id, float amount){
        super(id);
        this.amount = amount;
    }

    public void printPayment() {
        System.out.println("Id payment: " + id + " Amount: " + amount);
    }
}
