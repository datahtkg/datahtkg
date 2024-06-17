system('clear');
error_reporting(0);
$yellow = "\033[0;33m";
$maufullxduong= "\e[1;47;34m";
$maufulldo= "\e[1;47;31m";
$end="\033[0m";
$whiteb="\033[1;37m";
$ress = "\033[0;32m";
$res = "\033[0;33m";
$red = "\033[0;31m";
$green = "\033[0;37m";
$yellow = "\033[0;33m";
$white = "\033[0;33m";
$Bxnhac = "\033[1;96m";
$den = "\033[1;90m";
$do = "\033[1;91m";
$luc = "\033[1;92m";
$vang = "\033[1;93m";
$xduong = "\033[1;94m";
$hong = "\033[1;95m";
$trang = "\033[1;97m";
$nenden = "\033[40m";
$xanhd = "\033[0;36m";
$nendo = "\033[41m";
$nenxanh = "\033[42m";
$nenvang = "\033[43m";
$nenblue = "\033[44m";
$nenPurpe = "\033[45m";
$nenCyan = "\033[46m";
$nentrang = "\033[47m";
$UGreen = "\033[4;32m";
$BGreen = "\033[1;32m";
$maufullluc= "\e[1;47;32m";
$maufullxnhac= "\e[1;47;36m";
$maufullden= "\e[1;47;30m";
$maufullvang= "\e[1;47;33m";
$do = "\033[1;31m";
$luc = "\033[1;32m";
$vang = "\033[1;33m";
$xduong = "\033[1;34m";
$tim = "\033[1;35m";
$xnhac = "\033[1;36m";
$trang = "\033[1;37m";
$hong = "\033[1;95m";
$trang = "\033[1;97m";
$ress = "\033[0;32m";
$res = "\033[0;33m";
$red = "\033[0;31m";
$green = "\033[0;37m";
$nau= "\e[38;5;94m";
$white = "\033[0;33m";
$res="\033[0m";
$red="\033[1;31m";
$white= "\033[1;37m";
$whiteb= "\033[1;37m";
$redb="\033[1;31m";
$green="\033[1;32m";
$yellow="\033[1;33m";
$cam="\033[1;33m";
$test="\033[1;33m";
$greenb="\033[1;32m";

$lam="\033[1;34m";
$tmi="\033[1;34m";
$hong="\033[1;35m";
$imt="\033[1;35m";
$cyan= "\e[1;36m";
$syan="\033[1;36m";
$xnhac= "\033[1;96m";
$den="\033[1;90m";
$do="\033[1;91m";
$luc="\033[1;92m";
$vang="\033[1;93m";
$xduong="\033[1;94m";
$hong="\033[1;95m";
$trang="\033[1;97m";
$vang="\033[1;93m";
$do="\033[1;91m";
$BBlack="\033[1;30m" ;
$BRed="\033[1;31m"         ;
$BGreen="\033[1;32m"       ;
$BYellow="\033[1;33m"   ;
$BBlue="\033[1;34m"        ;
$BPurple="\033[1;35m"      ;
$BCyan="\033[1;36m"   ;
$BWhite="\033[1;37m"    ;
$lime="\033[1;32m";
$red="\033[1;31m";
$xanh="\033[1;32m";
$cyan="\033[1;36m";
$yellow="\033[1;33m";
$turquoise="\033[1;34m";
$maugi="\033[1;35m";
$white= "\033[1;37m";
$BCyan="\033[1;36m";
$trang="\033[1;37m";
$do="\033[1;31m";
$luc="\033[1;32m";
$vang="\033[1;33m";
$luc="\033[1;92m";
$xnhac = "\033[1;36m";
$do = "\033[1;31m";
$luc = "\033[1;32m";
$vang = "\033[1;33m";
$xduong = "\033[1;34m";
$hong = "\033[1;35m";
$trang = "\033[1;37m";


function curl($url, $post = 0, $httpheader = 0, $proxy = 0){ 
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 30);
    curl_setopt($ch, CURLOPT_TIMEOUT, 60);
    curl_setopt($ch, CURLOPT_COOKIE, TRUE);

    if($post){
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
    }
    if($httpheader){
        curl_setopt($ch, CURLOPT_HTTPHEADER, $httpheader);
    }
    if($proxy){
        curl_setopt($ch, CURLOPT_HTTPPROXYTUNNEL, true);
        curl_setopt($ch, CURLOPT_PROXY, $proxy);
    }
    curl_setopt($ch, CURLOPT_HEADER, true);
    $response = curl_exec($ch);
    $httpcode = curl_getinfo($ch);
    if(!$httpcode) return "Curl Error : ".curl_error($ch);
    $header = substr($response, 0, curl_getinfo($ch, CURLINFO_HEADER_SIZE));
    $body = substr($response, curl_getinfo($ch, CURLINFO_HEADER_SIZE));
    curl_close($ch);
    return array($header, $body);
}

