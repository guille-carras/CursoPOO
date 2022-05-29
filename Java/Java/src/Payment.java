class Payment {
    Integer id;

    public Payment(Integer id) {
        this.id = id;
    }

    public void printPayment(){
        System.out.println("Id payment: " + id);
    }
}