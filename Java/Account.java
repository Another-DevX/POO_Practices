class Account {
    Integer id;
    String name;
    String document;
    String email;
    String password;

    public Account(String name, String document, Integer id, String email, String password){
        this.name = name;
        this.document = document;
        this.id = id;
        this.email =  email;
        this.password = password;
    }   
}