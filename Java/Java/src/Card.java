public class Card extends Payment {
    String franchise;
    String CVV;
    String numberCard;
    String dateCard;

    public Card(Integer id, String franchise, String dateCard, String CVV, String numberCard){
        super(id);
        this.franchise = franchise;
        this.dateCard = dateCard;
        this.CVV = CVV;
        this.numberCard = numberCard;
    }
    
}
