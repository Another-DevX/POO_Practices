import java.sql.Date;
import java.text.DateFormat;
class Card extends Payment{
    String cardNumber;
    int cvv;
    Date expiration_date;
    
    public Card(Integer id, String cardNumber, Integer cvv, Date expiration_date){
        super(id);
        this.cardNumber = cardNumber;
        this.cvv = cvv;
        this.expiration_date = expiration_date;
    }
    
}