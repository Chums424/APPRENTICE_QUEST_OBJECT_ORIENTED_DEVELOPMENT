# 継承を使うことができる

## 1. 抽象クラス

### 抽象クラスを定義し、継承させることで共通概念の引き継ぎを行うことができます。抽象クラスとは何かをプログラミング初心者にわかるように説明してください。また、抽象クラスを継承する実装を行ってください。

抽象クラス（Abstract Class）は、オブジェクト指向プログラミングにおいて、他のクラスに共通の特性やメソッドを提供し、それを継承するクラスに継承させるためのクラスの一種です。抽象クラスは直接インスタンス化できず、実際のオブジェクトを生成するための基本的な設計を提供します。
抽象クラスは他のクラスの「テンプレート」のようなものであり、具体的なクラスがそれを継承することで、共通の特性やメソッドを再利用できるようになります。

抽象クラスの特徴：

1. 直接インスタンス化できない: 抽象クラス自体はオブジェクトを生成できないため、抽象クラスのインスタンスを作成することはできません。

2. 抽象メソッドを含むことができる: 抽象クラスは、未実装のメソッド（抽象メソッド）を含むことができます。これらのメソッドは派生クラスで必ず実装しなければなりません。

3. 具体的なメソッドを含むこともできる: 抽象クラスには抽象メソッド以外の通常のメソッドも含むことができます。これらのメソッドは通常のメソッドと同じように動作します。

　メソッドシグネチャ(メソッド名と引数の有無、戻り値の型といったメソッド定義)だけで処理が記述されていないメソッドのことを「抽象メソッド」といい、メソッドシグネチャの先頭に必ず「abstract」を付けるのが約束事です。
　また、抽象メソッドを含むクラスのことを「抽象クラス」といい、こちらもクラス定義の先頭に必ず「abstract」を付けるのが約束事です。
　なお抽象クラスのクラス名は、通常「Abstract～」とします。

抽象メソッド（抽象クラス）を利用する利点：
- そのクラスを継承した子クラスでは、必ず抽象メソッドをオーバーライドする必要がある、ということです。抽象メソッドを実装し忘れるとエラーとなります。


## 2. インターフェース

### インターフェースとは何かをプログラミング初心者にわかるように説明してください。また、インターフェースの実装を行ってください。

インターフェース（Interface）は、オブジェクト指向プログラミングにおいて、クラスが特定のメソッドや振る舞いを提供する契約のようなものです。インターフェースはクラスが実装しなければならないメソッドの一覧を定義しますが、実際の実装を提供しません。インターフェースは、クラスが共通の振る舞いを持つことを保証するために使用され、多重継承の代替手段としても機能します。

インターフェースの特徴：

- インターフェースはメソッドの署名（メソッド名と引数）を定義し、そのメソッドをクラスに実装させることを要求します。
- クラスは複数のインターフェースを実装でき、このように複数の契約を満たすことができます。
- インターフェースは実際の実装を提供せず、クラスはそれを実装しなければなりません。

　インターフェースを使うことで、クラスが特定のメソッドを提供することを確実にし、異なるクラスが同じインターフェースを実装することで、コードの柔軟性と再利用性を向上させることができます。

　抽象クラスは普通のクラスに幾つか抽象メソッドが含まれた状態でした。つまり、普通のメソッドと抽象メソッドが混在しています。これを、抽象メソッドのみにすると、インタフェースとなります。インタフェースはもはやクラスとは呼びません。従って、定義するときもclass宣言ではなく「interface」で宣言します。逆に、interfaceで宣言した場合は、その中には抽象メソッドしか記述できません。そのため、それぞれのメソッドにはもはや「abstract」を付ける必要がありません。

　また、インタフェースを利用したクラスを作成する場合、それは継承とは言わず「実装」と言います。キーワードもextendsではなく「implements」となります。その際、抽象クラス同様に、インタフェースに記述された抽象メソッドを全て実装する必要があります。
　インタフェースを実装する場合、そのインタフェースに記述されたメソッドは全て実装する必要がありますが、実装する必要がないメソッドがある場合は、処理のないように記述すればいいです。