$(document).ready(function(){
  
let i = 0;
let num = 0;
let genesis = false;
  
class Block {
  constructor(index, timestamp, data, previousHash) {
    this.index = "<span1>" + index + "</span1>";
    this.timestamp = timestamp;
    this.data = data;
    this.previousHash = previousHash ;
    this.hash = "<span2>" + this.calculateHash() + "</span2>";
  }
  
  calculateHash() {
    const { index, timestamp, data } = this;
    return  sha256(index + timestamp + JSON.stringify(data)).toString().substring(0, 15);
  }
}
  
  class BlockChain {
    constructor() {
      this.chain = [this.genesisBlock()];  
    }
    
    genesisBlock() {
      return new Block(i, new Date().toLocaleString(), "Genesis Block");
    }
    
    getLast() {
      return this.chain[this.chain.length - 1];
    }
    
    addBlock(newBlock) {
      newBlock.previousHash =`<span2>${this.getLast().hash}</span2>`;
      newBlock.hash = newBlock.calculateHash();
      this.chain.push(newBlock);
    }
    
  }
  
  const coin = new BlockChain();
  
  function addNew() {
    const inputData = $("#searchField").val();
    const time = new Date();
    i++;
    coin.addBlock(new Block(i, time.toLocaleString(), inputData));
  }
  
  ///Keydown ENTER function
  $(document).keydown(function(key){
      if(key.keyCode == 13){
        $("#inputData").trigger("click");
      }
    });
  /////
  
  $("#inputData").click(function(){
    addNew();
    num++; 
    coin.chain.forEach(function(newChain){
      $("#outputField").append("<div id='" + num + "' class='col-md-12 coin-board'></div>");
      if(genesis === false && num === 1) {
       $("#" + num).html(JSON.stringify(newChain, null, '<br/>').replace(/[{}"']/g,""));
       num++;
       genesis = true;
       $("#" + num).html(JSON.stringify(newChain, null, '<br/>').replace(/[{}"']/g,""));
    }
    else if( num < 4){
       $("#" + num).html(JSON.stringify(newChain, null, '<br/>').replace(/[{}"']/g,""));
    }
    else {
      num = 0;
      num++;
    }  
  });
    $("#searchField").val('');
  });
  
  
  $("#Restart").click(function(){
    genesis = false;
    i = 0;
    coin.chain = [coin.genesisBlock()];
    $("#searchField").val('');
    $("#outputField").html('');
    num = 0;
  });
  
});