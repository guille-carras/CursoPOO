public class PayPal extends Payment{
    String email;

    public PayPal(Integer id, String email){
        super(id);
        this.email = email;
    }

    public void printPayment(){
        System.out.println("Id payment: " + id + " Email: " + email);
    }
}