function get_header($method = 'GET'){
    $header = array(
        "user-agent: Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/120.0.0.0 Mobile Safari/537.36",
        "accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7",
    );
    if($method == 'POST'){
        $header[] = "content-type: application/x-www-form-urlencoded";
    }
    return $header;
}

function get($url){
    return curl($url,'',head())[1];
}

function post($url,$data){
    return curl($url,$data,head())[1];
}

function save($data,$data_post){
    if(!file_exists($data)){
        file_put_contents($data,"[]");
    }
    $json = json_decode(file_get_contents($data), true);
    $arr = array_merge($json, $data_post);
    file_put_contents($data, json_encode($arr, JSON_PRETTY_PRINT));
}

# User-agent
if(!file_exists("ua.txt")){
    $useragent = readline("User-agent: ");
    $data = ["User-agent" => $useragent];
    save("ua.txt", $data);
}

# Cookie
if(!file_exists("pl.txt")){
    $cookie = readline("Cookie: ");
    $data = ["Cookie" => $cookie];
    save("pl.txt", $data);
}
echo $do."[".$vang."DAT Tool".$do."] ".$green."api Xevil".$do." : ".$trang;
    $plp = trim(fgets(STDIN));
system('clear');
function head(){
    $useragent = json_decode(file_get_contents("ua.txt"), true)["User-agent"];
    $cookie = json_decode(file_get_contents("pl.txt"), true)["Cookie"];
    $h = [
        "Host: 9faucet.top",
        "upgrade-insecure-requests: 1",
        "user-agent: $useragent",
        "cookie: $cookie"
    ];
    return $h;
}

function timer($seconds) {
    while ($seconds > 0) {
        echo "\rWaiting for $seconds seconds";
        sleep(1);
        $seconds--;
    }
    echo "\n";
}

# Dashboard
$logo ="
                \033[1;32m╔════════════════════════════════╗
                \033[1;32m║\033[1;96m\033[1;91m\033[1;34m➽ Telegram : \033[1;35m@datvip010   \033[1;32m              ║
                \033[1;32m║\033[1;96m\033[1;91m\033[1;92m➽ Youtube : \033[1;31mTIEN DAT          \033[1;32m          ║
                \033[1;32m║\033[1;96m\033[1;91m\033[1;37m➽ Bản Quyền By : \033[1;90mTIEN DAT    \033[1;32m           ║
                \033[1;32m║\033[1;96m\033[1;91m\033[1;37m➽ fauectpay: \033[1;90mdanghoangk08@gmail.com    \033[1;32m ║
                \033[1;32m╚════════════════════════════════╝        
\n";
echo "$logo";
$url = "https://9faucet.top/dashboard";
$res = get($url);
$bal = explode('</p>', explode('<p class="acc-amount text-orange">', $res)[1])[0];
print "Your balance : $bal\n";

while (true) {
    # Verification
    $url = "https://9faucet.top/faucet";
    $res = get($url);
    
    $ssl = explode('</h4>', explode('<h4 class="lh-1 mb-1">',$res)[1])[0];
    $token = explode('"', explode('<input type="hidden" name="token" value="', $res)[1])[0];
    $cs = explode('"', explode('<input type="hidden" name="csrf_token_name" id="token" value="', $res)[1])[0];
    for($k = $ssl; $k > 0;){
    $timr = 65;
    
    timer($timr);

    $key = $plp;
    $method = 'userrecaptcha';
    $sitekey = '6Ld_OB8pAAAAAC9B8mFQxO08y8fBGrESzn_1PmUT';
    $pageurl = $url;

    // POST data
    $data = [
        'key' => $key,
        'method' => $method,
        'sitekey' => $sitekey,
        'pageurl' => $pageurl
    ];

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'http://goodxevilpay.pp.ua/in.php');
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    $response = curl_exec($ch);
    if(curl_errno($ch)){
        echo 'Curl error: ' . curl_error($ch);
        curl_close($ch);
        continue;
    }
    $id = explode('OK|', $response)[1];
    curl_close($ch);

    while (true) {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'http://goodxevilpay.pp.ua/res.php?key='.$key.'&id='.$id);
        curl_setopt($ch, CURLOPT_POST, 0);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $pl = curl_exec($ch);
        if(curl_errno($ch)){
            echo 'Curl error: ' . curl_error($ch);
            curl_close($ch);
            continue;
        }
        curl_close($ch);
        if ($pl == "CAPCHA_NOT_READY") {
            echo "\rWaiting captcha\r";
            sleep(5);
        } else {
            $ha = explode('OK|', $pl)[1];
            echo "Success bypass\n";
            break;
        }
    }
}
    # Verification POST
    $url = "https://9faucet.top/faucet/verify";
    $data = "csrf_token_name=$cs&token=$token&captcha=recaptchav2&g-recaptcha-response=$ha";
    $res = post($url, $data);
    $suc = explode("'", explode("text: '", $res)[1])[0];
    echo "$suc\n";

    # Update balance
    $url = "https://9faucet.top/dashboard";
    $res = get($url);
$bal = explode('</p>', explode('<p class="acc-amount text-orange">', $res)[1])[0];
    print "Update balance : $bal\n";
}
