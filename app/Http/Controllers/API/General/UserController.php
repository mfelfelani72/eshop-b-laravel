<?php

namespace App\Http\Controllers\API\General;

use App\Http\Controllers\API\BaseController;

use App\Models\General\User;
use Illuminate\Http\Request;

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
                ]
            ]

        ];

        return response()->json($response, 200);
    }
}
