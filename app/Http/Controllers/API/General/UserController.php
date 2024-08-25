<?php

namespace App\Http\Controllers\API\General;

use App\Http\Controllers\API\BaseController;

use App\Models\General\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class UserController extends BaseController
{
    public function getUsers()
    {
        $user = new User();
        $users = $user->getUser();

        if ($users)
            return $this->sendResponse($users, "ok");

        return $this->sendError('no users', 100);
    }


    // cardNews

    public function getNews(Request $request)
    {
        $response = [

            "return" => true,
            "message" => "ok",
            "data" => [
                "next_page" => "next",
                "prev_page" => "prev",
                "page" => 1,
                "showing" => 10,
                "result" => [
                    [
                        "title" => "Meta seeks to use generative AI in its metaverse, job listing shows",
                        "articleBody" => " ",
                        "pubDate" => 1719976920,
                        "keywords" => [
                            "meta",
                            " generative ai",
                            " metaverse",
                            " gaming",
                            " mixed reality",
                            " virtual reality",
                            " horizon worlds",
                            " job listing"
                        ],
                        "author" => "Cointelegraph by Felix Ng",
                        "link" => "https://cointelegraph.com/news/meta-generative-ai-metaverse-job-listing",
                        "provider" => "Cointelegraph",
                        "category" => "cryptocurrencies",
                        "summary" => "",
                        "thImage" => "https://images.cointelegraph.com/images/840_aHR0cHM6Ly9zMy5jb2ludGVsZWdyYXBoLmNvbS91cGxvYWRzLzIwMjQtMDcvMWIzZDJjODctODkwMC00MDk2LWE3MGMtNzAxZjUwZDMxMTZjLmpwZw==.jpg",
                        "Negative" => 0,
                        "Neutral" => 0,
                        "Positive" => 0
                    ],
                    [
                        "title" => "Northern Data, European Bitcoin Miner, Explores IPO for US AI Unit (Report)",
                        "articleBody" => "Northern Data might be exploring options for a Nasdaq listing in early 2025, covering its data centers (Ardent) and AI cloud computing (Taiga).",
                        "pubDate" => 1719976545,
                        "keywords" => [
                            "bitcoin mining"
                        ],
                        "author" => "Wayne Jones",
                        "link" => "https://cryptopotato.com/northern-data-european-bitcoin-miner-explores-ipo-for-us-ai-unit-report/",
                        "provider" => "Cryptopotato",
                        "category" => "cryptocurrencies",
                        "summary" => " ",
                        "thImage" => " "
                    ],
                    [
                        "title" => " Sydney Sweeney’s X account hacked to promote crypto memecoin ",
                        "articleBody" => " ",
                        "pubDate" => 1719976057,
                        "keywords" => [
                            "sydney sweeney",
                            " solana",
                            " celebrity coin",
                            " caitlyn jenner",
                            " iggy azalea",
                            " sahil arora",
                            " telegram",
                            " 50 cent",
                            " hulk hogan",
                            " x",
                            " scam",
                            " pump &amp; dump"
                        ],
                        "author" => "Cointelegraph by Brayden Lindrea",
                        "link" => "https://cointelegraph.com/news/sydney-sweeney-x-account-promotes-crypto-memecoin",
                        "provider" => "Cointelegraph",
                        "category" => "cryptocurrencies",
                        "summary" => "",
                        "thImage" => "https://images.cointelegraph.com/images/840_aHR0cHM6Ly9zMy5jb2ludGVsZWdyYXBoLmNvbS91cGxvYWRzLzIwMjQtMDcvNWIxOWZkZjctNjQzZC00MTIxLTliMTItMWNjYjQ1MDgxZGVjLmpwZw==.jpg",
                        "Negative" => 0,
                        "Neutral" => 0,
                        "Positive" => 0
                    ],
                    [
                        "title" => "Fundstrat’s Head Of Research Says Bitcoin Will Reach $150,000, Here’s When",
                        "articleBody" => "Fundstrat’s head of research, Tom Lee has doubled down on his initial Bitcoin prediction, strongly emphasizing that the pioneer cryptocurrency will surge to $150,000. The Wall Street strategist highlighted Bitcoin’s strong bullish outlook, believing that the cryptocurrency will eventually pull out of bearish trends soon. Bitcoin To Hit $150,000 In 2024 In a recent interview with CNBC Television, Lee expressed bullish optimism over Bitcoin’s future outlook, reaffirming his previous prediction that the cryptocurrency would reach new all-time highs of $150,000 by the end of 2024.  Related Reading: Bitcoin Investors Place $500 Million In Spot BTC Bids Below Market Price Earlier in May, Lee made a bullish forecast for Bitcoin, anticipating a dramatic surge to $150,000 before the year ends. At the time, the Fundstrat head of research attributed his ambitious forecast to the cooling down of inflation in the United States (US) and a subsequent increase in the demand for BTC. However, now Lee adds that BTC could witness a sharp rebound following the conclusion of Mt Gox’s Bitcoin repayment process to creditors. During the interview, Lee suggested that the upcoming Bitcoin redistribution by Mt Gox might be driving the bearish pressure on Bitcoin’s price. Earlier in June, Mt Gox disclosed that it would officially start its $9 billion worth of BTC and Bitcoin Cash (BCH) repayment plans in July. The redistribution will see creditors being refunded and compensated for the Bitcoin exchange’s hack attack in 2014.  With $9 billion worth of BTC and BCH set to flood the market, speculations are rising concerning potential sell-offs from creditors. This sentiment has led to BTC’s downward spiral, triggering stronger selling pressures from investors.  Bitcoin’s price also fell below $60,000 at some point, recording even more declines as miners sold off their holdings to purchase more effective mining tools. Lee believes that following any Gox’s repayment process, Bitcoin may have a “pretty sharp rebound” in the second half of the year.  Bearish Trends May Be Over For BTC Bitcoin price has successfully crossed the $60,000 threshold and is now trading at $62,523, as of writing. Since early June, the cryptocurrency has experienced a sharp downward trend, crashing by up to 20% due to the substantial outflows from Spot Bitcoin ETFs.  However, Bitcoin may be getting ready for a fresh upside as analysts foresee a major rebound as miners’ selling pressure cool off and the broader crypto market stabilizes. Related Reading: Dogecoin Flashes Major Bullish Signal On 3-Day Chart, Here’s The Target Particularly, on-chain market intelligence platform, CryptoQuant has projected a potential upside for Bitcoin in the third quarter of 2024 (Q3). Furthermore, crypto analyst Ali Martinez has expressed bullish sentiment for BTC’s price prospects.   In an X (formerly Twitter) post, Martinez highlighted Bitcoin’s underperformance in the previous month, describing this bearish event as a “negative June.” Despite the downtrend, the analyst foresees a strong rebound for Bitcoin in July, with an average return of 7.98% and a possible price increase to $63,200 or $63,800.  Featured image created with Dall.E, chart from Tradingview.com",
                        "pubDate" => 1719975600,
                        "keywords" => [
                            "bitcoin",
                            "bitcoin",
                            "bitcoin news",
                            "bitcoin price",
                            "btc",
                            "btc news",
                            "btc price",
                            "btcusd",
                            "btcusdt",
                            "fundstrat",
                            "fundstrat’s head of research"
                        ],
                        "author" => "Scott Matherson",
                        "link" => "https://www.newsbtc.com/news/bitcoin/fundstrat-bitcoin-reach-15000/",
                        "provider" => "NewsBTC",
                        "summary" => "",
                        "thImage" => "https://www.newsbtc.com/wp-content/uploads/2024/07/Bitcoin-price.jpeg?fit=460%2C263",
                        "category" => "cryptocurrencies",
                        "Negative" => 0,
                        "Neutral" => 0,
                        "Positive" => 0
                    ],
                    [
                        "title" => " Ethereum will outperform Bitcoin after ETF launch: K33 Research ",
                        "articleBody" => " ",
                        "pubDate" => 1719975089,
                        "keywords" => [
                            "ethereum etf",
                            " ethereum bitcoin",
                            " ethereum price prediction",
                            " ethereum price",
                            " eth price",
                            " eth/btc",
                            " ethereum vs bitcoin",
                            " eth invest",
                            " ethereum crypto",
                            " eth etf",
                            " ether etf",
                            " bitcoin etf",
                            " k33 research"
                        ],
                        "author" => "Cointelegraph by Tom Mitchelhill",
                        "link" => "https://cointelegraph.com/news/ethereum-price-will-outperform-bitcoin-following-eth-etf-launch-analysts",
                        "provider" => "Cointelegraph",
                        "category" => "cryptocurrencies",
                        "summary" => "",
                        "thImage" => "https://images.cointelegraph.com/images/840_aHR0cHM6Ly9zMy5jb2ludGVsZWdyYXBoLmNvbS91cGxvYWRzLzIwMjQtMDcvYzUzOGQwNTctMmYzNy00NzdmLTk5NmUtMGQwOTMwZTI0ZTQwLmpwZw==.jpg",
                        "Negative" => 0,
                        "Neutral" => 0,
                        "Positive" => 0
                    ],
                    [
                        "title" => "Bitcoin Price Takes a Step Back: Analyzing The Recent Correction",
                        "articleBody" => "Bitcoin price failed to continue higher above the $63,650 resistance zone. BTC is now correcting gains and might revisit the $60,850 support. Bitcoin started a downside correction from the $63,650 resistance zone. The price is trading below $62,500 and the 100 hourly Simple moving average. There is a connecting bearish trend line forming with resistance at $61,850 on the hourly chart of the BTC/USD pair (data feed from Kraken). The pair might struggle to start a fresh increase above the $62,250 resistance zone. Bitcoin Price Dips Again Bitcoin price struggled to extend gains above the $63,650 and $63,800 resistance levels. A high was formed at $63,798 and the price started a downside correction. The price declined below the $63,000 level. The bears were able to push it below the $62,500 level and the 100 hourly Simple moving average. There was also a move below the 50% Fib retracement level of the upward move from the $59,951 swing low to the $63,798 high. Bitcoin price is now trading below $62,500 and the 100 hourly Simple moving average. There is also a connecting bearish trend line forming with resistance at $61,850 on the hourly chart of the BTC/USD pair. The bulls are now trying to protect the $61,400 zone and the 61.8% Fib retracement level of the upward move from the $59,951 swing low to the $63,798 high. If there is another increase, the price could face resistance near the $61,850 level and the trend line. The first key resistance is near the $62,250 level. The next key resistance could be $62,500. A clear move above the $62,500 resistance might start a steady increase and send the price higher. In the stated case, the price could rise and test the $63,250 resistance. Any more gains might send BTC toward the $63,650 resistance in the near term. More Losses In BTC? If Bitcoin fails to climb above the $62,250 resistance zone, it could continue to move down. Immediate support on the downside is near the $61,400 level. The first major support is $60,850. The next support is now forming near $60,500. Any more losses might send the price toward the $60,000 support zone in the near term. Technical indicators: Hourly MACD – The MACD is now gaining pace in the bearish zone. Hourly RSI (Relative Strength Index) – The RSI for BTC/USD is now below the 50 level. Major Support Levels – $61,400, followed by $60,850. Major Resistance Levels – $62,250, and $62,500.",
                        "pubDate" => 1719974918,
                        "keywords" => [
                            "btc",
                            "bitcoin",
                            "bitcoin price",
                            "btcusd",
                            "btcusdt",
                            "xbtusd"
                        ],
                        "author" => "Aayush Jindal",
                        "link" => "https://www.newsbtc.com/analysis/btc/bitcoin-price-back-62k/",
                        "provider" => "NewsBTC",
                        "summary" => "",
                        "thImage" => "https://www.newsbtc.com/wp-content/uploads/2024/07/Bitcoin-Back.jpeg?fit=460%2C263",
                        "category" => "cryptocurrencies",
                        "Negative" => 0,
                        "Neutral" => 0,
                        "Positive" => 0
                    ],
                    [
                        "title" => "Bitcoin spot volume data shows significant buying pressure pre-halving",
                        "articleBody" => "Onchain Highlights DEFINITION: Spot Cumulative Volume Delta (CVD) measures the net difference between buying and selling trade volumes, specifically highlighting the difference in volume where the buyer or seller was the aggressor. It includes trades where USD or USD-related currencies serve as the quote currency, encompassing both fiat and stablecoins.  Bitcoin’s Spot Cumulative Volume Delta (CVD) […]\nThe post Bitcoin spot volume data shows significant buying pressure pre-halving appeared first on CryptoSlate.\n",
                        "pubDate" => 1719972021,
                        "keywords" => [],
                        "author" => "News Desk",
                        "link" => "https://cryptoslate.com/insights/bitcoin-spot-volume-data-shows-significant-buying-pressure-pre-halving/",
                        "provider" => "Cryptoslate",
                        "category" => "cryptocurrencies",
                        "summary" => " ",
                        "thImage" => "https://cryptoslate.com/wp-content/uploads/2024/07/CVD-1.png"
                    ],
                    [
                        "title" => "Buckle Up: Here Is Why Bitcoin Might Just Be Gearing Up For a 200% Surge",
                        "articleBody" => "Amid the current Bitcoin market performance suggesting signs of a rebound, prominent crypto analyst Wise Advice has highlighted a critical indicator in Bitcoin’s trading pattern. Bollinger Bands Signal 200% Bitcoin Surge According to the analyst, the Bitcoin weekly Bollinger Band, a statistical chart characterizing the prices and volatility over time, has shrunk to its second-lowest width in six years. Traditionally, such contraction has been a precursor to substantial price movements. Related Reading: Market Analysts Eye July for Potential Big Wins in Bitcoin and Ethereum — Here’s Why Wise advice disclosed that historically, a similar constriction was observed before Bitcoin surged 200% from a base of $24,000 to a high peak within five months. This indicator is particularly noteworthy as it suggests that market volatility is about to increase, potentially leading to a significant price rise. For context, Bollinger Bands are a set of trend indicators derived from a moving average and an upper and lower band, each set at a standard deviation from the moving average. This tool helps traders to assess how high or low the current price is relative to previous trades. A narrowing of these bands typically indicates a reduction in volatility. A sharp increase or decrease often follows it in price, as the market prepares to make a substantial move. Bitcoin Holders, Read this 🚨 The #Bitcoin weekly Bollinger band is now at its 2nd lowest level in 6 years. The last time it was this low, #BTC was trading at $24K, and it pumped 200% in just 5 months pic.twitter.com/jnud3pCjAr — Wise Advice (@wiseadvicesumit) July 1, 2024 Recent Market Activity and Bullish Outlook Despite a promising setup, Bitcoin has recently struggled to maintain its upward momentum. Over the past week, while there has been a modest 3% recovery, the price has faced resistance, peaking at $63,790 before dipping to around $62,563. This recent price action occurs amid broader market anticipation of a favorable July. Market analysts, including the team at QCP Capital, reference historical data showing Bitcoin’s tendency to rebound in July with an average return of 9.6%, especially after weak performances in June. This pattern of a strong July following a weak June is supported by additional market commentary. They are not alone in their optimism; other market analysts like Ali have also noted similar recovery patterns in past post-June slumps, hinting at a strong comeback in July. Supporting the bullish sentiment are the substantial inflows into US spot Bitcoin ETFs. This Monday, these funds recorded daily net inflows totaling $129.45 million, marking the fifth consecutive day of positive flows and the most substantial intake since early June. Related Reading: Bitcoin Begins Month With A Rebound As Metaplanet’s BTC Investment Tops $10 Million Leading the inflows were Fidelity’s FBTC and Bitwise’s BITB, with significant contributions, suggesting that institutional interest remains strong despite the market’s recent fluctuations. Featured image created with DALL-E, Chart from TradingView",
                        "pubDate" => 1719972008,
                        "keywords" => [
                            "bitcoin news",
                            "bitcoin",
                            "bitcoin analysis",
                            "bitcoin market",
                            "bitcoin price prediction",
                            "btc",
                            "btcusdt",
                            "crypto market"
                        ],
                        "author" => "Samuel Edyme",
                        "link" => "https://www.newsbtc.com/bitcoin-news/buckle-up-here-is-why-bitcoin-might-just-be-gearing/",
                        "provider" => "NewsBTC",
                        "summary" => "",
                        "thImage" => "https://www.newsbtc.com/wp-content/uploads/2024/07/DALL·E-2024-07-02-16.02.59-An-imaginative-digital-illustration-representing-Bitcoin-gearing-up-for-a-massive-surge.-The-scene-shows-a-large-metallic-Bitcoin-symbol-looking-lik.jpg?fit=460%2C460",
                        "category" => "cryptocurrencies",
                        "Negative" => 0,
                        "Neutral" => 0,
                        "Positive" => 0
                    ],
                    [
                        "title" => "Bitcoin Price Prediction: Whales Buying In? $20 Billion Volume Hints at Year-End Rally",
                        "articleBody" => "Bitcoin whales hint at year-end rally as trading volume surges to $20 billion despite recent price dip. Will Bitcoin price defy bearish predictions?\nThe post Bitcoin Price Prediction: Whales Buying In? $20 Billion Volume Hints at Year-End Rally appeared first on Cryptonews.\n",
                        "pubDate" => 1719967554,
                        "keywords" => [
                            "bitcoin news",
                            "bitcoin news",
                            "crypto news"
                        ],
                        "author" => "Arslan Butt",
                        "link" => "https://cryptonews.com/news/bitcoin-price-as-whales-buying-in.htm",
                        "provider" => "CryptoNews",
                        "category" => "cryptocurrencies",
                        "summary" => " ",
                        "thImage" => "https://cimg.co/wp-content/uploads/2024/07/03010224/1719968544-2.jpg"
                    ],
                    [
                        "title" => "Bitcoin long liquidation dominance hits 70% in June amid 2024 market volatility",
                        "articleBody" => "On-chain Highlights DEFINITION: The percentage of long liquidations out of all liquidations in a given timeframe, i.e., long liquidations / (long liquidations + short liquidations). In percentage terms, 50% means that there have been an equal amount of long and short liquidations, while values above 50% indicate more long liquidations, and values below 50% indicate […]\nThe post Bitcoin long liquidation dominance hits 70% in June amid 2024 market volatility appeared first on CryptoSlate.\n",
                        "pubDate" => 1719968425,
                        "keywords" => [],
                        "author" => "News Desk",
                        "link" => "https://cryptoslate.com/insights/bitcoin-long-liquidation-dominance-hits-70-in-june-amid-2024-market-volatility/",
                        "provider" => "Cryptoslate",
                        "category" => "cryptocurrencies",
                        "summary" => " ",
                        "thImage" => "https://cryptoslate.com/wp-content/uploads/2024/07/long.png"

                    ],
                ]
            ]

        ];

        return response()->json($response, 200);
    }

    public function test()
    {


        $data = [
            "symbols" => "all",
            "startDate" => 1716373411,
            "category" => "cryptocurrencies",
            "page" => 1,
            "pageLimit" => 10
        ];
        $response = Http::withHeaders([
            'Authorization' => '92223bf504efcfd0e6e000ba1f4d53f4'
        ])->post('http://79.175.177.113:15800/AimoonxNewsHUB/News/GetPaginatedData/', $data)->json();


        // $response = Http::withHeaders([
        //     'Authorization' => '92223bf504efcfd0e6e000ba1f4d53f4'
        // ])->post('http://79.175.177.113:15800/AimoonxNewsHUB/Provider/getProviders/')->json();



        // dd($response);

        return response()->json($response, 200);
    }

    public function getAuthor()
    {

        $header = [

            'Authorization' => '92223bf504efcfd0e6e000ba1f4d53f4'
        ];

        $url = "http://79.175.177.113:15800/AimoonxNewsHUB/Author/getAuthor/";

        $data = [];

        $response = Http::withHeaders($header)->post($url, $data)->json();

        // dd($response);

        return response()->json($response, 200);
    }

    public function LLMChat()
    {

        $header = [

            'Authorization' => '92223bf504efcfd0e6e000ba1f4d53f4'
        ];

        $url = "http://79.175.177.113:15800/AimoonxNewsHUB/LLM/LLMChat/";

        $data = [
            "prompt" => "strat chat with me!"
        ];

        $response = Http::withHeaders($header)->post($url, $data)->json();

        // dd($response);

        return response()->json($response, 200);
    }

    // cardNews
}
