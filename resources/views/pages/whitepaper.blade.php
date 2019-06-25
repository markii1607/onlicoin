@extends('website_layout')
@section('header')
<!-- @include('pages.header-outside') -->
@stop

@section('content')
<div class="container">
    <div class="row wp">
        <div class="col-sm-5">
            <div class="whitepaperlinks">
                <ul>
                    <li>
                        <a href="#sec1">ONLICOIN</a>
                    </li>
                    <li>
                        <a href="#sec2">ONLICOIN AS A POLYMORPHIC CURRENCY</a>
                    </li>
                    <li>
                        <a href="#sec3">ONLICOIN AND BLOCKCHAIN</a>
                    </li>
                    <li>
                        <a href="#sec4">What exactly is blockchain?</a>
                    </li>
                    <li>
                        <a href="#sec5">What makes blockchain more secure compared to others?</a>
                    </li>
                    <li>
                        <a href="#sec6">MULTI-PURPOSE USE OF ONLICOIN AS A DIGITAL CURRENCY</a>
                    </li>
                    <li>
                        <a href="#sec7">FOOTNOTES</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="col-sm-7">
            <div class="whitepapercontent">
                <section id="sec1">
                    <h2>ONLICOIN</h2>
                    <p>The most popular digital assets such as Bitcoin (BTC) and Ether (ETH) are too volatile and
                        fluctuates often
                        in value. This puts investors in a mixed-opinion state since volatility is a big factor in
                        investing. For
                        example, the value of a bitcoin often experiences large fluctuations, rising or falling by as
                        much as 25% in
                        a single day and occasionally rising over 300% in a month.</p>
                </section>
                <section id="sec2">
                    <h2>ONLICOIN AS A POLYMORPHIC CURRENCY</h2>
                    <p>Onlicoin aims to mitigate that problem. Onlicoin is a polymorphic currency wherein a single coin
                        is
                        convertible to different types of cryptocurrencies. Cryptocurrency volatility in value can be
                        mitigated by
                        another cryptocurrency value. Meaning, for example, if bitcoin’s value fluctuates, it can be
                        easily
                        converted to another cryptocurrency, such as Ether or Monero to control its value. By switching
                        to different
                        kinds of cryptocurrency at any time, your investment reaches a stability point, regardless of
                        the volatility
                        of other cryptocurrencies.</p>
                </section>
                <section id="sec3">
                    <h2>ONLICOIN AND BLOCKCHAIN</h2>
                    <p>Onlicoin’s greatest strength is in its security. The platform itself is secure, unbreachable, and
                        reliable.
                        Onlicoin achieves all of those through the use of blockchain technology.</p>
                </section>
                <section id="sec4">
                    <h3>What exactly is blockchain?</h3>
                    <p>A blockchain, in simple terms, is a long list of information grouped together into blocks, bound
                        together by
                        a “chain”. To elaborate further, a block is a container which contains batches of validated
                        transactional
                        information. Every piece of transactional information is grouped together into batches. Batches
                        are then
                        grouped together in order to form a block. These blocks are grouped together by order of
                        transactions,
                        starting from oldest (first block) to latest (last block). Each block contains a cryptographic
                        hash of the
                        previous block (except the root block). The cryptographic hash from the previous block is what
                        forms the
                        chain. The process iterates up to the first block in the chain (oldest). The iteration is what
                        links all the
                        blocks together, creating a very long list of information, thus, the name blockchain.</p>
                </section>
                <section id="sec5">
                    <h3>What makes blockchain more secure compared to others?</h3>
                    <p>It all boils down to three concepts: </p>

                    <h3>Cryptographic Hash</h3>
                    <p> A hash is a random combination of letters, numbers, and symbols that is
                        unique and is
                        used to identify blocks. Hashes are calculated when a new block is created and this is what
                        binds the blocks
                        together. Each block contains three components: the information stored inside the block, its own
                        hash, and
                        the hash of the previous block. The hash in every block ensures that every block within the
                        blockchain is
                        tamper-proof. Any changes to the block’s content, no matter how small it is, will drastically
                        change the
                        generated hash of that particular block. A hacker can try to edit transactions in a block, but
                        that would
                        make the entire block’s hash vastly different from its original hash.
                    </p>

                    <h3>Proof of Work</h3>
                    <p> This is a consensus algorithm in a blockchain used to confirm transactions and
                        produce new
                        blocks in a chain. This feature allows the blockchain to be virtually impossible to manipulate
                        by rewarding
                        miners who are constantly checking, verifying and creating blocks in a seamless way.
                    </p>

                    <h3>Peer to Peer Network</h3>
                    <p> A distributed type of network where each node has the exact copy of the
                        entire
                        blockchain and constantly updates it along with other nodes within the network. Adding to that,
                        the
                        peer-to-peer network ensures that there are multiple backups of the entire blockchain.
                    </p>
                </section>
                <section id="sec6">
                    <h2>MULTI-PURPOSE USE OF ONLICOIN AS A DIGITAL CURRENCY</h2>
                    <p>Proving Onlicoin as Stable and Secure, here are its applications: </p>

                    <h3>Exchange Services</h3>
                    <p> As mentioned above, Onlicoin is a polymorphic currency which makes it
                        versatile. Other
                        than its potential to be exchanged to different cryptocurrencies, Onlicoin can also be exchanged
                        into
                        various fiat currencies. </p>

                    <h3>Remittance Services</h3>
                    <p> Onlicoin is an easily transferable digital currency. Sending funds or
                        receiving
                        payments using Onlicoin are one of the features that the platform provides. </p>

                    <h3> Investment Services </h3>
                    <p> Through the help of the financial traders of the company, Onlicoin offers
                        its
                        subscription feature for people who are looking for low-risk investment opportunities.
                    </p>
                </section>
                <section id="sec7">
                    <h2>FOOTNOTES</h2>
                    <ol>
                        <li><a href="">David Ernst Hard Problems in Cryptocurrency.
                                (https://github.com/ethereum/wiki/wiki/Problems)</a></li>
                        <li><a href="">https://cointelegraph.com/explained/proof-of-work-explained</a></li>
                        <li><a href="">(Link to How it Works Page)</a></li>
                    </ol>
                </section>
            </div>
        </div>
    </div>
</div>

</div>
@stop
@section('footer')
@include('pages.footer-outside')
@stop