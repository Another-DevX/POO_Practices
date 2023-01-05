class Card extends Payment{
    constructor(id, cardNumber, cvv, expiration_date){
        super(id)
        this.cardNumber = cardNumber;
        this.cvv = cvv;
        this.expiration_date = expiration_date;
    }
}