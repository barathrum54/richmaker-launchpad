  function forceConnect() {
        getWeb3();
    }
  
    var walletaddress;
    window.addEventListener('load', async () => {
        getWeb3();
    });
    var connected;
    let web3 = new Web3(Web3.givenProvider);
    if (location.pathname == '/') {
   // getData();
    }
    async function getWeb3() {
        if (window.ethereum) {
            window.web3 = await new Web3(ethereum);
            try {
                // Request account access if needed
                await ethereum.enable();
                document.getElementById('walletinfo').style.display = 'block';
                 var intervalId = window.setInterval(function() {
        checkConnection();
    }, 200);
            } catch (error) {
                // User denied account access...
            }
        }
        // Legacy dapp browsers...
        else if (window.web3) {
            window.web3 = new Web3(web3.currentProvider);
            // Acccounts always exposed
        }
        // Non-dapp browsers...
        else {
            console.log('Non-Ethereum browser detected. You should consider trying MetaMask!');
        }
    }

    function getData() {
        abi = JSON.parse(
            `[{"inputs":[],"stateMutability":"nonpayable","type":"constructor"},{"anonymous":false,"inputs":[{"indexed":true,"internalType":"address","name":"owner","type":"address"},{"indexed":true,"internalType":"address","name":"spender","type":"address"},{"indexed":false,"internalType":"uint256","name":"value","type":"uint256"}],"name":"Approval","type":"event"},{"anonymous":false,"inputs":[{"indexed":true,"internalType":"address","name":"previousOwner","type":"address"},{"indexed":true,"internalType":"address","name":"newOwner","type":"address"}],"name":"OwnershipTransferred","type":"event"},{"anonymous":false,"inputs":[{"indexed":true,"internalType":"address","name":"from","type":"address"},{"indexed":true,"internalType":"address","name":"to","type":"address"},{"indexed":false,"internalType":"uint256","name":"value","type":"uint256"}],"name":"Transfer","type":"event"},{"inputs":[{"internalType":"uint256","name":"burnFee","type":"uint256"}],"name":"_setBurnFee","outputs":[],"stateMutability":"nonpayable","type":"function"},{"inputs":[{"internalType":"uint256","name":"maxTxAmount","type":"uint256"}],"name":"_setMaxTxAmount","outputs":[],"stateMutability":"nonpayable","type":"function"},{"inputs":[{"internalType":"uint256","name":"taxFee","type":"uint256"}],"name":"_setTaxFee","outputs":[],"stateMutability":"nonpayable","type":"function"},{"inputs":[{"internalType":"address","name":"owner","type":"address"},{"internalType":"address","name":"spender","type":"address"}],"name":"allowance","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"stateMutability":"view","type":"function"},{"inputs":[{"internalType":"address","name":"spender","type":"address"},{"internalType":"uint256","name":"amount","type":"uint256"}],"name":"approve","outputs":[{"internalType":"bool","name":"","type":"bool"}],"stateMutability":"nonpayable","type":"function"},{"inputs":[{"internalType":"address","name":"account","type":"address"}],"name":"balanceOf","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"stateMutability":"view","type":"function"},{"inputs":[],"name":"decimals","outputs":[{"internalType":"uint8","name":"","type":"uint8"}],"stateMutability":"view","type":"function"},{"inputs":[{"internalType":"address","name":"spender","type":"address"},{"internalType":"uint256","name":"subtractedValue","type":"uint256"}],"name":"decreaseAllowance","outputs":[{"internalType":"bool","name":"","type":"bool"}],"stateMutability":"nonpayable","type":"function"},{"inputs":[{"internalType":"uint256","name":"tAmount","type":"uint256"}],"name":"deliver","outputs":[],"stateMutability":"nonpayable","type":"function"},{"inputs":[{"internalType":"address","name":"account","type":"address"}],"name":"excludeAccount","outputs":[],"stateMutability":"nonpayable","type":"function"},{"inputs":[{"internalType":"address","name":"account","type":"address"}],"name":"includeAccount","outputs":[],"stateMutability":"nonpayable","type":"function"},{"inputs":[{"internalType":"address","name":"spender","type":"address"},{"internalType":"uint256","name":"addedValue","type":"uint256"}],"name":"increaseAllowance","outputs":[{"internalType":"bool","name":"","type":"bool"}],"stateMutability":"nonpayable","type":"function"},{"inputs":[{"internalType":"address","name":"account","type":"address"}],"name":"isExcluded","outputs":[{"internalType":"bool","name":"","type":"bool"}],"stateMutability":"view","type":"function"},{"inputs":[],"name":"name","outputs":[{"internalType":"string","name":"","type":"string"}],"stateMutability":"view","type":"function"},{"inputs":[],"name":"owner","outputs":[{"internalType":"address","name":"","type":"address"}],"stateMutability":"view","type":"function"},{"inputs":[{"internalType":"uint256","name":"tAmount","type":"uint256"},{"internalType":"bool","name":"deductTransferFee","type":"bool"}],"name":"reflectionFromToken","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"stateMutability":"view","type":"function"},{"inputs":[],"name":"renounceOwnership","outputs":[],"stateMutability":"nonpayable","type":"function"},{"inputs":[],"name":"symbol","outputs":[{"internalType":"string","name":"","type":"string"}],"stateMutability":"view","type":"function"},{"inputs":[{"internalType":"uint256","name":"rAmount","type":"uint256"}],"name":"tokenFromReflection","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"stateMutability":"view","type":"function"},{"inputs":[],"name":"totalBurn","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"stateMutability":"view","type":"function"},{"inputs":[],"name":"totalFees","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"stateMutability":"view","type":"function"},{"inputs":[],"name":"totalSupply","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"stateMutability":"view","type":"function"},{"inputs":[{"internalType":"address","name":"recipient","type":"address"},{"internalType":"uint256","name":"amount","type":"uint256"}],"name":"transfer","outputs":[{"internalType":"bool","name":"","type":"bool"}],"stateMutability":"nonpayable","type":"function"},{"inputs":[{"internalType":"address","name":"sender","type":"address"},{"internalType":"address","name":"recipient","type":"address"},{"internalType":"uint256","name":"amount","type":"uint256"}],"name":"transferFrom","outputs":[{"internalType":"bool","name":"","type":"bool"}],"stateMutability":"nonpayable","type":"function"},{"inputs":[{"internalType":"address","name":"newOwner","type":"address"}],"name":"transferOwnership","outputs":[],"stateMutability":"nonpayable","type":"function"}]`
        );
        var contractInstance = new web3.eth.Contract(abi, '0x0d94335595ae842890bec091ef8c47d62f545d99');
        contractInstance.methods.totalSupply().call()
            .then(function(res) {
                var ts = res.substr(0, 5);
                document.getElementById('totalSupply').innerHTML = ts + ' $RICH';
                console.log(res, 'totalSupply() then');

            })
            .catch(function(error) {
                console.log(error, 'totalSupply() catch');

            });
        contractInstance.methods.totalBurn().call().then(function(res) {
            console.log(res);
            var tb = res.substr(0, 4);
            document.getElementById('totalBurn').innerHTML = tb + ' $RICH';
        }).catch(function(error) {
            console.log(error);
        });
        contractInstance.methods.name().call().then(function(res) {
            console.log(res);
            var tn = res.substr(0, 4);
            document.getElementById('tokenName').innerHTML = tn;
        }).catch(function(error) {
            console.log(error);
        });
        contractInstance.methods.symbol().call().then(function(res) {
            console.log(res);
            var tn = res.substr(0, 4);
            document.getElementById('symbol').innerHTML = tn;
        }).catch(function(error) {
            console.log(error);
        });
        contractInstance.methods.totalFees().call().then(function(res) {
            console.log(res);
            var tn = res.substr(0, 4);

            document.getElementById('totalFees').innerHTML = tn;
        }).catch(function(error) {
            console.log(error);
        });
    }
    function checkApprove() {
        
    }
    function approve(stake_contract) {
        
        tabi =  '[{"inputs":[],"stateMutability":"nonpayable","type":"constructor"},{"anonymous":false,"inputs":[{"indexed":true,"internalType":"address","name":"owner","type":"address"},{"indexed":true,"internalType":"address","name":"spender","type":"address"},{"indexed":false,"internalType":"uint256","name":"value","type":"uint256"}],"name":"Approval","type":"event"},{"anonymous":false,"inputs":[{"indexed":true,"internalType":"address","name":"previousOwner","type":"address"},{"indexed":true,"internalType":"address","name":"newOwner","type":"address"}],"name":"OwnershipTransferred","type":"event"},{"anonymous":false,"inputs":[{"indexed":true,"internalType":"address","name":"from","type":"address"},{"indexed":true,"internalType":"address","name":"to","type":"address"},{"indexed":false,"internalType":"uint256","name":"value","type":"uint256"}],"name":"Transfer","type":"event"},{"inputs":[{"internalType":"uint256","name":"burnFee","type":"uint256"}],"name":"_setBurnFee","outputs":[],"stateMutability":"nonpayable","type":"function"},{"inputs":[{"internalType":"uint256","name":"maxTxAmount","type":"uint256"}],"name":"_setMaxTxAmount","outputs":[],"stateMutability":"nonpayable","type":"function"},{"inputs":[{"internalType":"uint256","name":"taxFee","type":"uint256"}],"name":"_setTaxFee","outputs":[],"stateMutability":"nonpayable","type":"function"},{"inputs":[{"internalType":"address","name":"owner","type":"address"},{"internalType":"address","name":"spender","type":"address"}],"name":"allowance","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"stateMutability":"view","type":"function"},{"inputs":[{"internalType":"address","name":"spender","type":"address"},{"internalType":"uint256","name":"amount","type":"uint256"}],"name":"approve","outputs":[{"internalType":"bool","name":"","type":"bool"}],"stateMutability":"nonpayable","type":"function"},{"inputs":[{"internalType":"address","name":"account","type":"address"}],"name":"balanceOf","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"stateMutability":"view","type":"function"},{"inputs":[],"name":"decimals","outputs":[{"internalType":"uint8","name":"","type":"uint8"}],"stateMutability":"view","type":"function"},{"inputs":[{"internalType":"address","name":"spender","type":"address"},{"internalType":"uint256","name":"subtractedValue","type":"uint256"}],"name":"decreaseAllowance","outputs":[{"internalType":"bool","name":"","type":"bool"}],"stateMutability":"nonpayable","type":"function"},{"inputs":[{"internalType":"uint256","name":"tAmount","type":"uint256"}],"name":"deliver","outputs":[],"stateMutability":"nonpayable","type":"function"},{"inputs":[{"internalType":"address","name":"account","type":"address"}],"name":"excludeAccount","outputs":[],"stateMutability":"nonpayable","type":"function"},{"inputs":[{"internalType":"address","name":"account","type":"address"}],"name":"includeAccount","outputs":[],"stateMutability":"nonpayable","type":"function"},{"inputs":[{"internalType":"address","name":"spender","type":"address"},{"internalType":"uint256","name":"addedValue","type":"uint256"}],"name":"increaseAllowance","outputs":[{"internalType":"bool","name":"","type":"bool"}],"stateMutability":"nonpayable","type":"function"},{"inputs":[{"internalType":"address","name":"account","type":"address"}],"name":"isExcluded","outputs":[{"internalType":"bool","name":"","type":"bool"}],"stateMutability":"view","type":"function"},{"inputs":[],"name":"name","outputs":[{"internalType":"string","name":"","type":"string"}],"stateMutability":"view","type":"function"},{"inputs":[],"name":"owner","outputs":[{"internalType":"address","name":"","type":"address"}],"stateMutability":"view","type":"function"},{"inputs":[{"internalType":"uint256","name":"tAmount","type":"uint256"},{"internalType":"bool","name":"deductTransferFee","type":"bool"}],"name":"reflectionFromToken","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"stateMutability":"view","type":"function"},{"inputs":[],"name":"renounceOwnership","outputs":[],"stateMutability":"nonpayable","type":"function"},{"inputs":[],"name":"symbol","outputs":[{"internalType":"string","name":"","type":"string"}],"stateMutability":"view","type":"function"},{"inputs":[{"internalType":"uint256","name":"rAmount","type":"uint256"}],"name":"tokenFromReflection","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"stateMutability":"view","type":"function"},{"inputs":[],"name":"totalBurn","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"stateMutability":"view","type":"function"},{"inputs":[],"name":"totalFees","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"stateMutability":"view","type":"function"},{"inputs":[],"name":"totalSupply","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"stateMutability":"view","type":"function"},{"inputs":[{"internalType":"address","name":"recipient","type":"address"},{"internalType":"uint256","name":"amount","type":"uint256"}],"name":"transfer","outputs":[{"internalType":"bool","name":"","type":"bool"}],"stateMutability":"nonpayable","type":"function"},{"inputs":[{"internalType":"address","name":"sender","type":"address"},{"internalType":"address","name":"recipient","type":"address"},{"internalType":"uint256","name":"amount","type":"uint256"}],"name":"transferFrom","outputs":[{"internalType":"bool","name":"","type":"bool"}],"stateMutability":"nonpayable","type":"function"},{"inputs":[{"internalType":"address","name":"newOwner","type":"address"}],"name":"transferOwnership","outputs":[],"stateMutability":"nonpayable","type":"function"}]'
        token_abi = JSON.parse(tabi);
        var tokencontractInstance = new web3.eth.Contract(token_abi,'0xaa01d650f6f71334873ec5cb8d14bbf231713890');
        tokencontractInstance.methods.approve(stake_contract, web3.utils.toWei('0.1','ether')).send({ from: walletaddress}).then(function(res) {
        console.log(res);
        }).catch(function(error) {
            console.log(error);
        });
    }
    function getProjectData(contract_abi, contract,id, token_contract,closed ) {
     if (connected == true) {
         if (closed == true) {
         id += 'C'   
        }
        abi = JSON.parse(contract_abi);
        var contractInstance = new web3.eth.Contract(abi, contract);
        var hardCap;
        var softCap;
        var participants;
       


        contractInstance.methods.openTime().call()
            .then(function(res1) {
            $.ajax({
                type: "GET",
                url : '/open-time/'+id+'/'+res1,
                success: function(msg){
                    console.log(msg);

                },
                error: function(err){
                    console.log(err);
                }
            }); 
             contractInstance.methods.totalInvestorsCount().call()
                        .then(function(part) {
                        participants = part;
                        document.getElementById(id+'_participants').innerHTML = part;

                        });
                     //OPEN TIME 1616933998
                contractInstance.methods.openTime().call()
                        .then(function(resop) {
                                    $.ajax({
                                    type: "GET",
                                    url : '/open-time/'+id+'/'+resop,
                                    success: function(msg){
                                            if (Date.now() < resop * 1000) {
                                                $.ajax({
                                    type: "GET",
                                    url : '/set-upcoming/'+id,
                                    success: function(msg){
                                         
                                    }
                
                               });
                                            }else{
                                                     $.ajax({
                                    type: "GET",
                                    url : '/set-upcoming-false/'+id,
                                    success: function(msg){
                                         
                                    }
                
                               });
                                            }
                                    }
                
                               });
                     //CLOSE TIME
                     var closeTimeRaw;
                     contractInstance.methods.closeTime().call()
                        .then(function(res2) {
                            closeTimeRaw = res2;
                        dateNow = Date.now();
                      a = moment( new Date(dateNow).toLocaleString('en-GB') ,'D/M/YYYY, h:mm:ss');
                      b = moment( new Date(res2 * 1000).toLocaleString('en-GB'),'D/M/YYYY, h:mm:ss');
                      diffDays = b.diff(a, 'days');
                      var ct = document.getElementById(id+'_closeTime');

                      if (ct != null) {
                          
                          document.getElementById(id+'_closeTime').innerHTML = diffDays + ' Days';
                      if (diffDays < 2) {
                      a = moment( new Date(dateNow).toLocaleString('en-GB') ,'D/M/YYYY, h:mm:ss');
                      b = moment( new Date(res2 * 1000).toLocaleString('en-GB'),'D/M/YYYY, h:mm:ss');
                      diffDays = b.diff(a, 'hours');
                        document.getElementById(id+'_closeTime').innerHTML = diffDays + ' Hours';
                        }
                               
                              $.ajax({
                type: "GET",
                url : '/close-time/'+id+'/'+res2,
                success: function(msg){
                    
                }
                
            });
                      }
                      });
                      
                                   //SOFT CAP
                                   contractInstance.methods.softCapInWei().call()
                                             .then(function(res3) {
                                                 softCap = res3;
                                                 document.getElementById(id+'_softCap').innerHTML = web3.utils.fromWei(res3, 'ether')+ ' BNB'
                                                 console.log(res3, 'softCap() then');

                                                //HARD CAP
                                                 contractInstance.methods.hardCapInWei().call()
                                                    .then(function(res4) {
                                                        hardCap = res4;
                                                        document.getElementById(id+'_hardCap').innerHTML = web3.utils.fromWei(res4, 'ether')+ ' BNB'
                                                        console.log(res4, 'hardCap() then');

                                                                    //RAISED
                                                                    contractInstance.methods.totalCollectedWei().call()
                                                                     .then(function(res5) {
                                                                              
                                                                         raised =  res5;

                                                                         document.getElementById(id+'_raised').innerHTML = web3.utils.fromWei(raised, 'ether') ;

                                                                         percent = res5 / hardCap * 100;
                                                                         document.getElementById(id+'_progress').style.width = percent+'%';
                                                                         document.getElementById('rico_loader').style.display = 'none !important';
                                                                        document.getElementById('pr').style.display = 'block';
                                                                        document.getElementById('rico_loader').style.display = 'none';
                                                                         document.getElementById(id).style.display = 'block';
                                                                        console.log(percent,id,diffDays,participants);
                                                                                  $.ajax({
                                                                                         type: "POST",
                                                                                         url : '/set-data',
                                                                                           data: {
                                                                                            project_id:id,
                                                                                            raised: web3.utils.fromWei(raised, 'ether'),
                                                                                            percent:percent,
                                                                                            time_left:diffDays,
                                                                                            participants:participants,
                                                                                            softCap: web3.utils.fromWei(softCap, 'ether'),
                                                                                            hardCap: web3.utils.fromWei(hardCap, 'ether')

                                                                                        },
                                                                                          headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                                                                                        success: function(msg){

                                                                                            console.log(msg);
                                                                                         
                                                                                        }
                                                                                        ,
                                                                                          error: function(err){
                    console.log(err);
                }
                                                                                    });

                                                                          if( Date.now() >= closeTimeRaw * 1000) {
                                                                                                if (Number(raised) < Number(softCap)) {
                                                                                                    setProjectFail(id);
                                                                                                }else{
                                                                                                    setProjectSuccess(id)
                                                                                                }
                                                                         }
                                                                         if (Number(raised) >= Number(softCap)) {

                                                                             document.getElementById(id+'_softCap').innerHTML = web3.utils.fromWei(res3, 'ether')+ ' BNB' + ' <span class="text-success" style="font-size:11pt">Reached!</span>';

                                                                             setSoftCapReach(id);
                                                                         }
                                                                         if (Number(raised) >= Number(hardCap)) {
                                                                             
                                                                             document.getElementById(id+'_hardCap').innerHTML = web3.utils.fromWei(res4, 'ether')+ ' BNB'  + ' <span class="text-success" style="font-size:11pt">Reached!</span>';

                                                                             setHardCapReach(id);
                                                                             setProjectSuccess(id);
                                                                             document.getElementById('btn_invest').style.display = 'none';
                                                                             document.getElementById('investinput_wrap').style.display = 'none';
                                                                             document.getElementById('investinput').style.display = 'none';
                                                                            
                                                                                contractInstance.methods.presaleCreatorAddress().call()
                                                                                        .then(function(res6) {
                                                                                            console.log(res6);
                                                                                          if (res6 == walletaddress) {
                                                                                               document.getElementById('btn_claimBnb').style.display = 'flex';
                                                                                          }else{
                                                                                               document.getElementById('btn_claimTokens').style.display = 'flex';

                                                                                          }
                                                                                           

                                                                                        })
                                                                                        .catch(function(error) {
                                                                                            console.log(error, 'totalRaised() catch');
                                                                                        });
                                                                                            }

                                                                                        })
                                                                     .catch(function(error) {
                                                                         console.log(error, 'presaleCreatorAdress() catch');
                                                                     });

                                                    })
                                                    .catch(function(error) {
                                                        console.log(error, 'hardCap() catch');
                                                    });
                                             })
                                             .catch(function(error) {
                                                 console.log(error, 'softCap() catch');
                                             });
                        })
                        .catch(function(error) {
                            console.log(error, 'closedTime() catch');
                        });
            })
            .catch(function(error) {
                console.log(error, 'openTime() catch');

            });
             }else{
         setTimeout(() => {
             getProjectData(contract_abi, contract, id, token_contract,closed);
         }, 1000);
     }
    }

    function stake_deposit(contract_abi,contract){
           amount = document.getElementById('stakeinput').value;

           abi = JSON.parse(contract_abi);
        var contractInstance = new web3.eth.Contract(abi, contract);
      contractInstance.methods.deposit(amount).send({ from: walletaddress,
                to: contract,
                value: window.web3.utils.toWei(amount, "ether")
            }).then(function(res) {
                window.location.reload();
            
        }).catch(function(error) {
            console.log(error);
        });

    }
    function setSoftCapReach(id){
        $.ajax({
                type: "GET",
                url : '/softcap-reach/'+id,
                success: function(msg){
                    console.log('SoftCap Reached of project id: '+ id + '|| MSG: ' + msg )
                }
            });
}
    function setHardCapReach(id){
            $.ajax({
                type: "GET",
                url : '/hardcap-reach/'+id,
                success: function(msg){
                    console.log('SoftCap Reached of project id: '+ id + '|| MSG: ' + msg )
                }
            });
    }
    function setProjectSuccess(id) {

         $.ajax({
                type: "GET",
                url : '/project-success/'+id,
                success: function(msg){
                    console.log('SoftCap Reached of project id: '+ id + '|| MSG: ' + msg )
                }
            });
    }
    function setProjectFail(id) {

         $.ajax({
                type: "GET",
                url : '/project-fail/'+id,
                success: function(msg){
                    console.log('SoftCap Reached of project id: '+ id + '|| MSG: ' + msg )
                }
            });
    }

    function invest(contract_abi, contract) {
        amount = document.getElementById('investinput').value;
        abi = JSON.parse(contract_abi);
        var contractInstance = new web3.eth.Contract(abi, contract);
        var gas;
        web3.eth.estimateGas({
             "from"      : walletaddress,       
             "nonce"     : web3.utils.toWei(amount,'ether'), 
             "to"        : contract    
        }).then(res => {
            gas = res;
            console.log(res,'GAS');
        })
        console.log(gas);
          contractInstance.methods.invest().send({ from: walletaddress,
                to: contract,
                value: window.web3.utils.toWei(amount, "ether"),
                gas: gas}).then(function(res) {
                    window.location.reload();
            console.log(res);
            
        }).catch(function(error) {
            console.log(error);
        });
    }
    function checkInvestments(contract_abi, contract) {
        if (connected) {
            
          abi = JSON.parse(contract_abi);
        var contractInstance = new web3.eth.Contract(abi, contract);
          contractInstance.methods.investments(walletaddress).call().then(function(res) {
             document.getElementById('investments').innerHTML = window.web3.utils.fromWei(res, 'ether') + ' BNB';
        }).catch(function(error) {
            console.log(error);
        });
        }else{
            setTimeout(() => {
                
                checkInvestments(contract_abi, contract);
            }, 2000);
        }

    }

    function checkConnection() {
        
        web3.eth.getAccounts(function(err, accounts) {
            if (err != null) console.error("An error occurred: " + err);
            else if (accounts.length == 0) {
                console.log('not connected')
                connected = false;
                document.getElementById('connectButton').style.visibility = 'visible';
                document.getElementById('connectionstatus').innerHTML = 'Not Connected';
                document.getElementById('walletadress').style.display = 'none !important';

            } else {
                document.getElementById('connectButton').style.visibility = 'hidden';
                console.log('connected')
                connected = true;
                document.getElementById('connectionstatus').innerHTML = 'Connected';
                document.getElementById('connectionstatus').style.color = 'green';
                walletaddress = accounts[0];
                document.getElementById('walletadress').innerHTML = accounts[0];
                document.getElementById('walletadress').style.display = 'block';
                document.getElementById('walletadress').style.color = 'yellow';
            };
        });
    }
    function claimTokens(contract_abi, contract) {
        var gas;
        console.log(walletaddress, web3.utils.toWei('1','ether'),contract);
        console.log(walletaddress, contract);
          web3.eth.estimateGas({
             "from"      : walletaddress,       
             "nonce"     : web3.utils.toWei('1','ether'), 
             "to"        : contract    
        }).then(res => {
            gas = res;
            console.log(res,'GAS');
        })
       
          abi = JSON.parse(contract_abi);
        var contractInstance = new web3.eth.Contract(abi, contract);
        contractInstance.methods.claimTokens().send({ from: walletaddress,
                }).then(function(res) {
                    window.location.reload();
            console.log(res);
            
        }).catch(function(error) {
            console.log(error);
        });
    }

    function dialogbox(text) {
        bootbox.alert({
    message: "This is the large alert!",
    size: 'large'
});
    }
    